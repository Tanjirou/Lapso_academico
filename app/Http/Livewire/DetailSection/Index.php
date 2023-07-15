<?php

namespace App\Http\Livewire\DetailSection;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Department;
use App\Models\AcademicLapse;
use App\Models\TemporaryTable;
use App\Models\AcademicCurriculum;
use App\Models\DetailSection;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $sections,$section_number,$subjects,$academic_lapse, $selectedSubject = null,
    $department,$evaluate_section, $student_numbers, $studentSearch, $userId,
    $query = null,$studentName, $subjectId, $academicCurricula,$academicCurriculaId,$mention,$qualificationResult;
    public Section $section;
    protected $rules =[
        'selectedSubject'=>'required',
        'section_number' => 'required',
        'student_numbers' => 'required'
    ];
    public function mount(){
        $this->userId = auth()->id();

        $this->subjects = Subject::join('sections','subjects.id','=','sections.subjectid')
            ->join('teachers','teachers.id','=','sections.teacherid')
            ->select('subjects.*')
            ->distinct()
            ->get();
        DB::table('temporary_tables')->where('teacher_dni',auth()->user()->id)->delete();
        $this->section = new Section();
        $this->academicCurricula = AcademicCurriculum::where('status','A')->get();
        $this->academic_lapse = AcademicLapse::where('status','A')->first();
        $this->department = Department::join('teachers','departments.id','=','teachers.ndepartament')
        ->where('teachers.userid',auth()->user()->id)->select('departments.*')->first();
    }
    public function updatedSelectedSubject($subjectid){
        if($subjectid && $subjectid !='Seleccione'){
            $this->sections = Section::join('teachers','teachers.id','=','sections.teacherid')
            ->where('teachers.userid',auth()->user()->id)
            ->where('sections.subjectid',$subjectid)
            ->where('sections.status','=','A')
            ->select('sections.*')
            ->get();
            $this->subjectId = $subjectid;
        }else{
            $this->sections = null;
            $subjectid = null;
            $this->selectedSubject = null;
        }
    }
    public function save(){
        $this->validate();
        $section = Section::where('id',$this->section_number)->first();
        $this->evaluate_section = $section;
    }
    public function studentSearch(){
        if(!is_null($this->query)){
            $this->studentSearch = Student::where('dni','like','%'.$this->query.'%')
            ->select('students.*')
            ->first();
            if(!is_null($this->studentSearch)){
                $this->academicCurriculaId = $this->studentSearch->academic_curriculaid;
            }else{
                $this->academicCurriculaId = null;
            }
        }

    }
    public function store(){

        $this->rules = [
            'query'=>'required',
            'academicCurriculaId' =>'required',
            'qualificationResult' => 'required'
        ];
        $this->validate();
        $student = Student::where('dni','=',$this->query)->first();;
        if(is_null($student)){
            $student = Student::create([
                'academic_curriculaid' => $this->academicCurriculaId,
                'dni' => $this->query,
                'status' => 'A'
            ]);
        }
        if($student->id == $this->userId){
            session()->flash('mens-error-student', 'No puede agregarse a usted mismo.');
        }else{
            $temporary = TemporaryTable::where('studentid',$student->id)
            ->where('teacher_dni','=',$this->userId)->first();
            if(is_null($temporary)){
                $temporaryResult = TemporaryTable::where('teacher_dni','=',$this->userId)->get();
                $count = $temporaryResult->count();
                if($count< $this->student_numbers){
                    $studentExist = DetailSection::join('sections', 'detail_sections.sectionid','=','sections.id')
                        ->where('sections.academic_lapseid','=',$this->academic_lapse->id)
                        ->where('sections.subjectid','=', $this->subjectId)
                        ->where('detail_sections.studentid','=',$student->id)
                        ->first();
                    if(is_null($studentExist)){
                        TemporaryTable::create([
                            'sectionid' => $this->section_number,
                            'studentid' => $student->id,
                            'studentcurriculum' => $student->academic_curriculaid,
                            'teacher_dni' => $this->userId,
                            'qualification' => $this->qualificationResult,
                            'status' => 'A'
                        ]);
                    }else{
                        session()->flash('mens-error-student', 'Ya ha sido evaluado ese estudiante.');
                    }

                }else{
                    session()->flash('mens-error-student', 'Ha excedido el limite de estudiantes a cargar.');
                }
            }else{
                session()->flash('mens-error-student', 'Ya se encuentra agregado ese estudiante.');
            }
        }
            $this->query = null;
            $this->studentName = null;
            $this->qualificationResult = null;
            $this->reset('academicCurriculaId');
    }
    public function delete(TemporaryTable $temporaryTable){
        $temporary = TemporaryTable::where('id','=',$temporaryTable->id)->first();
        $temporary->delete();
    }

    public function recordInformation(){
        $temporaryResult = TemporaryTable::where('teacher_dni','=',$this->userId)->get();
        $count = $temporaryResult->count();
        if($count == $this->student_numbers){
            foreach($temporaryResult as $temporary){
                DetailSection::create([
                    'sectionid'=> $temporary->sectionid,
                    'studentid' => $temporary->studentid,
                    'studentcurriculum' => $temporary->studentcurriculum,
                    'qualification' => $temporary->qualification,
                    'status' => 'F'
                ]);
            }
            DB::table('sections')->where('id','=',$temporary->sectionid)->update(['status'=>'F']);
            DB::table('temporary_tables')->where('teacher_dni',$this->userId)->delete();
            session()->flash('mens', 'Registros guardados correctamente.');
            $this->query = null;
            $this->studentName = null;
            $this->qualificationResult = null;
            $this->evaluate_section = null;
            $this->reset('subjects','sections','evaluate_section','academicCurriculaId','selectedSubject','section_number','student_numbers');
            $this->section = new Section();
            $this->mount();
        }else{
            session()->flash('mens-error-student', 'Faltan estudiantes por evaluar');
        }

    }

    public function render()
    {

        $temporaryTables = TemporaryTable::join('academic_curricula','temporary_tables.studentcurriculum','=','academic_curricula.id')
        ->join('students','temporary_tables.studentid','=', 'students.id')
        ->where('temporary_tables.teacher_dni','=',$this->userId)
        ->select('students.dni as dni','academic_curricula.description as description',
        'temporary_tables.*')
        ->get();
        return view('livewire.detail-section.index',['temporaryTables' => $temporaryTables]);
    }
}

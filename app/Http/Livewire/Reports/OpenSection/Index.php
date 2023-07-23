<?php

namespace App\Http\Livewire\Reports\OpenSection;
use App\Models\Mention;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\AcademicLapse;
use App\Models\DetailSection;
use App\Models\StudentHistory;
use App\Models\StructureSection;
use App\Models\DepartmentSection;
use App\Models\TemporalOpeningSection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $teacher, $subject,$department, $departmentSectionEnable = false, $subjectSectionEnable = false, $department_sections, $detail_sections, $subjects, $section, $section_number, $countstudents, $studaprob, $studrep, $sections_not_updated, $optionds, $optionsub, $optionsec, $academic_lapse, $lapse;
    public $selectedDepartmentSection= null, $selectedSubject = null;

    protected $rules=[
        'optionds' => 'required',
    ];
    protected $messages =[
        'optionds.required' => 'Debe seleccionar una opción.',
        'selectedDepartmentSection.required' => 'El campo sección del departamento es obligatorio.'
    ];
    public function mount()
    {
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->detail_sections = new DetailSection();
        if(auth()->user()->user_type >=3){
            $this->department_sections = DepartmentSection::join('structure_sections','department_sections.id','=','structure_sections.department_sectionid')
            ->join('subjects','structure_sections.subjectid','=','subjects.id')
            ->where('department_sections.departmentid',$this->teacher->ndepartament)
            ->where('department_sections.id',$this->teacher->nmention)
            ->select('department_sections.*')
            ->get();
        }else{
            $this->department_sections = DepartmentSection::join('structure_sections','department_sections.id','=','structure_sections.department_sectionid')
            ->join('subjects','structure_sections.subjectid','=','subjects.id')
            ->where('department_sections.departmentid',$this->teacher->ndepartament)
            ->select('department_sections.*')
            ->get();
        }

    }

    public function generate(){
        if($this->optionds=='option2'){
            $this->rules =[
                'optionds' => 'required',
                'selectedDepartmentSection' => 'required'
            ];
        }
        $this->validate();
        //Buscamos la estructura
        $structureSection = StructureSection::join('department_sections','structure_sections.department_sectionid','=','department_sections')
        ->join('departments','department_sections.departmentid','=','departments.id')
        ->join('subjects','structure_sections.subjectid','=','subjects.id')
        ->where('departments.id','=',$this->teacher->ndepartament)
        ->select('structure_sections.*')
        ->get();
        foreach($structureSection as $structure){
            $cantStudentApr = 0;
            $cantStudentRepr = 0;
            $subjectId = null;
            $studentHistories = StudentHistory::join('subjects','student_histories.subjectid','=','subjects.id')
            ->join('structure_sections','subjects.id','=','structure_sections.subjectid')
            ->join('department_sections','structure_sections.department_sectionid','=','department_sections')
            ->join('departments','department_sections.departmentid','=','departments.id')
            ->where('departments.id','=',$this->teacher->ndepartament)
            ->where('subjects.id','=',$structure->subjectid)
            ->select('student_histories.*')
            ->orderByDesc('student_histories.id')
            ->groupBy('student_histories.qualification')
            ->get();
            foreach($studentHistories as $student){
                if($structure->subjectid == $student->subjectid){
                    $subject = Subject::where('id','=',$structure->subjectid)->first();
                    $mention = Subject::join('mentions','mentions.subjectid','=','subjectis.id')
                                   ->join('academic_curricula','mentions.academic_curriculaid','=','academic_curricula.id')
                                   ->join('students','academic_curricula.id','=','students.academic_curriculaid')
                                   ->where('mentions.pre_req','like', "%$subject->code%")
                                   ->select('subjects.*')
                                   ->get();
                    if($student->qualification == 'Aprobado'){
                        $subjectId = $student->subjectid;
                        $cantStudentApr ++;
                        if($mention){
                            foreach($mention as $me){
                                $cant = ceil($cantStudentApr/$me->average_students);
                                if($me->id == $structure->subjectid){

                                }
                                TemporalOpeningSection::create([
                                    'subject' => $me->name,
                                    'section_numbers' => $cant
                                ]);
                            }
                        }
                            }
                    }else{
                        if($subjectId != $student->subjectid){
                            $cantStudentRepr++;
                        }
                    }
                }
            }

        }

    public function render()
    {
        $detail_sections = DB::table('detail_sections')
        ->join('sections','detail_sections.sectionid','=','sections.id')
        ->join('subjects','sections.subjectid','=','subjects.id')
        ->join('department_sections','subjects.departmentsectionid','=','department_sections.id')
        ->join('departments','department_sections.departmentid','=','departments.id')
        ->where('sections.status','=','F')
        ->where('detail_sections.status','=','F')
        ->select('department_sections.description as department_section','subjects.name as subject','sections.section_number')
        ->groupBy('department_sections.description','subjects.name','sections.section_number')
        ->simplePaginate(10);
        return view('livewire.reports.open-section.index',[
            'detail_sections'=>$detail_sections
        ]);


    }
}

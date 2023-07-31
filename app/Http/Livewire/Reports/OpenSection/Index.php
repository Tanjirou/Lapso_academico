<?php

namespace App\Http\Livewire\Reports\OpenSection;

use App\Models\Mention;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\ReportTwo;
use App\Models\Department;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\AcademicLapse;
use App\Models\DetailSection;
use App\Models\StudentHistory;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\StructureSection;
use App\Models\DepartmentSection;
use App\Models\DepartmentResource;
use Illuminate\Support\Facades\DB;
use App\Models\TemporalOpeningSection;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $teacher, $subject, $department, $departmentSectionEnable = false, $subjectSectionEnable = false, $department_sections, $detail_sections, $subjects, $section, $section_number, $countstudents, $studaprob, $studrep, $sections_not_updated, $optionds, $optionsub, $optionsec, $academic_lapse, $lapse;
    public $selectedDepartmentSection = null, $selectedSubject = null;
    public $activeLapse;
    protected $rules = [
        'optionds' => 'required',
    ];
    protected $messages = [
        'optionds.required' => 'Debe seleccionar una opción.',
        'selectedDepartmentSection.required' => 'El campo sección del departamento es obligatorio.'
    ];
    public function mount()
    {
        $this->teacher = Teacher::where('userid', auth()->user()->id)->first();
        $this->department = Department::where('id', '=', $this->teacher->ndepartament)->first();
        $this->detail_sections = new DetailSection();
        $this->activeLapse = AcademicLapse::orderByDesc('id')->first();
        if (auth()->user()->user_type >= 3) {
            $this->department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                ->where('department_sections.departmentid', $this->teacher->ndepartament)
                // ->where('department_sections.id', $this->teacher->nmention)
                ->select('department_sections.*')
                ->get();
        } else {
            $this->department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                ->where('department_sections.departmentid', $this->teacher->ndepartament)
                ->select('department_sections.*')
                ->distinct()
                ->get();
            $this->optionds = 'option1';
        }
    }

    public function updatedOptionds($department_sectionId)
    {
        if ($this->optionds == 'option2') {
            $teacher = Teacher::where('userid', auth()->user()->id)->first();
            $department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                ->where('department_sections.departmentid', $teacher->ndepartament)
                ->select('department_sections.*')
                ->get();
            $this->departmentSectionEnable = true;
        } else {
            $this->departmentSectionEnable = false;
        }
    }

    public function generate(Request $request)
    {
        DB::table('report_twos')->where('dni', '=', auth()->user()->dni)->delete();
        DB::table('temporal_opening_sections')->where('dni', '=', auth()->user()->dni)->delete();
        $teacher = Teacher::where('userid', '=', auth()->user()->id)->first();
        $department = Department::where('id', '=', $teacher->ndepartament)->first();
        if (auth()->user()->user_type == 2) {
            if ($request['optionds'] == 'option2') {
                $sectionDepartment = $request['secDep'];
                //Buscamos las materias del departamento
                $subjects = Subject::join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                    ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                    ->where('departments.id', '=', $department->id)
                    ->where('department_sections.id', '=', $sectionDepartment)
                    ->select('subjects.*')
                    ->get();
            } else {
                $subjects = Subject::join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                    ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                    ->where('departments.id', '=', $department->id)
                    ->select('subjects.*')
                    ->get();
            }
        } else {
            $subjects = Subject::join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                ->where('departments.id', '=', $department->id)
                ->where('department_sections.id', '=', $teacher->nmention)
                ->orWhere('department_sections.id', '=', null)
                ->select('subjects.*')
                ->get();
        }
        foreach ($subjects as $subject) {
            $cont_students = 0;
            $studentId = 0;
            //Buscamos las materias en el historico de estudiantes

            // $array = explode(",", $mention->pre_req);
            $aprobateStudets = StudentHistory::where('subjectid', '=', $subject->id)
                ->orderByDesc('id')
                ->select('qualification','id','studentid','subjectid')
                ->groupBy('qualification', 'id','studentid','subjectid')
                ->get();

            foreach ($aprobateStudets as $aprobateStudet) {
                if ($aprobateStudet->qualification === 'Aprobado') {
                    $studentId = $aprobateStudet->studentid;
                    //busco la materia que la abre
                    $mentions = Mention::join('academic_curricula', 'mentions.academic_curriculaid', '=', 'academic_curricula.id')
                        ->join('students', 'academic_curricula.id', '=', 'students.academic_curriculaid')
                        ->join('subjects', 'mentions.subjectid', '=', 'subjects.id')
                        ->where('mentions.pre_req', 'like', "%$subject->code%")
                        ->where('students.id','=',$aprobateStudet->studentid)
                        ->select('mentions.*','subjects.name', 'subjects.code','students.id as student','students.dni as student_dni')
                        ->get();
                    //Comprobamos los pre-requisitos
                    if (count($mentions) > 0) {
                        foreach ($mentions as $ment) {
                            $requirement = explode(",", $ment->pre_req);
                            $reprobate = false;
                            if (count($requirement) > 0) {
                                foreach ($requirement as $require) {
                                    $requiriSubject = StudentHistory::join('subjects', 'student_histories.subjectid', '=', 'subjects.id')
                                        ->join('mentions', 'subjects.id', '=', 'mentions.subjectid')
                                        ->join('academic_curricula', 'mentions.academic_curriculaid', '=', 'academic_curricula.id')
                                        ->join('students','students.academic_curriculaid','=', 'academic_curricula.id')
                                        ->where('subjects.code', '=', $require)
                                        ->select('student_histories.*')
                                        ->groupBy('student_histories.id','student_histories.subjectid')
                                        ->first();
                                    if ($requiriSubject) {
                                        $reprobate = false;
                                    } else {
                                        $reprobate = true;
                                        break;
                                    }
                                }
                            }
                            //Buscamos tambien que no tenga aprobada esa materia
                            if ($reprobate === false) {

                                $aprobateSubject = StudentHistory::where('subjectid', '=', $ment->subjectid)
                                    ->select('student_histories.*')
                                    ->orderByDesc('id')
                                    ->first();
                                    $empty = false;
                                    if(empty($aprobateSubject)){
                                        $empty = true;
                                    }
                                if ($empty) {
                                    $subjectNew = Subject::join('mentions','subjects.id','=','mentions.subjectid')
                                        ->join('academic_curricula','mentions.academic_curriculaid','=','academic_curricula.id')
                                        ->join('students','academic_curricula.id','=','students.academic_curriculaid')
                                        ->where('subjects.code', '=', $ment->code)
                                        ->where('students.id','=',$ment->student)
                                        ->select('subjects.*')
                                        ->first();
                                        $tempralOp = TemporalOpeningSection::where('dni','=', auth()->user()->dni)
                                        ->where('subject','=',$subjectNew->code)
                                        ->where('student_dni','=',$ment->student_dni)
                                        ->first();
                                        if(!$tempralOp){
                                            TemporalOpeningSection::create([
                                                'dni' => auth()->user()->dni,
                                                'subject' => $subjectNew->code,
                                                'student_dni' =>$ment->student_dni,
                                                'student' => 1
                                            ]);
                                        }

                                }
                            }
                        }
                    }
                } else {
                    if ($studentId !== $aprobateStudet->studentid) {
                        $studentId = $aprobateStudet->studentid;
                        $studentDni = Student::where('id','=',$aprobateStudet->studentid)->first();
                            TemporalOpeningSection::create([
                                'dni' => auth()->user()->dni,
                                'subject' => $subject->code,
                                'student_dni' =>$studentDni->dni,
                                'student' => 1
                            ]);
                    }
                }
            }
            //Consultamos la temporal para calcular las secciones
            $structureNumberSection = StructureSection::where('subjectid', '=', $subject->id)->first();
            $temporal = TemporalOpeningSection::where('dni', '=', auth()->user()->dni)
                ->where('subject', '=', $subject->code)
                ->get();
            $countStudent = count($temporal);
            if (isset($structureNumberSection) && $structureNumberSection->average_students > 0) {
                $countSubject = ceil($countStudent / $structureNumberSection->average_students);
            } else {
                $countSubject = 0;
            }
            if ($countSubject == 0 && $countStudent > 0) {
                $countSubject = 1;
            }
            $deparmentSection = DepartmentSection::where('id', '=', $subject->departmentsectionid)->first();
            ReportTwo::create([
                'dni' => auth()->user()->dni,
                'subject_code' => $subject->code,
                'subject' => $subject->name,
                'sections' => $deparmentSection->description,
                'student_cant' => $countSubject,
                'number_student' => $countStudent
            ]);
        }
        //Consultamos la temporal para mostrarla
        if(auth()->user()->user_type >= 3){
            $teacherHead = Teacher::where('userid', auth()->user()->id)->first();
            $departmentSection = DepartmentSection::where('id','=',$teacherHead->nmention)->first();
            $planification = ReportTwo::where('sections','=',$departmentSection->description)
                ->where('dni', '=', auth()->user()->dni)->get();
        }else{
            $planification = ReportTwo::where('dni', '=', auth()->user()->dni)->get();
        }

        //Buscamos los recursos
        $departmentResources = DepartmentResource::where('departmentid', '=', $department->id)->get();
        //Generamos el pdf

        $pdf = PDF::loadView('livewire.reports.open-section.report', compact('departmentResources'), compact('planification'));
        return $pdf->stream('resources.pdf');
    }

    public function render()
    {
        $detail_sections = DB::table('detail_sections')
            ->join('sections', 'detail_sections.sectionid', '=', 'sections.id')
            ->join('subjects', 'sections.subjectid', '=', 'subjects.id')
            ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
            ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
            ->where('sections.status', '=', 'F')
            ->where('detail_sections.status', '=', 'F')
            ->select('department_sections.description as department_section', 'subjects.name as subject', 'sections.section_number')
            ->groupBy('department_sections.description', 'subjects.name', 'sections.section_number')
            ->simplePaginate(10);
        return view('livewire.reports.open-section.index', [
            'detail_sections' => $detail_sections
        ]);
    }
}

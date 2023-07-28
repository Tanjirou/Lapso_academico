<?php

namespace App\Http\Livewire\Reports\OpenSection;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Mention;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\AcademicLapse;
use App\Models\DepartmentResource;
use App\Models\DetailSection;
use App\Models\StudentHistory;
use App\Models\StructureSection;
use App\Models\DepartmentSection;
use Illuminate\Support\Facades\DB;
use App\Models\TemporalOpeningSection;

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
        $this->department = Department::where('id','=',$this->teacher->ndepartament)->first();
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
        $teacher = Teacher::where('userid','=',auth()->user()->id)->first();
        $department = Department::where('id','=',$teacher->ndepartament)->first();
       if(auth()->user()->user_type == 2){
        if($this->optionds=='option2'){
            $this->rules =[
                'optionds' => 'required',
                'selectedDepartmentSection' => 'required'
            ];
            $this->validate($this->rules);
        }
        //Buscamos las materias del departamento
        $subjects = Subject::join('department_sections','subjects.id','=','department_sections.subjectid')
            ->join('departments','department_sections.departmentid','=','departments.id')
            ->where('departments.id','=',$department->id)
            ->select('subjects.*')
            ->get();
       }
       foreach($subjects as $subject){
        $cont_students = 0;
        $studentId = 0;
        //Buscamos las materias en el historico de estudiantes

       // $array = explode(",", $mention->pre_req);
        $aprobateStudets = StudentHistory::where('subjectid','=',$subject->id)
            ->orderByDesc('id')
            ->groupBy('qualification')
            ->get();

            foreach($aprobateStudets as $aprobateStudet){
                if($aprobateStudet->qualification == 'Aprobado'){
                    $studentId = $aprobateStudet->studentid;
                    //busco la materia que la abre
                    $mention = Mention::join('academic_curricula','mentions.academic_curriculaid','=','academic_curricula.id')
                    ->join('subjects','mentions.subjectid','=','subjects.id')
                    ->where('mentions.pre_req','like',"%$subject->code%")
                    ->select('mentions.*')->first();
                    //buscamos no tiene esa materia
                    if($mention){
                        $aprobateSubject = StudentHistory::where('subjectid','=',$mention->subjectid)->first();
                    }
                    if($mention && (is_null($aprobateSubject) || (isset($aprobateSubject->qualification) && $aprobateSubject->qualification != 'Aprobado'))){
                        $cont_students++;
                    }
                }else{
                    if($studentId !=$aprobateStudet->studentid){

                    }
                }

            }
       }

        //Buscamos los recursos
        $departmentResources = DepartmentResource::where('departmentid','=',$department->id)->get();
        //Generamos el pdf
        $pdf = PDF::loadView('livewire.reports.open-section.report',compact('departmentResources'));
        return $pdf->stream('resources.pdf');
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

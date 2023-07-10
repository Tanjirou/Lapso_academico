<?php

namespace App\Http\Livewire\Reports\EvaluationResult;

use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\AcademicLapse;
use App\Models\DetailSection;
use App\Models\DepartmentSection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $teacher, $subject,$department, $department_sections, $detail_sections, $subjects, $section, $section_number, $countstudents, $studaprob, $studrep, $sections_not_updated, $optionds, $optionsub, $optionsec, $academic_lapse, $lapse;
    public $selectedDepartmentSection= null, $selectedSubject = null;


    public function mount()
    {
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->academic_lapse = AcademicLapse::where('status','A')->first();
        $this->lapse = $this->academic_lapse->id;
        $this->department_sections = DepartmentSection::where('departmentid',$this->department->id)->get();
        $this->detail_sections = new DetailSection();
        $this->department_sections = DepartmentSection::join('structure_sections','department_sections.id','=','structure_sections.department_sectionid')
        ->join('subjects','structure_sections.subjectid','=','subjects.id')
        ->where('department_sections.departmentid',$this->teacher->ndepartament)
        ->select('department_sections.*')
        ->get();

    }

    public function updatedSelectedDepartmentSection($department_sectionId){
        if($department_sectionId != 'Seleccione' && !is_null($department_sectionId)){
            $this->subjects = Subject::where('departmentsectionid',$department_sectionId)->get();
        }else{
            $this->selectedDepartmentSection = null;
        }
        // $this->subject->name = null;
    }

    public function updatedSelectedSubject($subjectId){
        if($subjectId != 'Seleccione' && $subjectId && $this->selectedSubject){
            $this->sections_not_updated = Section::where('subjectid',$subjectId)
                            ->where('status','A')
                            ->whereNull('academic_lapseid')
                            ->whereNull('teacherid')
                            ->orderBy('section_number')
                            ->get();

        }else{
            $this->reset('selectedSubject');
            $this->subjects = null;
            $this->selectedSubject = null;
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
        return view('livewire.reports.evaluation-result.index',[
            'detail_sections'=>$detail_sections
        ]);
    }
}
// ->select('department_sections.description as department_section','subjects.name as subject','sections.section_number', COUNT(CASE WHEN detail.sections.qualification == 'Aprobado' THEN 1 END) as studaprob, COUNT(CASE WHEN detail.sections.qualification == 'Reprobado' THEN 1 END) as studrep)

// $nombre_de_columna=$results[0]->nombre_de_columna

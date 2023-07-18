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
    public $teacher, $subject,$department, $departmentSectionEnable = false, $subjectSectionEnable = false, $numberSectionEnable = false,
     $department_sections, $subjects,$detailSections = null, $department_sectionId, $section, $section_number, $countstudents, $studaprob, $studrep, $sections_not_updated, $optionds, $optionsub, $optionsec, $academic_lapse, $lapse;
    public $selectedDepartmentSection= null, $selectedSubject = null;
    public DetailSection $detailSection;

    public function mount()
    {
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->academic_lapse = AcademicLapse::where('status','A')->first();
        $this->lapse = $this->academic_lapse->id;
        $this->detailSections = null;
        $this->department_sections = DepartmentSection::where('departmentid',$this->department->id)->get();
        $this->department_sections = DepartmentSection::join('structure_sections','department_sections.id','=','structure_sections.department_sectionid')
        ->join('subjects','structure_sections.subjectid','=','subjects.id')
        ->where('department_sections.departmentid',$this->teacher->ndepartament)
        // ->where('sections.status','=','F')
        ->select('department_sections.*')
        ->distinct()
        ->get();

    }

    public function updatedSelectedDepartmentSection($department_sectionId){
        if($department_sectionId != 'Seleccione' && !is_null($department_sectionId)){
            $this->subjects = Subject::join('sections','subjects.id','=','sections.subjectid')
                ->join('detail_sections','sections.id','=','detail_sections.sectionid')
                ->join('department_sections','subjects.departmentsectionid','=','department_sections.id')
                ->where('subjects.departmentsectionid',$department_sectionId)
                ->where('department_sections.departmentid','=',$this->department->id)
                ->select('subjects.*')
                ->distinct()
                ->get();
        }else{
            $this->selectedDepartmentSection = null;
        }
        // $this->subject->name = null;
    }

    public function updatedOptionds($option){
        if(!is_null($this->optionds) && $this->optionds == 'option2'){
            $this->departmentSectionEnable = true;
        }else{
            $this->departmentSectionEnable = false;
        }
    }

    public function updatedSelectedSubject($subjectId){
        if($subjectId != 'Seleccione' && $subjectId && $this->selectedSubject){
            $this->sections_not_updated = Section::where('subjectid',$subjectId)
                            ->where('sections.status','=','F')
                            ->select('sections.*')
                            ->orderBy('section_number')
                            ->get();

        }else{
            $this->reset('selectedSubject');
            $this->subjects = null;
            $this->selectedSubject = null;
        }
    }

    public function updatedOptionsub($option){
        if(!is_null($this->optionsub) && $this->optionsub == 'option4'){
            $this->subjectSectionEnable = true;
        }else{
            $this->subjectSectionEnable = false;
        }
    }

    public function updatedOptionsec($option){
        if(!is_null($this->optionsec) && $this->optionsec == 'option6'){
            $this->numberSectionEnable = true;
        }else{
            $this->numberSectionEnable = false;
        }
    }

    public function search()
    {
        $optionds = $this->optionds;
        $optionsub = $this->optionsub;
        $optionsec = $this->optionsec;
        $selectedDepartmentSection = $this->selectedDepartmentSection;
        $selectedSubject = $this->selectedSubject;
        $detailSections = DetailSection::join('sections','detail_sections.sectionid','=','sections.id')
        ->join('subjects','sections.subjectid','=','subjects.id')
        ->join('department_sections','subjects.departmentsectionid','=','department_sections.id')
        ->join('departments','department_sections.departmentid','=','departments.id')
        ->where('sections.status','=','F')
        ->where('detail_sections.status','=','F')



        // ->select('department_sections.description as department_section','subjects.code as code','subjects.name as subject','sections.section_number as section_number');
        ->selectRaw("department_sections.description as department_section, subjects.code as code, subjects.name as subject, sections.section_number as section_number,
        COUNT(CASE WHEN detail_sections.qualification = 'aprobado' THEN 1 END) as aprobados,
        COUNT(CASE WHEN detail_sections.qualification = 'reprobado' THEN 1 END) as reprobados")
        ->groupBy('department_sections.description', 'subjects.code','subjects.name','sections.section_number');
        // ->simplePaginate(10);

        if($this->optionds && $optionds != 'option1'){
           $detailSections->where('department_sections.id','=',$this->selectedDepartmentSection);
        }
        if($this->optionsub && $optionsub != 'option3'){
            $detailSections->where('subjects.id','=',$this->selectedSubject);
         }
         if($this->optionsec && $optionsec != 'option5'){
            $detailSections->where('sections.id','=',$this->section_number);
         }
        $this->detailSections = $detailSections->get();

    }
    public function render()
    {
        return view('livewire.reports.evaluation-result.index');
    }
}

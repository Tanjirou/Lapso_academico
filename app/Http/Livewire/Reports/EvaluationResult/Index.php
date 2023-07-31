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
    public $teacher, $authTeacher, $userId, $subject, $department, $subject_cs = null, $departmentSectionEnable = false, $subjectSectionEnable = false, $numberSectionEnable = false,
        $department_sections, $subjects, $detailSections = null, $department_sectionId, $section, $section_number, $countstudents, $studaprob, $studrep, $sections_not_updated, $optionds, $optionsub, $optionsec, $academic_lapse, $lapse;
    public $selectedDepartmentSection = null, $selectedSubject = null;
    public DetailSection $detailSection;

    public function mount()
    {
        $this->optionds = 'option1';
        $this->optionsub = 'option3';
        $this->optionsec = 'option5';
        $this->teacher = Teacher::where('userid', auth()->user()->id)->first();
        $this->department = Department::where('id', $this->teacher->ndepartament)->first();
        $this->academic_lapse = AcademicLapse::orderByDesc('id')->first();
        $this->lapse = (($this->academic_lapse && isset($this->academic_lapse) && $this->academic_lapse->status == 'F') ? $this->academic_lapse->id : null);
        $this->subject_cs = null;
        $this->detailSections = null;
        if (auth()->user()->user_type == 2 || is_null($this->teacher->nmention)) {
            $this->department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                ->where('department_sections.departmentid', $this->teacher->ndepartament)

                // ->where('teachers.ndepartament', $this->department->id)

                //  ->where('sections.status','=','F')
                ->select('department_sections.*')
                ->distinct()
                ->get();
        } else {
            $specialCase = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                ->join('sections', 'structure_sections.id', '=', 'sections.structure_sectionid')
                ->where('department_sections.departmentid', $this->teacher->ndepartament)
                ->where('department_sections.description', 'like', '%Casos Especial%')
                ->first();
            if ($specialCase) {
                $this->department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                    ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                    ->join('sections', 'structure_sections.id', '=', 'sections.structure_sectionid')
                    ->where('department_sections.departmentid', $this->teacher->ndepartament)
                    ->select('department_sections.*')
                    ->distinct()
                    ->get();
                $this->subject_cs = $specialCase;
            } else {
                $this->department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
                    ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                    ->join('sections', 'structure_sections.id', '=', 'sections.structure_sectionid')
                    ->where('department_sections.departmentid', $this->teacher->ndepartament)
                    ->where('department_sections.id', '=', $this->teacher->nmention)
                    ->select('department_sections.*')
                    ->distinct()
                    ->get();
            }
            if (!$this->subject_cs) {
                $this->subjects = Subject::join('sections', 'subjects.id', '=', 'sections.subjectid')
                    ->join('detail_sections', 'sections.id', '=', 'detail_sections.sectionid')
                    ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                    ->where('subjects.departmentsectionid', $this->teacher->nmention)
                    ->where('department_sections.departmentid', '=', $this->department->id)
                    ->select('subjects.*')
                    ->distinct()
                    ->get();
            }
            $this->selectedDepartmentSection = $this->teacher->nmention;
        }
        if(auth()->user()->user_type ==3){
            $this->subjects = Subject::join('sections', 'subjects.id', '=', 'sections.subjectid')
            ->join('detail_sections', 'sections.id', '=', 'detail_sections.sectionid')
            ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
            ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
            ->join('teachers', 'teachers.ndepartament', '=', 'departments.id')
            ->orWhere('department_sections.id','=',$this->selectedDepartmentSection)
            ->select('subjects.*')
            ->distinct()
            ->get();
        }

    }

    public function updatedSelectedDepartmentSection($department_sectionId)
    {
        if (auth()->user()->user_type == 2) {
            if ($department_sectionId != 'Seleccione' && !is_null($department_sectionId)) {
                $this->subjects = Subject::join('sections', 'subjects.id', '=', 'sections.subjectid')
                    ->join('detail_sections', 'sections.id', '=', 'detail_sections.sectionid')
                    ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                    ->where('subjects.departmentsectionid', $department_sectionId)
                    ->where('department_sections.departmentid', '=', $this->department->id)
                    ->select('subjects.*')
                    ->distinct()
                    ->get();
            } else {
                $this->selectedDepartmentSection = null;
            }
        } else {
            if($department_sectionId != 'Seleccione' && !is_null($department_sectionId)){
                $this->authTeacher = Teacher::where('userid', '=', auth()->user()->id)->select('ndepartament')->first();
                $this->subjects = Subject::join('sections', 'subjects.id', '=', 'sections.subjectid')
                    ->join('detail_sections', 'sections.id', '=', 'detail_sections.sectionid')
                    ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                    ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                    ->join('teachers', 'teachers.ndepartament', '=', 'departments.id')
                    ->orWhere('department_sections.id','=',$this->selectedDepartmentSection)
                    ->select('subjects.*')
                    ->distinct()
                    ->get();
            }

        }
    }



    public function updatedOptionds($option)
    {
        if (!is_null($this->optionds) && $this->optionds == 'option2') {
            $this->departmentSectionEnable = true;
        } else {
            $this->departmentSectionEnable = false;
        }
    }

    public function updatedSelectedSubject($subjectId)
    {
        if ($subjectId != 'Seleccione' && $subjectId && $this->selectedSubject) {
            $this->sections_not_updated = Section::join('teachers', 'teachers.id', '=', 'sections.teacherid')
                // ->where('teachers.userid',auth()->user()->id)
                // ->where('sections.subjectid',$subjectId)
                ->where('subjectid', $subjectId)
                ->where('sections.status', '=', 'F')
                ->select('sections.*')
                ->orderBy('section_number')
                ->get();
        } else {
            $this->reset('selectedSubject');
            $this->subjects = null;
            $this->selectedSubject = null;
        }
    }


    public function updatedOptionsub($option)
    {
        if (!is_null($this->optionsub) && $this->optionsub == 'option4') {
            $this->subjectSectionEnable = true;
        } else {
            $this->subjectSectionEnable = false;
        }
    }

    public function updatedOptionsec($option)
    {
        if (!is_null($this->optionsec) && $this->optionsec == 'option6') {
            $this->numberSectionEnable = true;
        } else {
            $this->numberSectionEnable = false;
        }
    }

    public function search()
    {
        $this->userId = auth()->id();
        $optionds = $this->optionds;
        $optionsub = $this->optionsub;
        $optionsec = $this->optionsec;
        $selectedDepartmentSection = $this->selectedDepartmentSection;
        $selectedSubject = $this->selectedSubject;

        if (auth()->user()->user_type == 2)
            $detailSections = DetailSection::join('sections', 'detail_sections.sectionid', '=', 'sections.id')
                ->join('subjects', 'sections.subjectid', '=', 'subjects.id')
                ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                // ->join('teachers','teachers.id','=','sections.teacherid')
                ->where('departments.id', '=', $this->teacher->ndepartament)
                // ->where('teachers.userid','=',$this->userId)
                ->where('sections.status', '=', 'F')
                ->where('detail_sections.status', '=', 'F')
                ->selectRaw("department_sections.description as department_section, subjects.code as code, subjects.name as subject, sections.section_number as section_number,
        COUNT(CASE WHEN detail_sections.qualification = 'Aprobado' THEN 1 END) as aprobados,
        COUNT(CASE WHEN detail_sections.qualification = 'Reprobado' THEN 1 END) as reprobados")
                ->groupBy('department_sections.description', 'subjects.code', 'subjects.name', 'sections.section_number');
        elseif (auth()->user()->user_type == 3) {
            $detailSections = DetailSection::join('sections', 'detail_sections.sectionid', '=', 'sections.id')
                ->join('subjects', 'sections.subjectid', '=', 'subjects.id')
                ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                ->join('teachers', 'teachers.id', '=', 'sections.teacherid')

                ->where('department_sections.id', '=', $this->teacher->nmention)

                // ->orWhere('sections.teacherid', '=', $this->teacher->id)

                ->where('sections.status', '=', 'F')
                ->where('detail_sections.status', '=', 'F')
                ->selectRaw("department_sections.description as department_section, subjects.code as code, subjects.name as subject, sections.section_number as section_number,
        COUNT(CASE WHEN detail_sections.qualification = 'Aprobado' THEN 1 END) as aprobados,
        COUNT(CASE WHEN detail_sections.qualification = 'Reprobado' THEN 1 END) as reprobados")
                ->groupBy('department_sections.description', 'subjects.code', 'subjects.name', 'sections.section_number');
        }

            else {
            $detailSections = DetailSection::join('sections', 'detail_sections.sectionid', '=', 'sections.id')
                ->join('subjects', 'sections.subjectid', '=', 'subjects.id')
                ->join('department_sections', 'subjects.departmentsectionid', '=', 'department_sections.id')
                ->join('departments', 'department_sections.departmentid', '=', 'departments.id')
                ->join('teachers', 'teachers.ndepartament', '=', 'departments.id')
                // ->join('teachers','teachers.id','=','sections.teacherid')
                // ->join('departments','teachers.ndepartament','=','departments.id')
                ->where('departments.id', '=', $this->teacher->ndepartament)
                ->where('teachers.userid', '=', $this->userId)
                ->where('sections.teacherid', '=', $this->teacher->id)
                ->where('sections.status', '=', 'F')
                ->where('detail_sections.status', '=', 'F')
                ->selectRaw("department_sections.description as department_section, subjects.code as code, subjects.name as subject, sections.section_number as section_number,
        COUNT(CASE WHEN detail_sections.qualification = 'Aprobado' THEN 1 END) as aprobados,
        COUNT(CASE WHEN detail_sections.qualification = 'Reprobado' THEN 1 END) as reprobados")
                ->groupBy('department_sections.description', 'subjects.code', 'subjects.name', 'sections.section_number');
        }

        if ($this->optionds && $optionds != 'option1') {
            $detailSections->where('department_sections.id', '=', $this->selectedDepartmentSection);
        }
        if ($this->optionsub && $optionsub != 'option3') {
            $detailSections->where('subjects.id', '=', $this->selectedSubject);
        }
        if ($this->optionsec && $optionsec != 'option5') {
            $detailSections->where('sections.id', '=', $this->section_number);
        }
        // if ((auth()->user()->user_type == 3 &&  !is_null($this->subject_cs)) || !is_null($this->teacher->nmention)) {
        //     $detailSections->where('department_sections.id', '=', $this->teacher->nmention);
        // }

        if (count($detailSections->get()) == 0) {
            session()->flash('mens-error', 'No tiene calificación cargada.');
        }
        $this->detailSections = $detailSections->get();
    }
    public function render()
    {
        return view('livewire.reports.evaluation-result.index');
    }
}


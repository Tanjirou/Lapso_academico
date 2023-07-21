<?php

namespace App\Http\Livewire\Sections;

use App\Models\User;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use App\Models\AcademicLapse;
use App\Models\StructureSection;
use App\Models\DepartmentSection;
use App\Models\DetailSection;

class Index extends Component
{
    public $academic_lapse,$authTeacher, $section_number, $departments, $teacherid, $teacher, $department, $department_sections, $sections_not_updated,
        $subjects, $subjectCode, $lapse, $structure_sections, $selectedDepartmentSection = null, $selectedSubject = null;
    public Section $section;
    protected $rules = [
        'selectedDepartmentSection' => 'required',
        'selectedSubject' => 'required',
        'section_number' => 'required',
        'teacherid' => 'required',
        'lapse' => 'required'

    ];

    public function mount()
    {
        $this->teacher = Teacher::where('userid', auth()->user()->id)->first();
        $this->department = Department::where('id', $this->teacher->ndepartament)->first();
        $this->section = new Section();
        $this->academic_lapse = AcademicLapse::where('status', 'A')->first();
        $this->lapse = ($this->academic_lapse) ? $this->academic_lapse->id : null;
        $this->department_sections = DepartmentSection::join('structure_sections', 'department_sections.id', '=', 'structure_sections.department_sectionid')
            ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
            ->where('department_sections.departmentid', $this->teacher->ndepartament)
            ->distinct()
            ->select('department_sections.*')
            ->get();
        $this->authTeacher = Teacher::where('userid','=',auth()->user()->id)->select('nmention')->first();
        if(auth()->user()->id == 3){
            $this->selectedDepartmentSection = $this->authTeacher->nmention;
        }
        if($this->selectedDepartmentSection){
            $this->subjects = Subject::join('structure_sections', 'subjects.id','=','structure_sections.subjectid')
            ->where('subjects.departmentsectionid', $this->selectedDepartmentSection)
            ->select('subjects.*')
            ->get();
        }

    }

    public function updatedSelectedDepartmentSection($department_sectionId)
    {
        if ($department_sectionId != 'Seleccione' && !is_null($department_sectionId)) {
            $this->subjects = Subject::join('structure_sections', 'subjects.id','=','structure_sections.subjectid')
                ->where('subjects.departmentsectionid', $department_sectionId)
                ->select('subjects.*')
                ->get();
        }else{
            $this->selectedDepartmentSection = null;
            $this->subjectCode = null;
            $this->reset('selectedSubject','section_number','teacherid');
            $this->subjects = null;
            $this->selectedDepartmentSection = null;
        }
    }
    public function updatedSelectedSubject($subjectId)
    {
        if ($subjectId != 'Seleccione' && $subjectId && $this->selectedSubject) {
            $subjectCode = Subject::where('id', $subjectId)
                ->select('code')->first();
            $this->subjectCode = $subjectCode->code;
            $this->sections_not_updated = Section::where('subjectid', $subjectId)
                ->where('status', 'A')
                ->whereNull('academic_lapseid')
                ->whereNull('teacherid')
                ->orderBy('section_number')
                ->get();
            // $this->structure_sections = StructureSection::where('subjectid',$subjectId)
            //     ->where('department_sectionid',$this->selectedDepartmentSection)->first();
        } else {
            $this->reset('selectedSubject');
            $this->subjects = null;
            $this->selectedSubject = null;
            $this->subjectCode = null;
        }
    }
    public function save()
    {
        $this->validate();
        Section::where('id', $this->section_number)->update([
            'teacherid' => $this->teacherid,
            'academic_lapseid' => $this->lapse
        ]);
        $userTeacher = User::join('teachers', 'teachers.userid', '=', 'users.id')
            ->where('teachers.id', $this->teacherid)
            ->select('users.*')
            ->first();
        $departmentSection = DepartmentSection::join('subjects', 'department_sections.id', '=', 'subjects.departmentsectionid')
            ->where('department_sections.description', 'like', '%Casos Especiales%')
            ->where('subjects.id', '=', $this->selectedSubject)
            ->select('department_sections.*')
            ->first();
        if ($userTeacher && $userTeacher->user_type == 5 && $departmentSection) {
            User::where('id', '=', $userTeacher->id)->update([
                'user_type' => 4
            ]);
        }
        session()->flash('mens', 'Sección guardada correctamente.');
        $this->reset('lapse', 'selectedDepartmentSection', 'selectedSubject', 'section_number', 'teacherid');
        $this->mount();
    }
    public function delete(Section $section)
    {
        $this->section = $section;
        $detailSection = DetailSection::where('sectionid','=',$this->section->id)->first();
        if(!is_null($detailSection)){
            session()->flash('mens-error', 'No se puede eliminar esa sección.');
            $this->reset('lapse', 'selectedDepartmentSection', 'selectedSubject', 'section_number', 'teacherid');
            $this->mount();
        }else{
            $this->section->academic_lapseid = null;
            $this->teacherid = $this->section->teacherid;
            $this->section->teacherid = null;
            $this->section->save();
            $userTeacher = User::join('teachers', 'teachers.userid', '=', 'users.id')
                ->where('teachers.id', $this->teacherid)
                ->select('users.*','teachers.id as teacher')
                ->first();
            $section = Section::join('subjects','sections.subjectid','=','subjects.id')
                ->join('department_sections','subjects.departmentsectionid','=','department_sections.id')
                ->where('subjects.id', '=', $this->selectedSubject)
                ->where('sections.teacherid','=',$this->teacherid)
                ->where('department_sections.description', 'like', '%Casos Especiales%')
                ->orWhere('department_sections.description', 'like', '%Servicio Comunitario%')
                ->select('sections.*')
                ->first();

            if ($userTeacher && $userTeacher->user_type == 4 && is_null($section)) {
                User::where('id', '=', $userTeacher->id)->update([
                    'user_type' => 5
                ]);
            }
            session()->flash('mens', 'Sección eliminada correctamente.');
                $this->reset('lapse', 'selectedDepartmentSection', 'selectedSubject', 'section_number', 'teacherid');
                $this->mount();
        }
    }
    public function render()
    {
        $teachers = Teacher::join('users', 'teachers.userid', '=', 'users.id')
            ->where('teachers.ndepartament', $this->department->id)
            ->select('users.names as names', 'users.last_names as last_names', 'teachers.id')
            ->get();

        $sections = Section::where('sections.status', 'A')
            ->whereNotNull('sections.subjectid')
            ->whereNotNull('sections.academic_lapseid')
            ->whereNotNull('sections.structure_sectionid')
            ->join('academic_lapses', 'sections.academic_lapseid', '=', 'academic_lapses.id')
            ->join('teachers', 'sections.teacherid', '=', 'teachers.id')
            ->join('users', 'teachers.userid', '=', 'users.id')
            ->join('structure_sections', 'sections.structure_sectionid', '=', 'structure_sections.id')
            ->join('subjects', 'sections.subjectid', '=', 'subjects.id')
            ->select('sections.*', 'subjects.code as code', 'subjects.name as subject', 'academic_lapses.description as lapse', 'users.names as names', 'users.last_names as last_names')
            ->get();
        return view('livewire.sections.index', [
            'sections' => $sections,
            'teachers' => $teachers
        ]);
    }
}

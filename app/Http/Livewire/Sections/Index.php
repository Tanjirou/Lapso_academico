<?php

namespace App\Http\Livewire\Sections;

use App\Models\AcademicLapse;
use App\Models\Department;
use App\Models\DepartmentSection;
use App\Models\Section;
use App\Models\StructureSection;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;

class Index extends Component
{
    public $academic_lapse,$section_number,$departments,$teacherid, $teacher, $department,$department_sections,$sections_not_updated,
    $subjects,$lapse,$structure_sections,$selectedDepartmentSection = null,$selectedSubject = null;
    public Section $section;
    protected $rules = [
        'selectedDepartmentSection' =>'required',
        'selectedSubject' =>'required',
        'section_number' =>'required',
        'teacherid' => 'nullable',
        'lapse'=>'required'

    ];

    public function mount(){
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->section = new Section();
        $this->academic_lapse = AcademicLapse::where('status','A')->first();
        $this->lapse = $this->academic_lapse->id;
        $this->department_sections = DepartmentSection::join('structure_sections','department_sections.id','=','structure_sections.department_sectionid')
        ->join('subjects','structure_sections.subjectid','=','subjects.id')
        ->where('department_sections.departmentid',$this->teacher->ndepartament)
        ->select('department_sections.*')
        ->get();
    }

    public function updatedSelectedDepartmentSection($department_sectionId){
        if($department_sectionId != 'Seleccione' && !is_null($department_sectionId)){
            $this->subjects = Subject::where('subjects.departmentsectionid',$department_sectionId)->get();
        }
    }
    public function updatedSelectedSubject($subjectId){
        if($subjectId != 'Seleccione' && $subjectId && $this->selectedSubject){
            $this->sections_not_updated = Section::where('subjectid',$subjectId)
                            ->where('status','A')
                            ->whereNull('academic_lapseid')
                            ->whereNull('teacherid')
                            ->orderBy('section_number')
                            ->get();
            // $this->structure_sections = StructureSection::where('subjectid',$subjectId)
            //     ->where('department_sectionid',$this->selectedDepartmentSection)->first();
        }else{
            $this->reset('selectedSubject');
            $this->subjects = null;
            $this->selectedSubject = null;
        }
    }
    public function save(){
        $this->validate();
        Section::where('id',$this->section_number)->update([
            'teacherid'=>$this->teacherid,
            'academic_lapseid' => $this->lapse
        ]);
        session()->flash('mens', 'Sección guardada correctamente.');
        $this->reset('lapse','selectedDepartmentSection','selectedSubject','section_number','teacherid');
        $this->mount();
    }
    public function delete(Section $section){
        $this->section = $section;
        $this->section->academic_lapseid = null;
        $this->section->teacherid = null;
        $this->section->save();
        session()->flash('mens', 'Sección eliminada correctamente.');
        $this->reset('lapse','selectedDepartmentSection','selectedSubject','section_number','teacherid');
        $this->mount();
    }
    public function render()
    {
        $teachers = Teacher::join('users','teachers.userid','=','users.id')
        ->where('teachers.ndepartament',$this->department->id)
        ->select('users.names as names','users.last_names as last_names','teachers.id')
        ->get();

        $sections = Section::where('sections.status','A')
            ->whereNotNull('sections.subjectid')
            ->whereNotNull('sections.academic_lapseid')
            ->whereNotNull('sections.structure_sectionid')
            ->join('academic_lapses','sections.academic_lapseid','=','academic_lapses.id')
            ->join('teachers','sections.teacherid','=','teachers.id')
            ->join('users','teachers.userid','=','users.id')
            ->join('structure_sections','sections.structure_sectionid','=','structure_sections.id')
            ->join('subjects','sections.subjectid','=','subjects.id')
            ->select('sections.*', 'subjects.name as subject','academic_lapses.description as lapse', 'users.names as names','users.last_names as last_names')
            ->get();
        return view('livewire.sections.index',[
            'sections'=>$sections,
            'teachers' =>$teachers,

        ]);
    }
}
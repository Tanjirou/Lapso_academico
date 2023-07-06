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
    public $departments, $teacher, $department,$department_sections,
    $subjects,$structure_sections,$selectedDepartmentSection = null,$selectedSubject = null;
    public Section $section;
    protected $rules = [
        'selectedDepartmentSection' =>'required',
        'selectedSubject' =>'required',
        'section.section_number' =>'required',
        'section.teacherid' => 'required'

    ];

    public function mount(){
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->section = new Section();
        $this->department_sections = DepartmentSection::join('structure_sections','department_sections.id','=','structure_sections.department_sectionid')
        ->join('subjects','structure_sections.subjectid','=','subjects.id')
        ->where('department_sections.departmentid',$this->teacher->ndepartament)
        ->select('department_sections.*')
        ->get();
    }

    public function updatedSelectedDepartmentSection($department_sectionId){
        if($department_sectionId != 'Seleccione' && !is_null($department_sectionId)){
            $this->subjects = Subject::join('structure_sections','subjects.id','=','structure_sections.subjectid')
                ->where('subjects.departmentsectionid',$department_sectionId)->get();
        }
    }
    public function updatedSelectedSubject($subjectId){
        if($subjectId != 'Seleccione' && !is_null($subjectId)){
            $this->structure_sections = StructureSection::where('subjectid',$subjectId)
                ->where('department_sectionid',$this->selectedDepartmentSection)->first();
        }
    }
    public function render()
    {
        $teachers = Teacher::join('users','teachers.userid','=','users.id')
        ->where('teachers.ndepartament',$this->department->id)
        ->select('users.names as names','users.last_names as last_names','teachers.id')
        ->get();
        $academic_lapse = AcademicLapse::where('status','A')->first();
        $sections = Section::where('status','A')->get();
        return view('livewire.sections.index',[
            'sections'=>$sections,
            'teachers' =>$teachers,
            'academic_lapse' =>$academic_lapse
        ]);
    }
}

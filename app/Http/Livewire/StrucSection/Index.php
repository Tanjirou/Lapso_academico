<?php

namespace App\Http\Livewire\StrucSection;

use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\DepartmentSection;
use App\Models\StructureSection;
use Illuminate\Support\Facades\DB;
// use App\Models\AcademicCurriculum as AcademicCurriculumModel;

class Index extends Component
{
    public $department, $teacher,$department_sections,
    $subjects,$selectedDepartmentSection = null;
    public Subject $subject;
    public StructureSection $struc_section;
    protected $rules =[
        'struc_section.subjectid' => 'required|unique:structure_sections,subjectid',
        'selectedDepartmentSection' => 'required',
        'struc_section.average_students' => 'required',
        'struc_section.number_section' =>'required'
    ];
    public function mount(){
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->department_sections = DepartmentSection::where('departmentid',$this->department->id)->get();
        $this->subject = new Subject();
        $this->struc_section = new StructureSection();
    }
    public function updatedSelectedDepartmentSection($department_sectionId){
        if($department_sectionId != 'Seleccione' && !is_null($department_sectionId)){
            $this->subjects = Subject::where('departmentsectionid',$department_sectionId)->get();
        }else{
            $this->selectedDepartmentSection = null;
        }
        $this->subject->name = null;
    }
    public function save(){
        if(is_null($this->struc_section->id)){
            $this->rules =[
                'struc_section.subjectid' => 'required|unique:structure_sections,subjectid',
                'selectedDepartmentSection' => 'required',
                'struc_section.average_students' => 'required',
                'struc_section.number_section' =>'required'
            ];
        }else{
            $this->rules =[
                'struc_section.subjectid' => 'required|unique:structure_sections,subjectid,'.$this->struc_section->id,
                'selectedDepartmentSection' => 'required',
                'struc_section.average_students' => 'required',
                'struc_section.number_section' =>'required'
            ];
        }
        $this->validate();
        $this->struc_section->department_sectionid = $this->selectedDepartmentSection;
        $this->struc_section->save();
        session()->flash('mens', 'Estructura guardada correctamente.');
        $this->reset('selectedDepartmentSection');
        $this->mount();
    }
    public function edit(StructureSection $struc_section){
        $this->selectedDepartmentSection = $struc_section->department_sectionid;
        $this->struc_section = $struc_section;
        $this->subjects = Subject::where('departmentsectionid',$this->selectedDepartmentSection)->get();
    }
    public function delete(StructureSection $struc_section){
        $this->struc_section = $struc_section;
        $this->struc_section->delete();
        session()->flash('mens', 'Estructura eliminada correctamente.');
        $this->reset('selectedDepartmentSection');
        $this->mount();
    }
    public function render()
    {
        $struc_sections = DB::table('structure_sections')
            ->join('department_sections','structure_sections.department_sectionid','=','department_sections.id')
            ->join('subjects','structure_sections.subjectid','=','subjects.id')
            ->where('structure_sections.status','=','A')
            ->select('department_sections.description as department_section','subjects.name as subject',
            'structure_sections.*')
            ->simplePaginate(10);
        return view('livewire.struc-section.index',[
            'struc_sections'=> $struc_sections
        ]);
    }
}

<?php

namespace App\Http\Livewire\Departments;

use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\DepartmentSection;

class Index extends Component
{
    use WithPagination;
    //public $departments;
    public Department $department;
    public $enableDelete;
    protected $rules =['department.name'=>'required|max:60'];
    protected $paginationTheme = 'bootstrap';
    public function mount(){
        //$this->departments =Department::orderBy('id','desc')->paginate(3);
        $this->department = new Department();
    }
    public function updateddepartmentText()
    {
        $this->validate(['department.name'=>'max:60']);
    }
    public function edit(Department $department)
    {
        $this->department = $department;
    }
    public function done(Department $department)
    {
        $department->update(['done'=>!$department->done]);
        session()->flash('mens', 'Departamento actualizado correctamente.');
        $this->mount();
    }
    public function save()
    {
        $this->validate();
        $this->department->save();
        session()->flash('mens', 'Departamento guardado correctamente.');
        $this->mount();
        $this->emitUp('departmentSaved','Departamento guardado correctamente.');

    }
    public function delete(Department $department){
        $this->department = $department;
        session()->flash('mens', 'Departamento eliminado correctamente.');
        $this->mount();
        $this->emitUp('departmentSaved','Departamento eliminado correctamente.');
        $this->department->delete();
    }
    public function updatedEnableDelete($departmentId){
        $departmentSection = DepartmentSection::where('departmentid','=',$departmentId)->first();
        $teacher = Teacher::where('ndepartament','=',$departmentId)->first();
        if($departmentSection || $teacher){
            $this->enableDelete = false;
        }else{
            $this->enableDelete = true;
        }
    }
    public function render()
    {
        return view('livewire.departments.index',[
            'departments'=>Department::orderBy('id','desc')->paginate(10),
        ]);
    }
}

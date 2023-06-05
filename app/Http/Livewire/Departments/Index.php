<?php

namespace App\Http\Livewire\Departments;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Department;
class Index extends Component
{
    use WithPagination;
    //public $departments;
    public Department $department;
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
        $this->mount();
    }
    public function save()
    {
        $this->validate();
        $this->department->save();
        $this->mount();
        $this->emitUp('departmentSaved','Departamento guardado correctamente');

    }
    public function render()
    {
        return view('livewire.departments.index',[
            'departments'=>Department::orderBy('id','desc')->paginate(7),
        ]);
    }
}

<?php

namespace App\Http\Livewire\DepartmentSection;

use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\DepartmentSection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $departments;
    public Department $department;
    public DepartmentSection $departmentSection;
    protected $rules =['departmentSection.departmentid'=>'required','departmentSection.description'=>'required'];
    public function mount(){
        $this->departments = Department::all();
        $this->departmentSection = new DepartmentSection();
    }
    public function save()
    {
        $this->validate();
        $this->departmentSection->save();
        session()->flash('mens', 'Sección del departamento guardado correctamente.');
        $this->mount();
        $this->emitUp('departmentSectionsSaved','Sección del departamento guardado correctamente');
    }
    public function edit(DepartmentSection $departmentSection)
    {
        $this->departmentSection = $departmentSection;
    }
    public function updateddepartmentSectionText()
    {
        $this->validate($this->rules);
    }
    public function done(DepartmentSection $departmentSection)
    {
        $departmentSection->update(['done'=>!$departmentSection->done]);
        session()->flash('mens', 'Sección del departamento guardado correctamente.');
        $this->mount();
    }
    public function render()
    {   $departmentSections = DB::table('department_sections')
        ->join('departments','departments.id','=','department_sections.departmentid')
        ->select('department_sections.*', 'departments.name as department')
        ->orderByDesc('department_sections.departmentid')
        ->paginate(10);
        return view('livewire.department-section.index',['departmentSections'=>$departmentSections,]);
    }
}

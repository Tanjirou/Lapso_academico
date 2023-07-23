<?php

namespace App\Http\Livewire\DepartmentResources;

use Livewire\Component;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\DepartmentResource;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $department,$teacher,$departmentResources;
    public DepartmentResource $departmentResource;

    public $rules = [
        'departmentResource.description' => 'required',
        'departmentResource.quantity' => 'required|numeric'
    ];
    public function messages(){
        return [
            'departmentResource.description.required' => 'La recurso no puede estar vacío.',
            'departmentResource.quantity.required' => 'El campo cantidad no puede estar vacío.',
            'departmentResource.quantity.numeric' => 'El campo cantidad debe ser numérico.'
        ];
    }
    public function mount(){
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        $this->departmentResource = new DepartmentResource();
        $this->departmentResources = DepartmentResource::where('departmentid','=',$this->department->id)
            ->orderByDesc('updated_at')
            ->get();
    }

    public function save(){
        $this->validate();
        $this->departmentResource->departmentid = $this->department->id;
        $this->departmentResource->save();
        session()->flash('mens', 'Recurso guardado correctamente.');
        $this->mount();
    }

    public function edit(DepartmentResource $departmentResource){
        $this->departmentResource = $departmentResource;
    }

    public function delete(DepartmentResource $departmentResource){
        $this->departmentResource = $departmentResource;
        $this->departmentResource->delete();
        session()->flash('mens', 'Recurso eliminado correctamente.');
        $this->mount();
    }

    public function render()
    {
        return view('livewire.department-resources.index');
    }
}

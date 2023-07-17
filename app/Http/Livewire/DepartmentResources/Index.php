<?php

namespace App\Http\Livewire\DepartmentResources;

use Livewire\Component;
use App\Models\Teacher;
use App\Models\Department;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $department, $description, $quantity;

    public function mount(){
        $this->teacher = Teacher::where('userid',auth()->user()->id)->first();
        $this->department = Department::where('id',$this->teacher->ndepartament)->first();
        // if(auth()->user()->user_type == 3){
        //     $this->department_sections = DepartmentSection::where('departmentid',$this->department->id)
        //     ->where('id','=',$this->teacher->nmention)
        //     ->get();
        // }else{
        //     $this->department_sections = DepartmentSection::where('departmentid',$this->department->id)->get();
        // }

    }

    public function render()
    {
        return view('livewire.department-resources.index');
    }
}

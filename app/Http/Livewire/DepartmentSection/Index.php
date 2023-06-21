<?php

namespace App\Http\Livewire\DepartmentSection;

use App\Models\Department;
use Livewire\Component;

class Index extends Component
{
    public $departments,$department;

    public function mount(){
        $this->departments = Department::all();
    }
    public function render()
    {
        return view('livewire.department-section.index');
    }
}

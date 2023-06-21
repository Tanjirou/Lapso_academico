<?php

namespace App\Http\Livewire\Subjects;
use App\Models\Department;
use Livewire\Component;

class Index extends Component
{
    public $departments;
    public function mount(){
        $this->departments = Department::all();
    }
    public function render()
    {
        return view('livewire.subjects.index');
    }
}

<?php

namespace App\Http\Livewire\UserDep;

use App\Models\User;
use App\Models\Mention;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\UserType;
use App\Models\Department;

class Index extends Component
{
    public $user_types, $user_type, $departments;
    public $selectedDepartment = null;
    public $selectedMention = null;
    public $mentions = null;

    public function mount()
    {

    }

    public function updatedSelectedDepartment(User $user, Teacher $teacher, $department_id)
    {
        $this->mentions = Mention::where('departmentid', $department_id)->get();
    }

    public function render(User $user, Teacher $teacher)
    {
        //$this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
        if ($this->user_type != 1)
        {
            $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        }

        //$this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();


        return view('livewire.user.edit', ['departments'=>$this->departments]);
    }
}

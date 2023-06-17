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
    public $user_types, $departments, $selectedUser;
    public $selectedDepartment = null;
    public $selectedMention = null;
    public $mentions = null;

    public function mount()
    {
        $this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
        $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();
    }

    public function updatedSelectedDepartment(User $user, Teacher $teacher, $department_id)
    {
        $this->mentions = Mention::where('departmentid', $department_id)->get();
    }

    public function render(User $user, Teacher $teacher, $selectedUser)
    {
        if($selectedUser!=1 && $selectedUser!=2  && $selectedUser!=4 && !empty($selectedUser) && !is_null($selectedUser))
        {
            $teacher = Teacher::where('userid','=', $user->id)->first()->with('teacher', $teacher)->with('user', $user)->with('user_types', $this->user_types)->with('departments', $this->departments)->with('mentions', $this->mentions)->with('selectedUser', $this->selectedUser)->with('selectedDepartment', $this->selectedDepartment);
        }
            elseif($selectedUser!=1 && $selectedUser!=3 && $selectedUser!=5 && !is_null($selectedUser))
            {
                $teacher = Teacher::where('userid','=', $user->id)->first()->with('teacher', $teacher)->with('user', $user)->with('user_types', $this->user_types)->with('departments', $this->departments)->with('selectedUser', $this->selectedUser)->with('selectedDepartment', $this->selectedDepartment);
            }

        return view('livewire.user.edit');
    }
}

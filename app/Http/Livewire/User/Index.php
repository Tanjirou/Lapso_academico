<?php

namespace App\Http\Livewire\User;

use App\Models\Department;
use App\Models\Mention;
use Livewire\Component;
use App\Models\UserType;

class Index extends Component
{
    public $user_types, $departments, $mentions, $selectedUser;

    protected $rules=['user_types' =>'required|string'];

    public function mount()
    {
        $this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
        $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();

    }

    public function selectedDepartment(){

    }

    public function render()
    {
        return view('livewire.user.index');
    }
}

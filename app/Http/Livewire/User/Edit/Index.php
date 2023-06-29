<?php

namespace App\Http\Livewire\User\Edit;

use App\Models\User;
use App\Models\Mention;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\UserType;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $user_types, $departments, $user, $teacher, $section, $userId,
    $selectedUser,$selectedDepartment =null,$selectedMention = null,$mentions = null;
    public UserType $user_type;
    public Department $department;
    protected $rules=[
        'password' => 'required|string|min:8',
        'names' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
        'last_names' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
        'email' => 'string|email|max:255|unique:users|nullable',
        'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
        'selectedUser' => 'required',
        'selectedDepartment' => 'nullable',
        'selectedMention' => 'nullable',
        'college_degree' => 'regex:/^[\pL\s\-]+$/u|max:255|nullable'];

    public function mount($user){
        $this->user = $user;
        $this->user_types = UserType::all();
        $this->user_type = new UserType();
        $this->department = new Department();
        $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();
    }

    public function update(User $user,Request $request)
    {

        $data = $request->validate([
            'names' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'last_names' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'email' => 'string|email|max:255|nullable',
            'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
            'user_type' => 'required',
            'ndepartament' => 'nullable',
            'nmention' => 'nullable',
            'college_degree' => 'regex:/^[\pL\s\-]+$/u|max:255|nullable'
        ]);
        //$this->validate($this->rules);
        //Guardar datos en la primera tabla user
        //$user->dni = $data['dni'];
        DB::table('users')->where('id','=',$user->id)
            ->update([
                'names' => $data['names'],
                'last_names' => $data['last_names'],
                'email' => $data['email'],
                'telephone' => $data['telephone'],
                'user_type' => $data['user_type']
            ]);

         //Guardar datos en la segunda tabla teacher
         if($data['user_type'] != 1)
         {
            DB::table('teachers')
                ->where('userid','=',$user->id)
                ->update(
                    ['ndepartament'=> $this->selectedDepartment,
                     'nmention' => $this->selectedMention,
                     'college_degree' => $data['college_degree']
                    ]);
         }

        //Mostrar un mensaje de exito
        return redirect()->route('users.list')->with('mens','Usuario registrado exitosamente');
        //session()->flash('mens', 'Usuario registrado exitosamente');
        /* $this->emitUp('userSaved','Usuario registrado correctamente'); */

    }

    public function updatedSelectedDepartment($department_id)
    {
        $this->mentions = Mention::where('departmentid', $department_id)->get();
    }


    public function render()
    {
        $userData = User::find($this->user);
        if($userData->user_type>1){
            $teacher = DB::table('teachers')->where('userid','=',$this->user)->first();
            return view('livewire.user.edit.index',
            [   'teacher'=>$teacher,
                'userData'=>$userData,
                'departments'=>$this->departments,
            ]);
        }

        return view('livewire.user.edit.index',[
            'userData'=>$userData,
            'departments'=>$this->departments
        ]);
    }
}

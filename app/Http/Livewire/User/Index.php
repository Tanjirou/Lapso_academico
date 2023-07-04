<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Teacher;
use App\Models\DepartmentSection;
use Livewire\Component;
use App\Models\UserType;
use App\Models\Department;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user_types, $departments, $selectedUser;
    public $selectedDepartment = null;
    public $selectedMention = null;
    public $department_sections = null;
    public $dni, $password, $names, $last_names, $email, $telephone, $user_type, $ndepartament, $nmention, $college_degree;
    public $mens;
    public $userId;
    public User $user;

    protected $rules=[
    'dni' => 'required|numeric|digits_between:6,9|unique:users',
    'password' => 'required|string|min:8',
    'names' => 'required|string|max:255',
    'last_names' => 'required|string|max:255',
    'email' => 'string|email|max:255|unique:users|nullable',
    'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
    'selectedUser' => 'required',
    'selectedDepartment' => 'nullable',
    'selectedMention' => 'nullable',
    'college_degree' => 'string|max:255|nullable'];


    public function mount()
    {
        $this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
        $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        // $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();
        $this->department_sections= DepartmentSection::where('department_sections.status','=', 'A')->orderBy('department_sections.id')->get();
    }

    public function updatedSelectedDepartment($department_id)
    {
        $this->department_sections = DepartmentSection::where('departmentid', $department_id)->get();
    }

    public function store()
    {
        $this->validate($this->rules);
        //Guardar datos en la primera tabla user
        $user = new User;
        $user->dni = $this->dni;
        $user->names = $this->names;
        $user->last_names = $this->last_names;
        $user->email = $this->email;
        $user->telephone = $this->telephone;
        $user->password = bcrypt($this->password);
        $user->user_type= $this->selectedUser;
        $user->status = 'A';
        $user->save();

         //Guardar datos en la segunda tabla teacher
         if($this->selectedUser != 1)
         {
            $teacher = new Teacher;
            $teacher->userid = $user->id;
            $teacher->ndepartament = $this->selectedDepartment;
            $teacher->nmention = $this->selectedMention;
            $teacher->college_degree = $this->college_degree;
            $teacher->status = 'A';
            $teacher->save();
         }


        //Limpiar los campos del formulario
        $this->dni = '';
        $this->names = '';
        $this->last_names = '';
        $this->email = '';
        $this->telephone = '';
        $this->password = '';
        $this->selectedUser = '';
        $this->selectedDepartment = '';
        $this->selectedMention = '';
        $this->college_degree = '';

        //Mostrar un mensaje de exito
        session()->flash('mens', 'Usuario registrado exitosamente');
        /* $this->emitUp('userSaved','Usuario registrado correctamente'); */

    }

    public function usersList(){
        $users = DB::table('users')

            // ->join('user_types', 'user_types.id','=','users.user_type')
            // ->join('teachers', 'teachers.userid', '=', 'users.id')
            // ->join('departments', 'departments.id', '=', 'teachers.ndepartament')
            // ->where('users.status','=', 'A')
            // ->select('users.id', 'users.names','users.last_names', 'users.dni', 'user_types.description as description', 'departments.name as name')

        ->leftJoin('user_types', 'user_types.id','=','users.user_type')
        ->leftJoin('teachers', 'teachers.userid', '=', 'users.user_type')
        ->leftJoin('departments', 'departments.id', '=', 'teachers.ndepartament')
        ->where('users.status','=', 'A')
        ->select('users.id', 'users.names','users.last_names', 'users.dni', 'user_types.description', 'departments.name')
        ->orderByDesc('users.id')
        ->simplePaginate(10);
        return view('livewire.user.list')->with('users',$users);
    }

    // return view('livewire.departments.index',[
    //     'departments'=>Department::orderBy('id','desc')->paginate(7),
    // ]);

    // public function userEdit(User $user){


    //     $this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
    //     $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
    //     $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();

    //     if($user->user_type != 1)
    //     {
    //         $teacher = Teacher::where('userid','=', $user->id)->first();
    //         // var_dump($teacher);die();
    //         return view('livewire.user.edit')->with('teacher', $teacher)->with('user', $user)->with('user_types', $this->user_types)->with('departments', $this->departments)->with('mentions', $this->mentions)->with('selectedUser', $this->selectedUser)->with('selectedDepartment', $this->selectedDepartment);
    //     }

    //     return view('livewire.user.edit')->with('user', $user)->with('user_types', $this->user_types)->with('departments', $this->departments)->with('mentions', $this->mentions)->with('selectedUser', $this->selectedUser)->with('selectedDepartment', $this->selectedDepartment);
    // }

    public function update(User $user, Teacher $teacher){
        $this->validate($this->rules);
        $user = User::find($this->userId);
        $user->dni = $this->dni;
        $user->names = $this->names;
        $user->last_names = $this->last_names;
        $user->email = $this->email;
        $user->telephone = $this->telephone;
        $user->password = bcrypt($this->password);
        $user->user_type= $this->selectedUser;
        $user->status = 'A';
        $user->save();

        if($this->selectedUser != 1)
        {
            $teacher = new Teacher;
            $teacher->userid = $user->id;
            $teacher->ndepartament = $this->selectedDepartment;
            $teacher->nmention = $this->selectedMention;
            $teacher->college_degree = $this->college_degree;
            $teacher->status = 'A';
            $teacher->save();
        }

        session()->flash('mens', 'Usuario actualizado exitosamente.');
        return redirect()->to('livewire.user.list');
    }

    public function render()
    {
        $id_usuario ='';
       return view('livewire.user.index',['departments' => Department::all(), 'id_usuario'=>$id_usuario]);

        /* $mentions = Mention::all();
        return view('livewire.user.index',['mentions' => $mentions]); */
    }

    }


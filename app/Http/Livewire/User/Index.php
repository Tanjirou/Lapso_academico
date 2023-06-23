<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Mention;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\UserType;
use App\Models\Department;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    public $user_types, $departments, $selectedUser;
    public $selectedDepartment = null;
    public $selectedMention = null;
    public $mentions = null;
    public $dni, $password, $names, $last_names, $email, $telephone, $user_type, $ndepartament, $nmention, $college_degree;
    public $mens;
    public $userId;
    public User $user;

    protected $rules=[
    'dni' => 'required|numeric|digits_between:6,9|unique:users',
    'password' => 'required|string|min:8',
    'names' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
    'last_names' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
    'email' => 'string|email|max:255|unique:users|nullable',
    'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
    'selectedUser' => 'required',
    'selectedDepartment' => 'nullable',
    'selectedMention' => 'nullable',
    'college_degree' => 'regex:/^[\pL\s\-]+$/u|max:255|nullable'];

    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
        $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();
    }

    public function updatedSelectedDepartment($department_id)
    {
        $this->mentions = Mention::where('departmentid', $department_id)->get();
    }

   /*  public function updatedSelectedMention($value)
    {
        if (!empty($value)) {
            $this->selectedMention = Mention::find($value);
        } else {
            $this->selectedMention = null;
        }
    } */

    public function store()
    {
        // $messages = [
        //     'dni.required' => 'La cédula del usuario es requerida',
        //     'dni.numeric' => 'Solo se admite caracteres numéricos',
        //     'dni.unique' => 'Ya existe un usuario con ese numero de cédula',
        //     'names.required' => 'El nombre del usuario es requerido',
        //     'names.max' => 'El nombre del usuario debe tener maximo 255 caracteres',
        //     'last_names.required' => 'El apellido del usuario es requerido',
        //     'last_names.max' => 'El apellido del usuario debe tener maximo 255 caracteres',
        //     'email.email' => 'Debe colocar un email con un formato valido',
        //     'email.max' => 'El email del usuario debe tener maximo 255 caracteres',
        //     'email.unique' => 'Ya existe un usuario con ese email',
        //     'telephone.max' => 'El telefono del usuario debe tener maximo 12 caracteres',
        //     'password.required' => 'La clave del usuario es requerida',
        //     'password.max' => 'La clave del usuario debe tener minimo 8 caracteres',
        //     'selectedUser.required' => 'El tipo de usuario es requerido',

        // ];
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
            ->join('user_types', 'user_types.id','=','users.user_type')
            ->where('users.status','=', 'A')
            ->select('users.id', 'users.names','users.last_names', 'users.dni', 'user_types.description')
            ->orderBy('user_types.description')
            ->simplePaginate(2);
            return view('livewire.user.list')->with('users',$users);
    }

    // return view('livewire.departments.index',[
    //     'departments'=>Department::orderBy('id','desc')->paginate(7),
    // ]);

    public function userEdit(User $user){


        $this->user_types= UserType::where('user_types.status','=', 'A')->orderBy('user_types.id')->get();
        $this->departments= Department::where('departments.status','=', 'A')->orderBy('departments.id')->get();
        $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();

        if($user->user_type != 1)
        {
            $teacher = Teacher::where('userid','=', $user->id)->first();
            // var_dump($teacher);die();
            return view('livewire.user.edit')->with('teacher', $teacher)->with('user', $user)->with('user_types', $this->user_types)->with('departments', $this->departments)->with('mentions', $this->mentions)->with('selectedUser', $this->selectedUser)->with('selectedDepartment', $this->selectedDepartment);
        }

        return view('livewire.user.edit')->with('user', $user)->with('user_types', $this->user_types)->with('departments', $this->departments)->with('mentions', $this->mentions)->with('selectedUser', $this->selectedUser)->with('selectedDepartment', $this->selectedDepartment);
    }

    public function update(User $user, Teacher $teacher){
        // $this->mount();
        // $this->validate(['dni' => 'required|numeric|digits_between:6,9|unique:users']);
        // // 'password' => 'required|string|min:8',
        // $this->validate(['names' => 'required|regex:/^[\pL\s\-]+$/u|max:255']);
        // $this->validate(['last_names' => 'required|regex:/^[\pL\s\-]+$/u|max:255']);
        // $this->validate(['email' => 'string|email|max:255|unique:users|nullable']);
        // $this->validate(['telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable']);
        // $this->validate(['password' => 'required|string|min:8']);
        // $this->validate(['selectedUser' => 'required']);
        // $this->validate(['selectedDepartment' => 'nullable']);
        // $this->validate(['selectedMention' => 'nullable']);
        // $this->validate(['college_degree' => 'regex:/^[\pL\s\-]+$/u|max:255|nullable']);

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
        // return view('livewire.user.list');
    }

    public function render()
    {
        $id_usuario ='';
       return view('livewire.user.index',['departments' => Department::all(), 'id_usuario'=>$id_usuario]);

        /* $mentions = Mention::all();
        return view('livewire.user.index',['mentions' => $mentions]); */
    }

    }


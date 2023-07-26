<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Teacher;
use App\Models\DepartmentSection;
use Livewire\Component;
use App\Models\UserType;
use App\Models\Department;
use App\Models\Section;
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
    public $dni, $password, $teacher, $names, $last_names, $email, $telephone, $user_type, $ndepartament, $nmention, $college_degree;
    public $mens;
    public $userId;
    public User $user;

    protected $rules = [
        'dni' => 'required|numeric|digits_between:6,9|unique:users',
        'password' => 'required|string|min:8',
        'names' => 'required|string|max:255',
        'last_names' => 'required|string|max:255',
        'email' => 'string|email|max:255|unique:users|required',
        'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
        'selectedUser' => 'required',
        'selectedDepartment' => 'nullable',
        'selectedMention' => 'nullable',
        'college_degree' => 'string|max:255|nullable'
    ];
    public function mount()
    {
        $this->user_types = UserType::where('status', 'A')
            ->whereNotIn('id', [4])
            ->orderBy('user_types.id')->get();
        $this->departments = Department::where('departments.status', '=', 'A')->orderBy('departments.id')->get();
        // $this->mentions= Mention::where('mentions.status','=', 'A')->orderBy('mentions.id')->get();
        $this->department_sections = DepartmentSection::where('department_sections.status', '=', 'A')->orderBy('department_sections.id')->get();
        $this->teacher = new Teacher();
    }

    public function messages()
    {
    return [
        'dni.required' => 'El campo cédula es obligatorio.',
        'dni.numeric' => 'Solo caracteres numéricos.',
        'dni.digits_between' => 'Solo se permite entre 6 y 9 caracteres numéricos.',
        'dni.unique' => 'Ya existe un usuario registrado con esa cédula',
        'password.required' => 'El campo contraseña es obligatorio.',
        'password.min' => 'El mínimo de caracteres es de 8.',
        'names.required' => 'El campo nombre es obligatorio.',
        'names.max' => 'El máximo de caracteres es de 255.',
        'last_names.required' => 'El campo apellido es obligatorio.',
        'last_names.max' => 'El máximo de caracteres es de 255.',
        'email.email' => 'Debe tener un formato válido',
        'email.max' => 'El máximo de caracteres es de 255.',
        'email.unique' => 'Ya existe un usuario registrado con ese correo',
        'email.nullable' => '',
        'telephone.regex' =>'El formato del campo es invalido',
        'telephone.max' =>'El máximo de caracteres es de 12.',
        'college_degree.max' =>'El máximo de caracteres es de 255.',
        'selectedDepartment.required' => 'El campo departamento es obligatorio.',
        'selectedUser.required' => 'El campo tipo de usuario es obligatorio.',
        'selectedMention.required' => 'El campo sección académica es obligatorio.'
    ];
    }

    public function updatedSelectedDepartment($department_id)
    {
        $this->department_sections = DepartmentSection::where('departmentid', $department_id)->get();
    }

    public function store()
    {
        $head_department = null;
        if($this->selectedUser == 3){
            $this->rules =[
                'dni' => 'required|numeric|digits_between:6,9|unique:users',
                'password' => 'required|string|min:8',
                'names' => 'required|string|max:255',
                'last_names' => 'required|string|max:255',
                'email' => 'string|email|max:255|unique:users|required',
                'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
                'selectedUser' => 'required',
                'selectedDepartment' => 'required',
                'selectedMention' => 'required',
                'college_degree' => 'string|max:255|nullable'
            ];
        }
        if($this->selectedUser == 2 || $this->selectedUser >3){
            $this->rules =[
                'dni' => 'required|numeric|digits_between:6,9|unique:users',
                'password' => 'required|string|min:8',
                'names' => 'required|string|max:255',
                'last_names' => 'required|string|max:255',
                'email' => 'string|email|max:255|unique:users|required',
                'telephone' => 'regex:/^[0-9]{4}-?[0-9]{7}/|max:12|nullable',
                'selectedUser' => 'required',
                'selectedDepartment' => 'required',
                'selectedMention' => 'nullable',
                'college_degree' => 'string|max:255|nullable'
            ];
        }
        $this->validate();
        if ($this->selectedUser == 2 && !is_null($this->selectedDepartment)) {
            $head_department = Teacher::join('users', 'teachers.userid', '=', 'users.id')
                ->where('ndepartament', '=', $this->selectedDepartment)
                ->where('users.user_type', '=', $this->selectedUser)
                ->select('teachers.*')
                ->first();
            if (!is_null($head_department)) {
                session()->flash('mens-error', 'Ya existe registrado un jefe de departamento');
                $this->mount();
                return;
            }
        }

        if ($this->selectedUser == 3 && !is_null($this->selectedDepartment) && !is_null($this->selectedMention)) {
            $head_department = Teacher::join('users', 'teachers.userid', '=', 'users.id')
                ->where('ndepartament', '=', $this->selectedDepartment)
                ->where('users.user_type', '=', $this->selectedUser)
                ->where('nmention', '=', $this->selectedMention)
                ->select('teachers.*')
                ->first();
            if (!is_null($head_department)) {
                session()->flash('mens-error', 'Ya existe registrado un jefe de sección');
                $this->mount();
                return;
            }
        }
            //Guardar datos en la primera tabla user
            $user = new User;
            $user->dni = $this->dni;
            $user->names = $this->names;
            $user->last_names = $this->last_names;
            $user->email = $this->email;
            $user->telephone = $this->telephone;
            $user->password = bcrypt($this->password);
            $user->user_type = $this->selectedUser;
            $user->status = 'A';
            $user->save();

            //Guardar datos en la segunda tabla teacher
            if ($this->selectedUser != 1) {
                $teacher = new Teacher;
                $teacher->userid = $user->id;
                $teacher->ndepartament = $this->selectedDepartment;
                $teacher->nmention = $this->selectedMention;
                $teacher->college_degree = $this->college_degree;
                $teacher->status = 'A';
                $teacher->save();
            }
            //Mostrar un mensaje de exito
            session()->flash('mens', 'Usuario registrado exitosamente');
            $this->mount();
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

    }

    public function usersList()
    {
        $users = DB::table('users')
            ->leftJoin('user_types', 'user_types.id', '=', 'users.user_type')
            ->leftJoin('teachers', 'teachers.userid', '=', 'users.id')
            ->leftJoin('departments', 'departments.id', '=', 'teachers.ndepartament')
            ->where('users.status', '=', 'A')
            ->select('users.id', 'users.names', 'users.last_names', 'users.dni', 'user_types.description', 'departments.name as name')
            ->orderByDesc('users.id')
            ->simplePaginate(10);
        return view('livewire.user.list')->with('users', $users);
    }


    public function update(User $user, Teacher $teacher)
    {
        $this->validate($this->rules);
        $user = User::find($this->userId);
        $user->dni = $this->dni;
        $user->names = $this->names;
        $user->last_names = $this->last_names;
        $user->email = $this->email;
        $user->telephone = $this->telephone;
        $user->password = bcrypt($this->password);
        $user->user_type = $this->selectedUser;
        $user->status = 'A';
        $user->save();

        if ($this->selectedUser != 1) {
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

    public function delete(User $user)
    {
        if ($user->id == auth()->user()->id) {
            return redirect()->route('users.list')->with('mens-error', 'No se puede eliminar ese usuario');
        }
        $section = Section::join('teachers', 'sections.teacherid', '=', 'teachers.id')
            ->where('teachers.userid', '=', $user->id)
            ->select('sections.*')
            ->first();
        if ($section) {
            return redirect()->route('users.list')->with('mens-error', 'No se puede eliminar ese usuario');
        } else {
            DB::table('teachers')->where('userid', '=', $user->id)->delete();
            $user->delete();
            return redirect()->route('users.list')->with('mens', 'Usuario eliminado correctamente');
        }
    }

    public function render()
    {
        $id_usuario = '';
        return view('livewire.user.index', ['departments' => Department::all(), 'id_usuario' => $id_usuario]);
    }
}

<?php

namespace App\Http\Livewire\DepartmentSection;

use App\Models\Subject;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\DepartmentSection;
use App\Models\StructureSection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $departments;
    public Department $department;
    public DepartmentSection $departmentSection;
    protected $rules =['departmentSection.departmentid'=>'required','departmentSection.description'=>'required'];
    public function mount(){
        $this->departments = Department::all();
        $this->departmentSection = new DepartmentSection();
    }

    public function messages()
    {
    return [
        'departmentSection.description.required' => 'El campo nombre de la sección académica es obligatorio.',
        'departmentSection.departmentid.required' => 'El campo Departamento es obligatorio.',

    ];
    }

    public function save()
    {
        $this->validate();
        $this->departmentSection->save();
        session()->flash('mens', 'Sección del departamento guardado correctamente.');
        $this->mount();
        $this->emitUp('departmentSectionsSaved','Sección del departamento guardado correctamente');
    }
    public function edit(DepartmentSection $departmentSection)
    {
        $this->departmentSection = $departmentSection;
    }
    public function updateddepartmentSectionText()
    {
        $this->validate($this->rules);
    }
    public function done(DepartmentSection $departmentSection)
    {
        $departmentSection->update(['done'=>!$departmentSection->done]);
        session()->flash('mens', 'Sección del departamento guardado correctamente.');
        $this->mount();
    }
    public function delete(DepartmentSection $departmentSection){
        $this->departmentSection = $departmentSection;
        $subjects= Subject::where('departmentsectionid','=',$departmentSection->id)->first();
        $structureSections = StructureSection::where('department_sectionid','=',$departmentSection->id)->first();
        if(!is_null($subjects) || !is_null($structureSections)){
            session()->flash('mens-error', 'No se puede eliminar esa sección del departamento.');
            $this->departmentSection->description = null;
            $this->departmentSection->departmentid = null;
            $this->mount();
        }else{
            $driverName = DB::getDriverName();
            $nextId = DepartmentSection::max('id') + 1;
            if($driverName =='pgsql'){
                DB::statement("ALTER SEQUENCE department_sections_id_seq RESTART WITH $nextId");
            }else{
                DB::statement("ALTER TABLE department_sections AUTO_INCREMENT = $nextId");
            }
            $this->departmentSection->delete();
            session()->flash('mens', 'Sección del departamento eliminado correctamente.');
            $this->mount();
            $this->emitUp('departmentSaved','Sección del departamento eliminado correctamente.');
        }

    }
    public function render()
    {   $departmentSections = DB::table('department_sections')
        ->join('departments','departments.id','=','department_sections.departmentid')
        ->select('department_sections.*', 'departments.name as department')
        ->orderByDesc('department_sections.id')
        ->paginate(10);
        return view('livewire.department-section.index',['departmentSections'=>$departmentSections,]);
    }
}

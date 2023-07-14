<?php

namespace App\Http\Livewire\Subjects;
use App\Models\Section;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\StructureSection;
use App\Models\DepartmentSection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $department_sections;
    public Subject $subject;
    protected $rules =['subject.code'=>'required|min:3|unique:subjects,code','subject.name'=>'required|min:3',
    'subject.credit_units'=>'required','subject.departmentsectionid'=>'required'];
    public function mount(){
        $this->department_sections = DepartmentSection::all();
        $this->subject = new Subject();
    }
    public function save(){
        if(is_null($this->subject->id)){
            $this->rules =[
                'subject.code'=>'required|min:3|unique:subjects,code','subject.name'=>'required|min:3',
                'subject.credit_units'=>'required','subject.departmentsectionid'=>'required'
            ];
        }else{
            $this->rules =[
                'subject.code'=>'required|min:3|unique:subjects,code,'.$this->subject->id,'subject.name'=>'required|min:3',
                'subject.credit_units'=>'required','subject.departmentsectionid'=>'required'
            ];
        }
        $this->validate();
        $this->subject->save();
        session()->flash('mens', 'Materia guardada correctamente.');
        $this->mount();
    }
    public function edit(Subject $subject)
    {
        $this->subject = $subject;
    }
    public function update()
    {
        $this->validate($this->rules);
    }
    public function done(Subject $subject)
    {
        $subject->update(['done'=>!$subject->done]);
        session()->flash('mens', 'Materia guardada correctamente.');
        $this->mount();
    }
    public function delete(Subject $subject){
        $this->subject = $subject;
        $structure = StructureSection::where('subjectid','=', $subject->id)->first();
        $section = Section::where('subjectid','=', $subject->id)->first();

        if($structure || $section){
            session()->flash('mens-error', 'No se puede eliminar la materia.');
            $this->mount();
        }else{
            $driverName = DB::getDriverName();
            $nextId = Subject::max('id') + 1;
            if($driverName =='pgsql'){
                DB::statement("ALTER SEQUENCE subjects_id_seq RESTART WITH $nextId");
            }else{
                DB::statement("ALTER TABLE subjects AUTO_INCREMENT = $nextId");
            }
            $this->subject->delete();
            session()->flash('mens', 'Materia eliminada correctamente.');
            $this->mount();
            $this->emitUp('subjectidSaved','Materia eliminada correctamente.');
        }

    }
    public function render()
    {
        $subjects = DB::table('subjects')
        ->join('department_sections','subjects.departmentsectionid','=','department_sections.id')
        ->select('subjects.*','department_sections.description as department')
        ->orderByDesc('id')->paginate(10);
        return view('livewire.subjects.index',['subjects'=>$subjects]);
    }
}

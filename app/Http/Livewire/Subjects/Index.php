<?php

namespace App\Http\Livewire\Subjects;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $departments;
    public Subject $subject;
    protected $rules =['subject.code'=>'required|min:3','subject.name'=>'required|min:3',
    'subject.credit_units'=>'required','subject.departmentsid'=>'required'];
    public function mount(){
        $this->departments = Department::all();
        $this->subject = new Subject();
    }
    public function save(){
        $this->validate();
        $this->subject->save();
        session()->flash('mens', 'Sección del departamento guardado correctamente.');
        $this->mount();
    }
    public function edit(Subject $subject)
    {
        $this->subject = $subject;
    }
    public function updatedSubjectText()
    {
        $this->validate($this->rules);
    }
    public function done(Subject $subject)
    {
        $subject->update(['done'=>!$subject->done]);
        session()->flash('mens', 'Materia guardada correctamente.');
        $this->mount();
    }
    public function render()
    {
        $subjects = DB::table('subjects')
        ->join('departments','departments.id','=','subjects.departmentsid')
        ->select('subjects.*','departments.name as department')
        ->orderByDesc('id')->paginate(10);
        return view('livewire.subjects.index',['subjects'=>$subjects]);
    }
}

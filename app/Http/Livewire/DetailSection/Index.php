<?php

namespace App\Http\Livewire\DetailSection;

use App\Models\Section;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Department;
use App\Models\AcademicLapse;

class Index extends Component
{
    public $sections,$section_number,$subjects,$academic_lapse, $selectedSubject = null,
    $department,$evaluate_section;
    public Section $section;
    protected $rules =[
        'selectedSubject'=>'required',
        'section_number' => 'required'
    ];
    public function mount(){
        $this->subjects = Subject::join('sections','subjects.id','=','sections.subjectid')
            ->join('teachers','teachers.id','=','sections.teacherid')
            ->get();
        $this->section = new Section();
        $this->academic_lapse = AcademicLapse::where('status','A')->first();
        $this->department = Department::join('teachers','departments.id','=','teachers.ndepartament')
        ->where('teachers.userid',auth()->user()->id)->select('departments.*')->first();
    }
    public function updatedSelectedSubject($subjectid){
        if($subjectid && $subjectid !='Seleccione'){
            $this->sections = Section::join('teachers','teachers.id','=','sections.teacherid')
            ->where('teachers.userid',auth()->user()->id)
            ->where('sections.subjectid',$subjectid)
            ->select('sections.*')
            ->get();
        }else{
            $this->sections = null;
            $subjectid = null;
            $this->selectedSubject = null;
        }
    }
    public function save(){
        $section = Section::where('id',$this->section_number)->first();
        $this->evaluate_section = $section;
    }
    public function render()
    {
        return view('livewire.detail-section.index');
    }
}

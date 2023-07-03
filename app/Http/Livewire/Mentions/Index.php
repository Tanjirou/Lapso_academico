<?php

namespace App\Http\Livewire\Mentions;

use App\Models\AcademicCurriculum;
use App\Models\Mention;
use App\Models\Subject;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $subjects, $academic_curricula, $subjectid;
    public Mention $mention;
    protected $rules = [
        'mention.subjectid' =>'required',
        'mention.academic_curriculaid' =>'required',
        'mention.name' =>'required|min:3',
        'mention.pre_req' => 'nullable',
        'mention.post_req' => 'nullable'
    ];
    public function mount(){
        $this->subjects = Subject::where('status','A')->get();
        $this->academic_curricula = AcademicCurriculum::where('status','A')->get();
        $this->mention = new Mention();

    }
    public function save(){
        $this->validate();
        $this->mention->save();
        session()->flash('mens', 'Materia asignada correctamente.');
        $this->mount();
    }
    public function edit(Mention $mention){
        $this->mention = $mention;
    }
    public function render()
    {
        $mentions = DB::table('mentions')
            ->join('subjects','mentions.subjectid','=','subjects.id')
            ->join('academic_curricula','mentions.academic_curriculaid','=','academic_curricula.id')
            ->where('mentions.status','=','A')
            ->select('mentions.*','academic_curricula.description as academic_curricula','subjects.name as subject')
            ->simplePaginate(10);
        return view('livewire.mentions.index',[
            'mentions'=>$mentions
        ]);
    }
}

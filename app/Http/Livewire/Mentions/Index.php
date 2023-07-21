<?php

namespace App\Http\Livewire\Mentions;

use App\Models\AcademicCurriculum;
use App\Models\Mention;
use App\Models\Subject;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $subjects, $academic_curricula, $subjectid;
    public Mention $mention;
    protected $rules = [
        'mention.subjectid' =>'required',
        'mention.academic_curriculaid' =>'required',
        'mention.pre_req' => 'nullable',
        'mention.post_req' => 'nullable'
    ];
    public function mount(){
        $this->subjects = Subject::where('status','A')->get();
        $this->academic_curricula = AcademicCurriculum::where('status','A')->get();
        $this->mention = new Mention();

    }

    public function messages()
    {
    return [
        'mention.academic_curriculaid.required' => 'El campo Pensum es obligatorio.',
        'mention.subjectid.required' => 'El campo Asignatura es obligatorio.',
    ];
    }

    public function save(){
        $this->validate();
        $count_mentions = DB::table('mentions')->where('status','=','A')
                                                ->where('subjectid','=',$this->mention->subjectid)
                                                ->where('academic_curriculaid','=',$this->mention->academic_curriculaid)
                                                ->first();
        if(is_null($count_mentions) || !is_null($this->mention->id))
        {
                $this->mention->save();
                session()->flash('mens', 'Asignatura asignada correctamente.');
                $this->mount();
            }
        else{
            session()->flash('mens-error', 'Ya se encuentra esa asignatura registrada en el pensum.');
        }

    }
    public function edit(Mention $mention){
        $this->mention = $mention;
    }
    public function delete(Mention $mention){
        $this->mention = $mention;
        $driverName = DB::getDriverName();
        $nextId = Mention::max('id') + 1;
        if($driverName =='pgsql'){
            DB::statement("ALTER SEQUENCE mentions_id_seq RESTART WITH $nextId");
        }else{
            DB::statement("ALTER TABLE mentions AUTO_INCREMENT = $nextId");
        }
        $this->mention->delete();
        session()->flash('mens', 'Asignatura eliminada del pensum correctamente.');
        $this->mount();
    }
    public function render()
    {
        $mentions = DB::table('mentions')
            ->join('subjects','mentions.subjectid','=','subjects.id')
            ->join('academic_curricula','mentions.academic_curriculaid','=','academic_curricula.id')
            ->where('mentions.status','=','A')
            ->select('mentions.*','academic_curricula.description as academic_curricula','subjects.name as subject')
            ->orderByDesc('id')->paginate(10);
        return view('livewire.mentions.index',[
            'mentions'=>$mentions
        ]);
    }
}

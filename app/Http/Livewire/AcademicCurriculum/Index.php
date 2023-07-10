<?php

namespace App\Http\Livewire\AcademicCurriculum;
use App\Models\Mention;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\AcademicCurriculum as AcademicCurriculumModel;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public AcademicCurriculumModel $pensum;
    public $enableDelete;
    protected $rules =['pensum.description'=>'required|max:60'];
    public function mount(){
        // $this->pensums =AcademicCurriculumModel::orderBy('id','desc')->paginate(10);
        $this->pensum = new AcademicCurriculumModel();
    }
    public function updatedPensumText()
    {
        $this->validate(['pensum.description'=>'max:60']);
    }
    public function edit(AcademicCurriculumModel $pensum)
    {
        $this->pensum = $pensum;
    }
    public function done(AcademicCurriculumModel $pensum)
    {
        $pensum->update(['done'=>!$pensum->done]);
        session()->flash('mens', 'Pensum actualizado correctamente.');
        $this->mount();
    }
    public function save()
    {
        $this->validate();
        $this->pensum->save();
        session()->flash('mens', 'Pensum guardado correctamente.');
        $this->mount();
        $this->emitUp('pensumSaved','Pensum guardado correctamente.');

    }
    public function delete(AcademicCurriculumModel $pensum){
        $this->pensum = $pensum;
        session()->flash('mens', 'Pensum eliminado correctamente.');
        $this->mount();
        $this->emitUp('pensumSaved','Pensum eliminado correctamente.');
        $this->pensum->delete();
    }
    public function updatedEnableDelete($academicCurriculaId){
        $mention = Mention::where('academic_curriculaid','',$academicCurriculaId)->first();
        if($mention){
            $this->enableDelete = false;
        }
    }
    public function render()
    {
        $pensums =AcademicCurriculumModel::orderBy('id','desc')->paginate(10);
        return view('livewire.academic-curriculum.index', [
            'pensums'=>$pensums
        ]);
    }

}

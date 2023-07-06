<?php

namespace App\Http\Livewire\AcademicCurriculum;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\AcademicCurriculum as AcademicCurriculumModel;

class Index extends Component
{
    use WithPagination;
    public $pensums;
    public AcademicCurriculumModel $pensum;
    protected $rules =['pensum.description'=>'required|max:60'];
    public function mount(){
        $this->pensums =AcademicCurriculumModel::orderBy('id','desc')->get();
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
    public function render()
    {
        return view('livewire.academic-curriculum.index');
    }

}

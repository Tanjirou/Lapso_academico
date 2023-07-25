<?php

namespace App\Http\Livewire\AcademicCurriculum;
use App\Models\Mention;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\AcademicCurriculum as AcademicCurriculumModel;
use App\Models\DetailSection;
use App\Models\Student;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public AcademicCurriculumModel $pensum;
    protected $rules =['pensum.description'=>'required|max:60'];
    public function mount(){
        // $this->pensums =AcademicCurriculumModel::orderBy('id','desc')->paginate(10);
        $this->pensum = new AcademicCurriculumModel();
    }

    public function messages()
    {
    return [
        'pensum.description.required' => 'El campo nombre del pensum académico es obligatorio.',
        'pensum.description.max' => 'El máximo de caracteres es de 60.',
    ];
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
        $mention = Mention::where('academic_curriculaid','=',$pensum->id)->first();
        $student = Student::where('academic_curriculaid','=',$pensum->id)->first();
        $detailSection = DetailSection::where('studentcurriculum','=',$pensum->id)->first();
        if(!is_null($mention) || !is_null($student) || !is_null($detailSection)){
            session()->flash('mens-error', 'No se puede eliminar el pensum.');
            $this->pensum->description = null;
            $this->mount();
        }else{
            $driverName = DB::getDriverName();
            $nextId = AcademicCurriculumModel::max('id') + 1;
            if($driverName =='pgsql'){
                DB::statement("ALTER SEQUENCE academic_curricula_id_seq RESTART WITH $nextId");
            }else{
                DB::statement("ALTER TABLE academic_curricula AUTO_INCREMENT = $nextId");
            }
            $this->pensum->delete();
            session()->flash('mens', 'Pensum eliminado correctamente.');
            $this->mount();
            $this->emitUp('pensumSaved','Pensum eliminado correctamente.');
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

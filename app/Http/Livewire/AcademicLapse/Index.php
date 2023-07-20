<?php

namespace App\Http\Livewire\AcademicLapse;

use App\Models\Section;
use Livewire\Component;
use App\Models\AcademicLapse;
use App\Models\DetailSection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public AcademicLapse $academic_lapse;
    protected $rules =[
        'academic_lapse.description' => 'required|min:4'
    ];
    public function mount(){
        $this->academic_lapse = new AcademicLapse();
    }
    public function save(){
        $count_active_lapse = DB::table('academic_lapses')->where('status','=','A')->first();
        $detailSection = DetailSection::where('status','=','F')->first();
        if($detailSection){
            session()->flash('mens-error', 'Debe ejecutar la opción de vaciar antes de poder crear un nuevo lapso.');
        }elseif(is_null($count_active_lapse) || !is_null($this->academic_lapse->id)){
            $this->validate();
            $this->academic_lapse->save();
            session()->flash('mens', 'Lapso guardado y activado correctamente.');
            $this->mount();
        }else{
            session()->flash('mens-error', 'Ya se encuentra un lapso activo.');
        }
    }
    public function edit(AcademicLapse $academic_lapse){
        $this->academic_lapse = $academic_lapse;
        $academicLapse = new AcademicLapse();
        $academicLapse = $academic_lapse;
        $section = Section::where('academic_lapseid','=',$academicLapse->id)->first();
        if(!$section){
            $this->academic_lapse = $academic_lapse;
        }else{
            session()->flash('mens-error', 'No se puede editar el lapso.');
            $this->mount();
        }

    }
    public function finish(AcademicLapse $academic_lapse){
        $this->academic_lapse = $academic_lapse;
        $this->academic_lapse->status = 'F';
        $this->academic_lapse->save();
        session()->flash('mens', 'Lapso finalizado correctamente.');
            $this->mount();
    }
    public function render()
    {
        $academic_lapses = DB::table('academic_lapses')
            ->orderByDesc('id')->limit(5)->get();
        return view('livewire.academic-lapse.index',[
            'academic_lapses' => $academic_lapses
        ]);
    }
}

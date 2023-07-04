<?php

namespace App\Http\Livewire\SectionStruc;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
// use App\Models\AcademicCurriculum as AcademicCurriculumModel;

class Index extends Component
{
    public function render()
    {
        return view('livewire.section-struc.index');
    }
}

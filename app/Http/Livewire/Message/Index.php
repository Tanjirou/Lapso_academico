<?php

namespace App\Http\Livewire\Message;

use Livewire\Component;

class Index extends Component
{
    protected $listeners =['departmentSectionSaved'];
    public function departmentSectionSaved($message)
    {
        session()->flash('message',$message);
    }
    public function render()
    {
        return view('livewire.message.index');
    }
}

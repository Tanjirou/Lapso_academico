<?php

namespace App\Http\Livewire\Message;

use Livewire\Component;

class Index extends Component
{
    public function pensumSaved($message)
    {
        session()->flash('message',$message);
    }
    public function render()
    {
        return view('livewire.message.index');
    }
}

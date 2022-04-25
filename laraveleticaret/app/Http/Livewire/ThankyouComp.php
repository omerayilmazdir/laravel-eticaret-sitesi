<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThankyouComp extends Component
{
    public function render()
    {
        return view('livewire.thankyou-comp')->layout('layouts.master');
    }
}

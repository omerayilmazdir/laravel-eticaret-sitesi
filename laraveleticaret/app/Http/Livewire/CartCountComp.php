<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCountComp extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.cart-count-comp');
    }
}

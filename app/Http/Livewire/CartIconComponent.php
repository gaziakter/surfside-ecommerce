<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIconComponent extends Component
{   
    protected $listenears = ['refreshComponent' => '$refresh']; 
    public function render()
    {
        return view('livewire.cart-icon-component');
    }
}

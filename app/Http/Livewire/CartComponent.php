<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{   

    public function increaseQuantity($rowID){
        $product = Cart::get($rowID);
        $qty = $product->qty + 1;
        Cart::update($rowID, $qty);
    }

    public function decreaseQuantity($rowID){
        $product = Cart::get($rowID);
        $qty = $product->qty - 1;
        Cart::update($rowID, $qty);
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}

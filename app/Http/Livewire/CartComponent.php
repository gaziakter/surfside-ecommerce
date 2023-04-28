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
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowID){
        $product = Cart::get($rowID);
        $qty = $product->qty - 1;
        Cart::update($rowID, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');

    }

    public function destroy($id){
        Cart::remove($id);
        $this->emitTo('cart-icon-component', 'refreshComponent');

        session()->flash('success_message', 'Item had been removed!');
    }

    public function clearAll(){
        Cart::destroy();
        $this->emitTo('cart-icon-component', 'refreshComponent');

    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}

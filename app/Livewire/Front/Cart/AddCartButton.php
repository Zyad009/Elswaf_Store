<?php

namespace App\Livewire\Front\Cart;

use Livewire\Component;

class AddCartButton extends Component
{
    public $productId;

    public function addCart($id){
        $this->productId = $id;    
    } 
    public function render()
    {
        return view('livewire.front.cart.add-cart-button');
    }
}

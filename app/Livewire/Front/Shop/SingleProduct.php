<?php

namespace App\Livewire\Front\Shop;

use Livewire\Component;

class SingleProduct extends Component
{
    public $details;
    public $selectedSize = null;
    public $selectedColor = null;

    public function render()
    {
        return view('livewire.front.shop.single-product' , ["colorId" => $this->selectedColor , "sizeId" => $this->selectedSize]);
    }
}

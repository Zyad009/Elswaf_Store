<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ShowProduct extends Component
{

    public $title;
    public $data ;
    protected $listeners = ['showProductEvent' => 'showProduct'];
    public function showProduct($id)
    {
        $this->data = Product::with("productColorsSizes.color", "productColorsSizes.size")
            ->where("id", $id)
            ->first();
        $this->title = $this->data->name;
        $this->dispatch("showModelToggle");
    }
    public function render()
    {
        return view('livewire.admin.product.show-product');
    }
}

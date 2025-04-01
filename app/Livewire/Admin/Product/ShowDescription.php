<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class ShowDescription extends Component
{
    public $text;
    protected $listeners = ['showDescription'];

    public function showDescription($description){
        dd($description);
        $this->dispatch("showModelToggle");
        $this->text = $description;
    }

    public function render()
    {
        return view('livewire.admin.product.show-description');
    }
}

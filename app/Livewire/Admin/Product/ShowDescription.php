<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class ShowDescription extends Component
{
    public $text , $title;
    protected $listeners = ['showDescriptionEvent' => 'showDescription'];

    public function showDescription($description){
        $this->text = $description;
        $this->title = "Description";
        $this->dispatch("showModelToggle");
    }

    public function render()
    {
        return view('livewire.admin.product.show-description');
    }
}

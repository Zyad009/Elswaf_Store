<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class TableProduct extends Component
{
    use WithPagination;
    public function render()
    {

        return view('livewire.admin.product.table-product' ,[ "products" => Product::with("category", "images")
            ->orderBy("id", "desc")
            ->paginate(config("pagination.count"))]);
    }
}

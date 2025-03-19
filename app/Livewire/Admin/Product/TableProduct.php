<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class TableProduct extends Component
{
    use WithPagination;

    public $searchBy = "name"; 
    public $search ;

    protected $listeners = ["dataRefresh" => '$refresh'];



    // إعادة تعيين البحث وإظهار كل المنتجات
    public function resetFilters()
    {
        $this->reset("search", "searchBy");
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::query();

        match ($this->searchBy) {
            "size" => $products->whereHas("productColorsSizes.size", fn($query) =>
            $query->where("name", "LIKE", "%" . $this->search . "%")),

            "name" => $products->where("name", "LIKE", "%" . $this->search . "%"),

            "category" => $products->whereHas("category", fn($query) =>
            $query->where("name", "LIKE", "%" . $this->search . "%")),

            "color" => $products->whereHas("productColorsSizes.color", fn($query) =>
            $query->where("name", "LIKE", "%" . $this->search . "%")),

            "price" => $products->where("price", "LIKE", "%" . $this->search . "%"),
        };

        return view('livewire.admin.product.table-product', [
            "products" => $products
                ->with("category", "images")
                ->orderBy("id", "desc")
                ->paginate(config("pagination.count"))
        ]);
    }
}

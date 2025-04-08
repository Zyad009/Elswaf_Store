<?php

namespace App\Livewire\Front\Shop;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ShopProduct extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public $search;

    public $categoryId, $title , $categoryName;

    public function mount()
    {
        $this->title = "All Products";
    }
    
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function selectCategory($id , $name)
    {
        $this->resetPage();
        $this->categoryId = $id;
        $this->categoryName = Null;
        $this->title = $name;
    }
    
    public function resetFilters()
    {
        $this->title = "All Products";
        $this->categoryId = null;
        $this->categoryName = null;
        $this->search = '';
    }




    public function render()
    {
        $products = Product::with("offer", "category", "images", "reviews")
            ->when($this->categoryId, function ($query) {
                $query->where("category_id", $this->categoryId);
            })
            ->where("name", "LIKE", "%" . $this->search . "%")
            ->paginate(config("pagination.count"));
        $categories = Category::withCount(relations: "products")
            ->doesntHave("children")
            ->get();
        return view('livewire.front.shop.shop-product', compact("categories", "products"));
    }
}

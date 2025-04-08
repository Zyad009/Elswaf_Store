<?php

namespace App\Livewire\Admin\Offer\Category;

use App\Models\Offer;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class AllCategories extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public $search;
    public $offers;
    public $selectedOffer = [];

    public function mount()
    {
        $this->offers = Offer::whereNotNull("code")->get();
    }

    public function rules()
    {
        return [
            "selectedOffer" => "required|exists:offers,id",
        ];
    }

    public function setOffer($id)
    {
        if (!isset($this->selectedOffer[$id])) {
            $this->dispatch("errorOffer");
            return;
        }

        $this->validate();

        Category::where("id", $id)->update(["offer_id" => $this->selectedOffer[$id]]);
        Product::where("category_id", $id)->update(["offer_id" => $this->selectedOffer[$id]]);

        $this->dispatch("successOffer");
    }


    public function cancelle($id)
    {

        Category::where("id", $id)->update(["offer_id" => null]);

        Product::where("category_id", $id)->update(["offer_id" => null]);


        $this->dispatch("deletedOffer");
        return;
    }

    public function render()
    {
        $categories = Category::where("name", "LIKE", "%" . $this->search . "%")
            ->doesntHave("children")
            ->withCount("products")
            ->with( "offer")
            ->paginate(config("pagination.count"));
        return view('livewire.admin.offer.category.all-categories' , ["categories" => $categories, "offers" => $this->offers]);
    }
}

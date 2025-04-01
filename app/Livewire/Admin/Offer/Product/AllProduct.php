<?php

namespace App\Livewire\Admin\Offer\Product;

use App\Models\Offer;
use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AllProduct extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public $search;
    public $data;
    public $selectedOffer = [];
    protected $listeners = ["refreshData" => '$refresh'];



    public function rules()
    {
        return [
            "selectedOffer" => "required|exists:offers,id", 
        ];
    }

    public function setOffer($id){

        if (!isset($this->selectedOffer[$id])) {
            $this->dispatch("errorOffer");
            return;
        }
        $this->validate();
        Product::where("id", $id)->update(["offer_id" => $this->selectedOffer[$id] ]);
        $this->dispatch("successOffer");

    }

    public function cancelle($id){

        $product = Product::with("offer")->find($id);
        
        $product->update(["offer_id" => null]);
        
        if ($product->offer->code == null) {
            $offerId = $product->offer->id;
            Offer::where("id", $offerId)->delete();
        }
        $this->dispatch("deletedOffer");
        return;
    }

    public function render()
    {
        $offers = Offer::whereNotNull("code")->get();
        $products = Product::where("name", "LIKE", "%" . $this->search . "%")
            ->orWhereHas("category", fn($query) => $query->where("name", "LIKE", "%" . $this->search . "%"))
            ->with("category" , "offer")
            ->paginate(config("pagination.count"));

        return view('livewire.admin.offer.product.all-product' , compact("products" , "offers"));
    }
}

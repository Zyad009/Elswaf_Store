<?php

namespace App\Livewire\Admin\Offer\Product;

use App\Models\Offer;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class AllProduct extends Component
{
    use WithPagination;

    #[Url(except: '')]
    public $search;
    public $offers;
    public $selectedOffer = [];
    protected $listeners = ["refreshData" => '$refresh'];

    public function mount()
    {
        $this->offers = Cache::remember('offers_with_code', now()->addMinutes(10), function () {
            return Offer::whereNotNull("code")->get();
        }) ?? collect();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

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
        $this->validate([
            "selectedOffer.$id" => "required|exists:offers,id"
        ]);

        Product::where("id", $id)->update(["offer_id" => $this->selectedOffer[$id] ]);
        unset($this->selectedOffer[$id]);
        $this->dispatch("successOffer");

    }

    public function cancelle($id)
    {
        $product = Product::with("offer")->find($id);

        $offer = $product->offer; 

        $product->update(["offer_id" => null]);

        if ($offer && $offer->code === null) {
            Offer::where("id", $offer->id)->delete();
        }

        $this->dispatch("deletedOffer");
    }


    public function render()
    {
        $products = Product::where("name", "LIKE", "%" . $this->search . "%")
            ->orWhereHas("category", fn($query) => $query->where("name", "LIKE", "%" . $this->search . "%"))
            ->with("category" , "offer")
            ->paginate(config("pagination.count"));

        return view('livewire.admin.offer.product.all-product' , ["products" => $products , "offers" => $this->offers ] ) ;
    }
}

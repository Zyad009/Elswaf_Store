<?php

namespace App\Livewire\Admin\Product;

use App\Http\Requests\Admin\Product\SingleProductRequest;
use App\Models\Product;
use App\Models\ProductColorSize;
use Livewire\Component;

class CreateSingleProduct extends Component
{
    public Product $singleProduct;

    //== this is in view  , 
    public $sizes = [];
    public $colors = [];

    //== this has been selected by admin
    public $size_id;
    public $color_id;
    public $QTY;

    public function getRules()
    {
        return (new SingleProductRequest())->rules();
    }
    public function submit()
    {
        //====================Validation
        $this->validate();

        //====================Save The Qty For The Self Product
        $existData = ProductColorSize::where("product_id", $this->singleProduct->id)
            ->where("color_id", $this->color_id)
            ->where("size_id", $this->size_id)
            ->first();


        if($existData){
            $id = encrypt($existData->id);
            $this->dispatch("errorDuplicate" , $id);
            return;
        }

        $oldQTY = ProductColorSize::where("product_id", $this->singleProduct->id)->sum("QTY");
        $this->singleProduct->QTY = $this->QTY + $oldQTY;
        $this->singleProduct->save();
        
        //====================Create details for the product
        ProductColorSize::create([
            'product_id' => $this->singleProduct->id,
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'QTY' => $this->QTY,
        ]);
        
        //====================Alertt success The Form
        $this->dispatch("success");
    }
    
    public function render()
    {
        return view('livewire.admin.product.create-single-product');
    }
}

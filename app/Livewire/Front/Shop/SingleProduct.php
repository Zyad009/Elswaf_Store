<?php

// namespace App\Livewire\Front\Shop;

// use App\Models\Product;
// use App\Models\ProductColorSize;
// use Livewire\Component;

// class SingleProduct extends Component
// {
//     public $details, $productSlug, $finalPrice;
//     public $selectedSize = null, $selectedColor = null, $QTY = 1;

//     public function addToCart()
//     {
//         $nameSize = $this->details[$this->selectedSize]["name"] ?? null;
//         $nameColor = $this->details[$this->selectedSize]["colors"][$this->selectedColor]["name"] ?? null;
//         $this->validate([
//             'productSlug' => 'required|string|exists:products,slug',
//             'selectedSize' => 'required|integer|exists:product_color_sizes,size_id',
//             'selectedColor' => 'required|integer|exists:product_color_sizes,color_id',
//             'QTY' => 'required|integer|min:1',
//         ]);

//         $exists = ProductColorSize::where('size_id', $this->selectedSize)
//             ->where('color_id', $this->selectedColor)
//             ->where("QTY", ">=", $this->QTY)
//             ->first();

//         $maxQuantity = $exists->QTY ?? 0;

//         if (!$exists) {
//             $this->dispatch("errorStock");
//             return;
//         }

//         $dataProduct = Product::findBySlug($this->productSlug);
//         //Create session 
//         $cart = session()->get('cart', []);

//         $key = $dataProduct->slug . "&$nameColor&$nameSize";

//         //Check if the product already exists in cart
//         if (isset($cart[$this->productSlug]) &&  $cart[$this->productSlug]['key'] !== $key) {
//             $cart[$this->productSlug]['quantity'] = $this->QTY;
//             $color = $cart[$this->productSlug]['color'] = $nameColor ?? null;
//             $size =  $cart[$this->productSlug]['size'] = $nameSize ?? null;
//             $cart[$this->productSlug]['key'] = $key;
//             $cart[$this->productSlug]['max_quantity'] = $maxQuantity;

//             if ($color == null && $size == null) {
//                 $this->dispatch("productAlreadyInCart");
//                 return;
//             }
            
//         } else {
//             if($cart[$this->productSlug]['key'] != null && $cart[$this->productSlug]['key'] == $dataProduct->slug . "&$nameColor&$nameSize"){
//                 $this->dispatch("productAlreadyInCart");
//                 return;
//             }
//             $cart[$this->productSlug] = [
//                 "quantity" => $this->QTY,
//                 "max_quantity" => $maxQuantity,
//                 "color" => $nameColor ?? null,
//                 "size" => $nameSize ?? null,
//                 "price" => $this->finalPrice,
//                 "name" => $dataProduct->name,
//                 "slug" => $dataProduct->slug,
//                 "image" => $dataProduct->images->first()?->main_image,
//                 "key" => $key,
//             ];
//         }
//         //Update the cart session
//         session()->put('cart', $cart);
//         $this->dispatch("successCart");
//         $this->dispatch("viewCart", $this->productSlug);

//     }
//     public function render()
//     {
//         return view('livewire.front.shop.single-product');
//     }
// }



namespace App\Livewire\Front\Shop;

use App\Models\Product;
use App\Models\ProductColorSize;
use Livewire\Component;

class SingleProduct extends Component
{
    public $details, $productSlug, $finalPrice;
    public $selectedSize = null, $selectedColor = null, $QTY = 1;

    public function addToCart()
    {
        $nameSize = $this->details[$this->selectedSize]["name"] ?? null;
        $nameColor = $this->details[$this->selectedSize]["colors"][$this->selectedColor]["name"] ?? null;

        $this->validate([
            'productSlug' => 'required|string|exists:products,slug',
            'selectedSize' => 'required|integer|exists:product_color_sizes,size_id',
            'selectedColor' => 'required|integer|exists:product_color_sizes,color_id',
            'QTY' => 'required|integer|min:1',
        ]);

        $exists = ProductColorSize::where('size_id', $this->selectedSize)
            ->where('color_id', $this->selectedColor)
            ->where("QTY", ">=", $this->QTY)
            ->first();

        $maxQuantity = $exists->QTY ?? 0;

        if (!$exists) {
            $this->dispatch("errorStock");
            return;
        }

        $dataProduct = Product::findBySlug($this->productSlug);

        // Create session
        $cart = session()->get('cart', []);

        // Generate a unique key based on product, size, and color
        $key = $dataProduct->slug . "&$nameColor&$nameSize";
        $oldKey = $this->productSlug . "&&";
        // Check if the product already exists in the cart
        if (isset($cart[$oldKey])) {
            $cart[$key] = [
                "quantity" => $this->QTY,
                "max_quantity" => $maxQuantity,
                "color" => $nameColor ?? null,
                "size" => $nameSize ?? null,
                "price" => $this->finalPrice,
                "name" => $dataProduct->name,
                "slug" => $dataProduct->slug,
                "image" => $dataProduct->images->first()?->main_image,
                "key" => $key, // Store the key internally
            ];
            unset($cart[$oldKey]);
        } else {
            // If the product is not in the cart, add it
            $cart[$key] = [
                "quantity" => $this->QTY,
                "max_quantity" => $maxQuantity,
                "color" => $nameColor ?? null,
                "size" => $nameSize ?? null,
                "price" => $this->finalPrice,
                "name" => $dataProduct->name,
                "slug" => $dataProduct->slug,
                "image" => $dataProduct->images->first()?->main_image,
                "key" => $key, // Store the key internally
            ];
        }

        // Update the cart session
        session()->put('cart', $cart);
        $this->dispatch("successCart");
        $this->dispatch("viewCart", $key);
    }

    public function render()
    {
        return view('livewire.front.shop.single-product');
    }
}



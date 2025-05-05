<?php
namespace App\Livewire\OrderManagement\PickupOrder;

use App\Models\Order;
use Livewire\Component;
use App\Models\OrderDetails;

class ShowOrderDetails extends Component
{

    public $title , $data , $maxDeletedQTY , $productName;
    public $reasonDelete, $QTYDelete;
    public $key = null , $deleteKey , $secritKey;
    protected $listeners = ['showOrderDetailsEvent'];

    public function showOrderDetailsEvent($id)
    {
        $this->data = OrderDetails::where("order_id", $id)
            ->get();
            $this->secritKey = null;
            $this->deleteKey = '1';
            $this->maxDeletedQTY = 1;
            $this->productName = null;
        $this->dispatch("showModelToggleXl");
    }

    public function deleteItem($slug, $orderId ,$QTY , $productName)
    {
        $Key = $slug . '&' . $orderId;

        if ($this->deleteKey === $Key) {
            $this->deleteKey = null;
        } else {
            $this->deleteKey = $Key;
            $this->secritKey = $Key;
        }

        $this->maxDeletedQTY = $QTY;
        $this->productName = $productName;
        return;
    }

    public function canceleDelete(){
        $this->deleteKey = '1';
        $this->secritKey = null;
    }

    public function rules(){
        return [
            'reasonDelete' => 'required|string|min:3|max:500',
            'QTYDelete' => "required|integer|min:1|max:$this->maxDeletedQTY",
        ];
    }
    public function removeItem($slug, $color, $size, $orderId){

        $this->validate();

        $item = OrderDetails::where('slug', $slug)
            ->where('color', $color)
            ->where('size', $size)
            ->where('order_id', $orderId)
            ->first();

        $deletedPrice = $item->final_price/$item->QTY;

        // $item->update(['status' => 'partial_sale']);
        $item->update(['status' => 'Cancelled']);

        Order::where('id', $orderId)->decrement('finally_total', $deletedPrice);

        $this->dispatch('deletedItem');
        $this->dispatch("showModelToggle");
        $this->dispatch('dataRefresh')->to(PickupOrderComponent::class);
    
    }
    public function toggleEditMode($itemId, $orderId)
    {
        $newKey = $itemId . '&' . $orderId;

        if ($this->key === $newKey) {
            $this->key = null;
        } else {
            $this->key = $newKey;
        }

    }

    public function saveChanges()
    {
        foreach ($this->data as $itemData) {
            $item = OrderDetails::find($itemData['id']);
            if ($item) {
                $item->update([
                    'size' => $itemData['size'],
                    'color' => $itemData['color'],
                    'QTY' => $itemData['QTY'],
                ]);
            }
        }

        // $this->editMode = false;
    }

    public function render()
    {
        return view('livewire.order-management.pickup-order.show-order-details');
    }
}

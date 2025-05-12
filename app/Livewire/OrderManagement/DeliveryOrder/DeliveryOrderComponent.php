<?php

namespace App\Livewire\OrderManagement\DeliveryOrder;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\ProductColorSize;
use Illuminate\Support\Facades\DB;

class DeliveryOrderComponent extends Component
{
    use WithPagination;



    #[Url(except: '')]
    public $search;

    public $statusFilters = [];
    public $pickupPointId;

    public function mount()
    {
        // $saleOfficer = auth()->guard('saleOfficer')->user();
        // $this->pickupPointId =  $saleOfficer->pickup_point_id;
    }
    protected $listeners = ["dataRefresh" => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paymentSuccess($id)
    {
        Order::where('id', $id)->update([
            "status" => 1,
            "status_order" => "completed",
        ]);
        $this->dispatch('$refresh');
        $this->dispatch('paymentSuccess');
        alert()->success('Success', 'Payment Has Been Successfully');
        return;
    }

    public function cancelle($id)
    {
        $order = Order::where('id', $id)->with("orderDetails")->first();
        $order->update(["status_order" => "cancelled",]);

        $details = $order->orderDetails;

        $arr = [];
        foreach ($details as $item) {

            $arr[$item['slug']] = ($arr[$item['slug']] ?? 0) + $item['QTY'];

            ProductColorSize::whereHas("product", function ($q) use ($item) {
                $q->where("slug", $item['slug']);
            })
                ->whereHas("color", function ($q) use ($item) {
                    $q->where("name", $item['color']);
                })
                ->whereHas("size", function ($q) use ($item) {
                    $q->where("name", $item['size']);
                })
                ->increment('QTY', $item['QTY']);
        }

        foreach ($arr as $slug => $qty) {
            Product::where('slug', $slug)->update([
                'QTY' => DB::raw("QTY + $qty"),
                'sold' => DB::raw("sold - $qty"),
            ]);
        }

        $this->dispatch('$refresh');
        $this->dispatch('cancelleSuccess');

        return;
    }


    
    public function render()
    {
        $orders = Order::where('delivery_method', 'delivery')
            ->when(!empty($this->statusFilters), function ($q) {
                $q->whereIn('status_order', $this->statusFilters);
            })
            ->when(empty($this->statusFilters), function ($q) {
                $q->where('status_order', 'pending');
                $q->orderByDesc('order_date');
            })
            ->where('phone', 'LIKE', '%' . $this->search . '%')
            ->with('user')
            ->orderByRaw("FIELD(status_order,'pending' ,'accepted', 'completed', 'cancelled')")
            ->paginate(config('pagination.count'));

        return view('livewire.order-management.delivery-order.delivery-order-component' , compact('orders'));
    }
}

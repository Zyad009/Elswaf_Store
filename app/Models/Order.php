<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pickup_points_id',
        'payment_method',
        'payment_status',
        'delivery_method',
        'payment_method',
        'delivery_type',
        'city',
        'area',
        'pickup_code',
        'total',
        'delivery_price',
        'finally_total',
        'name',
        'phone',
        'email',
        'delivery_address',
        'status_order',
        'status',
        'order_date',
        'notes',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pickupPoint(){
        return $this->belongsTo(PickupPoint::class);
    }

    public function orderDeltails()
    {
        return $this->hasMany(OrderDetails::class);
    }
}


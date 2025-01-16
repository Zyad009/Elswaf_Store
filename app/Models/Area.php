<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'city_id',
            'delivery_price_backup',
            'delivery_price_regular',
            'delivery_price_super',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }   
}

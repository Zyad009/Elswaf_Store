<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function productAndSizes(){
        return $this->belongsToMany(Product::class , "product_size_color")->withPivot('size_id' , "QTY");
    }
}

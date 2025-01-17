<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    
    public function productAndColors(){
        return $this->belongsToMany(Product::class , "product_size_color")->withPivot('color_id' , "QTY");
    }
}

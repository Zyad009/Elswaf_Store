<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'offer',
        // 'sizes',
        // 'color',
        'description',
        'QTY',
        'image',
        'category_id',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productAndColors(){
        return $this->belongsToMany(Color::class , "product_size_color")->withPivot('size_id' , "QTY");
    }

    protected $casts = [
        // 'sizes' => 'array', 
    ];

}


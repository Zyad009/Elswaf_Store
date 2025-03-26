<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name" ,
        "discount",
        "start_date",
        "end_date",
];

public function products(){
    return $this->belongsTo(Product::class);
}

public function categories(){
    return $this->belongsTo(Category::class);
}

}

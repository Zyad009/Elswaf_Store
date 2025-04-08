<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Product extends Model
{
    use HasFactory, HasSlug , SoftDeletes;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom("name")
            ->saveSlugsTo("slug");
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'price',
        'offer_id',
        'description',
        'QTY',
        'image',
        'category_id',
        'type_size',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function productColorsSizes()
    {
        return $this->hasMany(ProductColorSize::class, 'product_id');
    }

    public function images() : MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    protected $casts = [
        // 'sizes' => 'array', 
    ];

}


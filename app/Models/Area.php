<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\SlugOptions;

class Area extends Model
{
    use HasFactory , HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

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

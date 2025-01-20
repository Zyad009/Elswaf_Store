<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasFactory, HasSlug;

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
        'id' ,
        'name',
        'parent_id'
    ];

    public function parent(){
        return $this->belongsTo(Category::class , "parent_id");
    }

    public function children(){
        return $this->hasMany(Category::class , "parent_id");
    }


    public function products()
    {
        return $this->hasMany(product::class);
    }
}

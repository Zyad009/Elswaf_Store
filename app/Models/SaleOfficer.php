<?php

namespace App\Models;

use Faker\Core\Barcode;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleOfficer extends Model
{
    use HasFactory, HasSlug, Notifiable , SoftDeletes;

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
        'email',
        'gender',
        'address',
        'phone',
        'whatsapp',
        'password',
        'pickup_point_id',
    ];

    public function pickupPoint(){
        return $this->belongsTo(PickupPoint::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}



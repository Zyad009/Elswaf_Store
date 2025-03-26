<?php

namespace App\Models;

use Faker\Core\Barcode;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
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
        'salary',
        'address',
        'phone',
        'whatsapp',
        'password',
        'branch_id',
    ];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}



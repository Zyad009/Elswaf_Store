<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Sluggable\HasSlug;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Sluggable\SlugOptions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(function () {
                return "{$this->first_name} {$this->last_name}";
            })
            ->saveSlugsTo("slug");
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    // public function notifys()
    // {
    //     return $this->hasMany(Notification::class);
    // }

    public function payMents()
    {
        return $this->hasMany(Payment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function orders()
    {
        return $this->hasMany(order::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function otp()
    {
        return $this->hasMany(OtpUser::class);
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'gender',
        'whatsapp',
        'address',
        'phone',
    ];

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

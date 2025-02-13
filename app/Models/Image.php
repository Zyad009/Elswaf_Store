<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Psy\CodeCleaner\ReturnTypePass;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ["folder", "main_image", "hover_image" ,'images' , 'imageable_id', 'imageable_type'];


    public function imageable() : MorphTo
    {
        return $this->morphTo();
    }

}

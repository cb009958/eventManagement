<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Events extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'address',
        'city',
        'country',
        'zip_code',
        'latitude',
        'longitude',

        'phone',
        'email',
        'website',
        'stars',
        'check-in',
        'price'
    ];
}

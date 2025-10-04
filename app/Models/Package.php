<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'image',
        'name',
        'location',
        'duration',
        'persons',
        'rating',
        'reviews',
        'price',
        'is_active',
        'order',
    ];
}
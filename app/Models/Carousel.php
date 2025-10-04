<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'button_text',
        'button_link',
        'is_active',
        'order',
    ];
}
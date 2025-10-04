<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'main_image',
        'image_1',
        'image_2',
        'button_text',
        'button_link',
        'is_active',
    ];
}
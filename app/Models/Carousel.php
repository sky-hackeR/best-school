<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Carousel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tagline',
        'hero_heading',
        'button_text',
        'button_link',
        'image',
        'status',
        'upload_folder'
    ];
}

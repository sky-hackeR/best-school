<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'role',
        'name',
        'image',
        'status',
        'upload_folder'
    ];
}

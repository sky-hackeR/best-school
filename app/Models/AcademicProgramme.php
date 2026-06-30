<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicProgramme extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'programme_name',
        'subjects',
    ];

    protected $casts = [
        'subjects' => 'array',
    ];
}

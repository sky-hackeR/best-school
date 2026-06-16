<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroSection extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'subtitle',
        'image_1',
        'image_2',
        'image_3',
        'button_text',
        'button_link',
    ];

    /**
     * Hidden attributes from serialization.
     */
    protected $hidden = [
        'single_row_lock',
    ];

    /**
     * Helper to safely fetch or instantiate the single allowed record.
     *
     * @return \App\Models\HeroSection
     */
    public static function getRecord(): self
    {
        return self::firstOrCreate(['single_row_lock' => true]);
    }
}
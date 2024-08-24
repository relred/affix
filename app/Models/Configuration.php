<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    protected $casts = [
        'is_cover_automatic' => 'boolean',
        'cover_ids' => 'array',
    ];

    public static function isCoverAuto()
    {
        return self::first()->is_cover_automatic;
    }
}

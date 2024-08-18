<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    public const IS_SUPERADMIN = 1;

    public const IS_ADMIN = 2;

    public const IS_WRITER = 3;

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}

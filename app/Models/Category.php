<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasFactory;
    use HasSlug;
    protected $fillable = ['name'];

    public const IS_AFFIX_PLAY = 1;

    public const IS_REDEX = 2;

    public const IS_SPORTS = 3;

    public const IS_LIVE = 4;

    public const IS_SEPCIAL_REPORT = 5;
    
    public const IS_ECOSYSTEM = 6;
    
    public const IS_NEWS = 7;

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'category', 'name');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}

<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Configuration;

class ArticleService
{
    public function getLatestFeed($limit = 10)
    {
        return Article::where('is_public', 1)->latest()->take($limit)->get();
    }

    public function getCoverArticle()
    {
        if (Configuration::isCoverAuto()) {
            return Article::where('is_public', 1)->latest()->first();
        }
        
        $cover_id = Configuration::first()->cover_id;

        return Article::find($cover_id);
    }

    public function getHighlightArticles()
    {
        // Implementation here
    }
}

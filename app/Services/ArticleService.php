<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Configuration;

class ArticleService
{
    public function getLatestFeed($limit = 12)
    {
        return Article::where('is_public', 1)
            ->latest()
            ->take($limit)
            ->get();
    }

    public function getCarouselArticles()
    {
        $config = Configuration::first();

        if ($config->is_cover_automatic) {
            return $this->getLatestFeed($config->cover_count);
        }

        if ($config->cover_ids) {
            $coverIds = json_decode($config->cover_ids, true);

            return Article::whereIn('id', $coverIds)
                ->where('is_public', 1)
                ->orderByRaw('FIELD(id, '.implode(',', $coverIds).')')
                ->get();
        }

        return $this->getLatestFeed($config->cover_count);
    }

    public function getHighlightArticles()
    {
        // Implementation here
    }
}

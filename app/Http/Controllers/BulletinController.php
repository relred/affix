<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\View\View;

class BulletinController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index(): View
    {
        $feed = $this->articleService->getLatestFeed();
        $cover = $this->articleService->getCoverArticle();
        $highlights = $this->articleService->getHighlightArticles();

        return view('home', compact('feed', 'cover', 'highlights'));
    }
}

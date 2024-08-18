<?php

namespace App\View\Components\RecientArticles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $slug,
        public string $imageUrl,
        public string $title,
        public string $date,
        public string $description,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recient-articles.card');
    }
}

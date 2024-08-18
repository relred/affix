<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cover extends Component
{
    public function __construct(
        public string $slug,
        public string $imageUrl,
        public string $title,
        public string $description,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cover');
    }
}

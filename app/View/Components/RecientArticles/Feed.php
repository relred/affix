<?php

namespace App\View\Components\RecientArticles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Feed extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $feed)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recient-articles.feed');
    }
}

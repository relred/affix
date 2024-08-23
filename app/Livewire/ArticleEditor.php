<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEditor extends Component
{
    public $article;

    public $title;

    public $body;

    public function mount()
    {
        $this->title = $this->article->title;

        if ($this->article->body) {
            $this->body = $this->article->body;
        } else {
            $this->body = '';
        }
    }

    public function render()
    {
        return view('livewire.article-editor');
    }

    public function save()
    {
        $this->article->update(['body' => $this->body]);
    }
}

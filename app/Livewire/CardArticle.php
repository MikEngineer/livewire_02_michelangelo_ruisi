<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CardArticle extends Component
{
    public function render()
    {
        $articles = Article::all();
        return view('livewire.card-article', compact('articles'));
    }
}

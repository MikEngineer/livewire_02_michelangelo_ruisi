<?php

namespace App\Livewire;

use Livewire\Component;

class CardShowArticle extends Component
{
    public $article;

    public function render()
    {
        return view('livewire.card-show-article');
    }
}

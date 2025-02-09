<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required')]
    public $body;

    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        // $this->clearForm(); usiamo ->reset()
        $this->reset();

        session()->flash('message', 'Articolo creato con successo.');
    }

    // protected function clearForm()
    // {
    //     $this->title = '';
    //     $this->subtitle = '';
    //     $this->body = '';
    // }

    public function render()
    {
        return view('livewire.create-article');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class EditArticle extends Component
{

    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required')]
    public $body;

    public function updateArticle()
    {
        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);
    }

    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}

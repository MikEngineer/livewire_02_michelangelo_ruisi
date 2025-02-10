<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $title;
    
    #[Validate('required')]
    public $subtitle;
    
    #[Validate('required')]
    public $body;
    
    // Proprietà per il nuovo file immagine (opzionale)
    #[Validate('nullable|image')]
    public $newImg;

    public $article;

    public function updateArticle()
    {
        $this->validate();

        $updateData = [
            'title'    => $this->title,
            'subtitle' => $this->subtitle,
            'body'     => $this->body,
        ];

        if ($this->newImg) {
            $updateData['img'] = $this->newImg->store('images', 'public');
        }

        $this->article->update($updateData);

        session()->flash('message', 'Articolo aggiornato con successo.');
    }

    public function mount()
    {
        $this->title    = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body     = $this->article->body;
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}

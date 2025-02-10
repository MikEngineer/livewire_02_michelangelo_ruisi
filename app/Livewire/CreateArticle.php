<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{

    use WithFileUploads;

    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required')]
    public $body;
    #[Validate('required|image')]
    public $img;

    public function store()
    {
        $this->validate();

        $img = $this->img->store('img', 'public');

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $img,
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

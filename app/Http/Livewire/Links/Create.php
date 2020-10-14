<?php

namespace App\Http\Livewire\Links;

use App\Models\Link;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $url;

    public $description;

    public $thumbnail;

    public $enabled;

    public $clicks;

    protected $rules = [
        'url' => 'required|url',
        'description' => 'required|min:6',
        'thumbnail' => 'image|max:1024'
    ];

    public function render()
    {
        return view('livewire.links.create');
    }

    public function addClick(Link $link)
    {
        $link->addClick();
    }

    public function saveLink()
    {
        $this->validate();

        $path = $this->thumbnail->storePublicly('images');

        Link::create([
            'url' => $this->url,
            'description' => $this->description,
            'thumbnail' => $path,
        ]);

        $this->emit('saved');
    }
}

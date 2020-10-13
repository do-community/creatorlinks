<?php

namespace App\Http\Livewire\Links;

use App\Models\Link;
use Livewire\Component;

class Create extends Component
{
    public $url;

    public $description;

    protected $rules = [
        'url' => 'required|url',
        'description' => 'required|min:6',
    ];

    public function render()
    {
        return view('livewire.links.create');
    }

    public function saveLink()
    {
        $this->validate();

        Link::create([
            'url' => $this->url,
            'description' => $this->description,
        ]);
    }
}

<?php

namespace App\Http\Livewire\Links;

use Livewire\Component;
use App\Models\Link;

class Collection extends Component
{
    public function render()
    {
        $links = Link::all();

        return view('livewire.links.collection', [ 'links' => $links ]);
    }
}

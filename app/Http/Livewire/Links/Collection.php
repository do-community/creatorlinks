<?php

namespace App\Http\Livewire\Links;

use Livewire\Component;
use App\Models\Link;

class Collection extends Component
{
    public function enable(Link $link)
    {
        $link->changeStatus(true);
    }

    public function disable(Link $link)
    {
        $link->changeStatus(false);
    }

    public function delete(Link $link)
    {
        $link->delete();
    }

    public function render()
    {
        $links = Link::all();

        return view('livewire.links.collection', [ 'links' => $links ]);
    }
}

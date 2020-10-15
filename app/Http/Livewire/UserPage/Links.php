<?php

namespace App\Http\Livewire\UserPage;

use App\Models\Link;
use Livewire\Component;

class Links extends Component
{
    public function render()
    {
        $links = Link::all();

        return view('livewire.user-page.links', [ 'links' => $links ]);
    }
}

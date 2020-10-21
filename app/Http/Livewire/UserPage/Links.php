<?php

namespace App\Http\Livewire\UserPage;

use App\Models\Link;
use Livewire\Component;

class Links extends Component
{
    public $user;

    public function render()
    {
        $links = Link::where('user_id', $this->user->id)
            ->where('enabled', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.user-page.links', [ 'links' => $links ]);
    }

    public function addClick(Link $link)
    {
        $link->addClick();
    }
}

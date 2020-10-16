<?php

namespace App\Http\Livewire\Links;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Link;

class Collection extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

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
        $links = Link::where('user_id', $this->user->id)
            ->get();

        return view('livewire.links.collection', [ 'links' => $links ]);
    }
}

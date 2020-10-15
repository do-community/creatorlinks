<?php

namespace App\Http\Livewire\UserPage;

use App\Models\Link;
use App\Models\User;
use Livewire\Component;

class Links extends Component
{
    public $user;

    public function render()
    {
        $links = Link::where('user_id', $this->user->id)
            ->where('enabled', true)
            ->get();

        return view('livewire.user-page.links', [ 'links' => $links ]);
    }
}

<?php

namespace App\Http\Livewire\UserPage;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = User::where('username', $user)->first();
    }

    public function render(User $user)
    {
        return view('livewire.user-page.show', ['user' => $user]);
    }
}

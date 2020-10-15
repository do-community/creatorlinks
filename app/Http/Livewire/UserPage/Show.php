<?php

namespace App\Http\Livewire\UserPage;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public function render(User $user)
    {
        return view('livewire.user-page.show', ['user' => $user]);
    }
}

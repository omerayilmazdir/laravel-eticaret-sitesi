<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashboardComp extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashboard-comp')->layout('layouts.master');
    }
}

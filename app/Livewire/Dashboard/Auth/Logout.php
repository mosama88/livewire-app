<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{


public function logout(){
    Auth::guard('admin')->logout();

    session()->forget('gurad.admin');

    session()->regenerateToken();

    return to_route('dashboard.login');
}

    public function render()
    {
        return view('dashboard.auth.logout');
    }
}
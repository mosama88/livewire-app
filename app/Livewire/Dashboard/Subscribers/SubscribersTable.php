<?php

namespace App\Livewire\Dashboard\Subscribers;

use Livewire\Component;

class SubscribersTable extends Component
{
    public function render()
    {
        return view('dashboard.subscribers.subscribers-table');
    }
}

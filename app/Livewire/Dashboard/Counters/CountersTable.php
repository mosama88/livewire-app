<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersTable extends Component
{
    use  WithPagination;
    public $search;

    public function render()
    {   
        $data = Counter::select("*")->orderBy('id','DESC')->paginate(10);

        return view('dashboard.counters.counters-table',compact('data'));
    }
}

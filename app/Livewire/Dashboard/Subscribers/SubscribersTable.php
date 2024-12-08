<?php

namespace App\Livewire\Dashboard\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;

class SubscribersTable extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ['refreshDataSubscriber'=>'$refresh'];

    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $query = (new Subscriber)->query();

        if($this->search){
            $query->where('email','like','%'. $this->search .'%');
        }

        $data = $query->orderBy('id','DESC')->paginate(5);
        return view('dashboard.subscribers.subscribers-table',compact('data'));
    }
}

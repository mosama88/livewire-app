<?php

namespace App\Livewire\Dashboard\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;

class SubscribersDelete extends Component
{

    protected $listeners = ['subscribersDelete'];
    public $subscribersDeleteRecord,$email;


    public function subscribersDelete($id){
        $this->subscribersDeleteRecord = Subscriber::findOrFail($id);
        // $subscribersDeleteRecord->delete();
         $this->email = $this->subscribersDeleteRecord->email;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        // Save Data
    $this->subscribersDeleteRecord->delete();
    $this->reset('subscribersDeleteRecord');
    //Hide Modal
    $this->dispatch('deleteModalToggle');
    //Refresh Page Auto Page From Skill Index And Make Listeners
    $this->dispatch('refreshDataSubscriber')->to(SubscribersTable::class);
}

    public function render()
    {
        return view('dashboard.subscribers.subscribers-delete');
    }
}

<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;
use App\Livewire\Dashboard\Messages\MessagesTable;

class MessagesDelete extends Component
{

    
    
    public $MessagesDeleteRecored,$name;
    protected $listeners = ['MessagesDelete'];

    public function MessagesDelete($id){
        $this->MessagesDeleteRecored =  Message::findOrFail($id);
        $this->name = $this->MessagesDeleteRecored->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        // Save Data
    $this->MessagesDeleteRecored->delete();
    $this->reset('MessagesDeleteRecored');
    //Hide Modal
    $this->dispatch('deleteModalToggle');
    //Refresh Page Auto Page From counter Index And Make Listeners
    $this->dispatch('refreshTableMessage')->to(MessagesTable::class);
}



    public function render()
    {
        return view('dashboard.messages.messages-delete');
    }
}

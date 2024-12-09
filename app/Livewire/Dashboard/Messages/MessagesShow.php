<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;
use App\Livewire\Dashboard\Messages\MessagesTable;

class MessagesShow extends Component
{


    public $name,$email,$subject,$message,$status;
    
    protected $listeners = ['MessagesShow'];

    public function MessagesShow($id){
       $recored=  Message::findOrFail($id);
       $this->name = $recored->name;
       $this->email = $recored->email;
       $this->subject = $recored->subject;
       $this->message = $recored->message;
       $recored->update(['status'=>'1']); 
       $this->dispatch('showModalToggle');
       $this->dispatch('refreshTableMessage')->to(MessagesTable::class);

    }
    


    public function render()
    {
        return view('dashboard.messages.messages-show');
    }
}

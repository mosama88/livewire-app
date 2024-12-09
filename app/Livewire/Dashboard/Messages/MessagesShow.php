<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;

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
       $this->status = $recored->status;
       $this->dispatch('showModalToggle');
    }
    


    public function render()
    {
        return view('dashboard.messages.messages-show');
    }
}

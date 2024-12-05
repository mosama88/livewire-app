<?php

namespace App\Livewire\Dashboard\Settings;

use Livewire\Component;

class UpdateSettings extends Component
{


     public $name;
     public $address;
     public $phone;
     public $email;
     public $facebook;
     public $twitter;
     public $linkedin;
     public $instgram;


     public function submit(){
        
     }


     
    public function render()
    {
        return view('dashboard.settings.update-settings');
    }
}
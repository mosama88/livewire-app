<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{


     public $settings;



     public function submit(){
        //
     }

     public function mount(){
        $this->settings = Setting::findOrFail(1);

        dd($this->settings);
     }


     
    public function render()
    {
        return view('dashboard.settings.update-settings');
    }
}
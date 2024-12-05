<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;
use App\Http\Requests\Dashboard\SettingRequest;

class UpdateSettings extends Component
{


     public $settings;


     public function rules(){
        return (new SettingRequest())->rules();
    }

    
    public function submit(){
        $this->validate();
        $this->settings->save();
        session()->flash('message','Settings Updated Successfully');

     }

     public function mount(){

        $this->settings = Setting::findOrFail(1);
        // dd($this->settings);
     }
     
     


     
    public function render()
    {
        return view('dashboard.settings.update-settings');
    }
}
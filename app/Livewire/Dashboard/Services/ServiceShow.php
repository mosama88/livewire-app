<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceShow extends Component
{

    public $name,$description,$icon;
    
    protected $listeners = ['ServicesShow'];

    public function ServicesShow($id){
       $recored=  Service::findOrFail($id);
       $this->name = $recored->name;
       $this->description = $recored->description;
       $this->icon = $recored->icon;
       $this->dispatch('showModalToggle');
    }
    


    public function render()
    {
        return view('dashboard.services.service-show');
    }
}

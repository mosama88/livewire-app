<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;
use App\Livewire\Dashboard\Services\ServiceTable;

class ServiceDelete extends Component
{

    
    public $serviceDeleteRecored,$name;
    protected $listeners = ['ServicesUDelete'];

    public function ServicesUDelete($id){
        $this->serviceDeleteRecored =  Service::findOrFail($id);
        $this->name = $this->serviceDeleteRecored->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        // Save Data
    $this->serviceDeleteRecored->delete();
    $this->reset('serviceDeleteRecored');
    //Hide Modal
    $this->dispatch('deleteModalToggle');
    //Refresh Page Auto Page From counter Index And Make Listeners
    $this->dispatch('refreshTableservice')->to(ServiceTable::class);
}


    public function render()
    {
        return view('dashboard.services.service-delete');
    }
}

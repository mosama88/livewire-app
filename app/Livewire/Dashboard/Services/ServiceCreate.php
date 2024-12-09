<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;
use App\Http\Requests\Dashboard\ServiceRequest;
use App\Livewire\Dashboard\Services\ServiceTable;

class ServiceCreate extends Component
{

    public $service;
    public $name,$description,$icon;

        public function rules(){
        return (new ServiceRequest)->rules();
        }

    public function submit(){
       $dataCreate =  $this->validate();
       Service::create($dataCreate);
       $this->reset(['name','description','icon']);
       $this->dispatch('createModalToggle');
       $this->dispatch('refreshTableservice')->to(ServiceTable::class);
    }

    
    public function render()
    {
        return view('dashboard.services.service-create');
    }
}

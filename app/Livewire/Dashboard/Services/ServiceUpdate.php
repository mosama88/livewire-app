<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;
use App\Http\Requests\Dashboard\ServiceRequest;
use App\Livewire\Dashboard\Services\ServiceTable;

class ServiceUpdate extends Component
{
    public $updateData;
    public $name,$description,$icon;
    protected $listeners = ['ServicesUpdate'] ;

    public function ServicesUpdate($id){
    $this->updateData = Service::findOrFail($id);
    $this->name = $this->updateData->name;
    $this->description = $this->updateData->description;
    $this->icon = $this->updateData->icon;
    $this->resetValidation();
    $this->dispatch('editModalToggle');

     }

     public function rules(){
        return (new ServiceRequest())->rules();
     }

    public function submit(){
        $data = $this->validate();
        $this->updateData-> update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshTableservice')->to(ServiceTable::class);
    }

    public function render()
    {
        return view('dashboard.services.service-update');
    }
}

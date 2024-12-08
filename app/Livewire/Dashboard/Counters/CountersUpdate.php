<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use App\Http\Requests\Dashboard\CounterRequest;
use App\Livewire\Dashboard\Counters\CountersTable;

class CountersUpdate extends Component
{

    public $updateData;
    public $name,$count,$icon;
    protected $listeners = ['CountersUpdate'] ;

    public function CountersUpdate($id){
    $this->updateData = Counter::findOrFail($id);
    $this->name = $this->updateData->name;
    $this->count = $this->updateData->count;
    $this->icon = $this->updateData->icon;
    $this->resetValidation();
    $this->dispatch('editModalToggle');

     }

     public function rules(){
        return (new CounterRequest())->rules();
     }

    public function submit(){
        $data = $this->validate();
        $this->updateData-> update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshTableCount')->to(CountersTable::class);
    }

    public function render()
    {
        return view('dashboard.counters.counters-update');
    }
}

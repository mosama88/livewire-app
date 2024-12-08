<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use App\Http\Requests\Dashboard\CounterRequest;
use App\Livewire\Dashboard\Counters\CountersTable;

class CountersCreate extends Component
{
    public $counter;
    public $name,$count,$icon;

        public function rules(){
        return (new CounterRequest)->rules();
        }
    public function submit(){
       $dataCreate =  $this->validate();
       Counter::create($dataCreate);
       $this->reset(['name','count','icon']);
       $this->dispatch('createModalToggle');
       $this->dispatch('refreshTableCount')->to(CountersTable::class);
    }

    public function render()
    {
        return view('dashboard.counters.counters-create');
    }
}

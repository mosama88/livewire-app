<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use App\Livewire\Dashboard\Counters\CountersTable;

class CountersDelete extends Component
{

     public $counterDeleteRecored,$name;
        protected $listeners = ['CountersUDelete'];

        public function CountersUDelete($id){
            $this->counterDeleteRecored =  Counter::findOrFail($id);
            $this->name = $this->counterDeleteRecored->name;
            $this->dispatch('deleteModalToggle');
        }

        public function submit(){
            // Save Data
        $this->counterDeleteRecored->delete();
        $this->reset('counterDeleteRecored');
        //Hide Modal
        $this->dispatch('deleteModalToggle');
        //Refresh Page Auto Page From counter Index And Make Listeners
        $this->dispatch('refreshTableCount')->to(CountersTable::class);
    }

 
    public function render()
    {
        return view('dashboard.counters.counters-delete');
    }
}

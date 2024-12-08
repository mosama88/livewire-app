<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersTable extends Component
{
    use  WithPagination;
    public $search;

protected $listeners=['refreshTableCount'=>'refresh'];

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {   

        $query = (new Counter())->query();

        if($this->search){
            $query->where('name','like','%'.$this->search.'%')->orwhere('count','like','%'.$this->search.'%');
        }
        $data = $query->orderBy('id','DESC')->paginate(10);

        return view('dashboard.counters.counters-table',compact('data'));
    }
}

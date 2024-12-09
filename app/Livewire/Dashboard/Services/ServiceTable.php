<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceTable extends Component
{
    use  WithPagination;
    public $search;

protected $listeners=['refreshTableservice'=>'refresh'];

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {   

        $query = (new Service())->query();

        if($this->search){
            $query->where('name','like','%'.$this->search.'%')->orwhere('description','like','%'.$this->search.'%');
        }
        $data = $query->orderBy('id','DESC')->paginate(10);
        return view('dashboard.services.service-table',compact('data'));
    }
}

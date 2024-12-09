<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesTable extends Component
{

    use  WithPagination;
    public $search;

protected $listeners=['refreshTableMessage'=>'refresh'];

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {   

        $query = (new Message())->query();

        if($this->search){
            $query->where('name','like','%'.$this->search.'%')->orwhere('email','like','%'.$this->search.'%')->orwhere('subject','like','%'.$this->search.'%');
        }
        $data = $query->orderBy('id','DESC')->paginate(10);
        return view('dashboard.messages.messages-table',compact('data'));
    }

}

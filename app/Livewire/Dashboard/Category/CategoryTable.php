<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryTable extends Component
{

    use  WithPagination;
    public $search;

protected $listeners=['refreshTableCategory'=>'refresh'];

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {   

        $query = (new Category())->query();

        if($this->search){
            $query->where('name','like','%'.$this->search.'%');
        }
        $data = $query->orderBy('id','DESC')->paginate(10);

        return view('dashboard.category.category-table',compact('data'));
    }

}

<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectTable extends Component
{

    use  WithPagination;
    public $search;

protected $listeners=['refreshTableProject'=>'refresh'];

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {   

        $query = (new Project())->query();

        if($this->search){
            $query->where('name','like','%'.$this->search.'%')->orwhere('description','like','%'.$this->search.'%');
        }
        $data = $query->orderBy('id','DESC')->paginate(10);
        return view('dashboard.projects.project-table',compact('data'));
    }



}

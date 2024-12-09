<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use App\Http\Requests\Dashboard\ProjectRequest;
use App\Livewire\Dashboard\Projects\ProjectTable;

class ProjectCreate extends Component
{

    public $project;
    public $name,$link,$image,$description,$category_id,$categories;


        public function mount(){
            $this->categories = Category::all();
        }


        public function rules(){
        return (new ProjectRequest)->rules();
        }

    public function submit(){
       $dataCreate =  $this->validate();
       Project::create($dataCreate);
       $this->reset(['name','link','image','description','category_id']);
       $this->dispatch('createModalToggle');
       $this->dispatch('refreshTableProject')->to(ProjectTable::class);
    }


    
    public function render()
    {
        return view('dashboard.projects.project-create');
    }
}

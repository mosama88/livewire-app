<?php

namespace App\Livewire\Dashboard\Projects;

use Livewire\Component;

class ProjectShow extends Component
{

    public $name,$link,$image,$description,$category_id;
    
    protected $listeners = ['ServicesShow'];

    public function ServicesShow($id){
       $recored=  Service::findOrFail($id);
       $this->name = $recored->name;
       $this->description = $recored->description;
       $this->icon = $recored->icon;
       $this->dispatch('showModalToggle');
    }
    


    
    public function render()
    {
        return view('dashboard.projects.project-show');
    }
}

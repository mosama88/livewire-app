<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectDelete extends Component
{

    public $ProjectDeleteRecored,$name;
    protected $listeners = ['ProjectDelete'];

    public function ProjectDelete($id){
        $this->ProjectDeleteRecored =  Project::findOrFail($id);
        $this->name = $this->ProjectDeleteRecored->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        // Save Data
    $this->ProjectDeleteRecored->delete();
    $this->reset('ProjectDeleteRecored');
    //Hide Modal
    $this->dispatch('deleteModalToggle');
    //Refresh Page Auto Page From counter Index And Make Listeners
    $this->dispatch('refreshTableProject')->to(ProjectTable::class);
}



    public function render()
    {
        return view('dashboard.projects.project-delete');
    }
}

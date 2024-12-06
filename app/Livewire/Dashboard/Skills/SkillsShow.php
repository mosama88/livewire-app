<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{

     public $name,$progress;
    
    protected $listeners = ['skillShow'];

    public function skillShow($id){
       $recored=  Skill::findOrFail($id);
       $this->name = $recored->name;
       $this->progress = $recored->progress;
       $this->dispatch('showModalToggle');
    }
    

    public function render()
    {
        return view('dashboard.skills.skills-show');
    }
}

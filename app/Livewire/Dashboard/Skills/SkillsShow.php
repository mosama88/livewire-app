<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{

     public $name,$progress;
    
    protected $listeners = ['skillShow'];

    public function skillShow($id){
       $this->skill =  Skill::findOrFail($id);
       $this->name = $this->skill->name;
       $this->progress = $this->skill->progress;
       $this->dispatch('showModalToggle');
        // dd('Done Update Name Is' ." ". $UpdateSkill->name . " Your ID Is " . $UpdateSkill->id);
    }
    

    
    public function submit(){

        //Hide Modal
        $this->dispatch('showModalToggle');
        //Refresh Page Auto Page From Skill Index And Make Listeners
        $this->dispatch('refreshDataSkills')->to(SkillsTable::class);
    }


    public function render()
    {
        return view('dashboard.skills.skills-show');
    }
}

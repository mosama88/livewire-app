<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{

    public $skill,$name,$progress;
    
    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id){
       $this->skill =  Skill::findOrFail($id);
       $this->name = $this->skill->name;
       $this->progress = $this->skill->progress;
       $this->dispatch('editModalToggle');
        // dd('Done Update Name Is' ." ". $UpdateSkill->name . " Your ID Is " . $UpdateSkill->id);
    }
    
    public function render()
    {
        return view('dashboard.skills.skills-update');
    }
}
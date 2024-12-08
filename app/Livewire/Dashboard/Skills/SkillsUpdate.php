<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;
use App\Http\Requests\Dashboard\SkillRequest;

class SkillsUpdate extends Component
{

    public $skill,$name,$progress;
    
    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id){
       $this->skill =  Skill::findOrFail($id);
       $this->name = $this->skill->name;
       $this->progress = $this->skill->progress;
       $this->resetValidation();
       $this->dispatch('editModalToggle');
        // dd('Done Update Name Is' ." ". $UpdateSkill->name . " Your ID Is " . $UpdateSkill->id);
    }
    
    public function rules(){
        //Validations
       return(new SkillRequest())->rules();
    }
    
    public function submit(){
        $data = $this->validate();
        // Save Data
        $this->skill->update($data);
        //reset Data from Form
        $this->reset(['name','progress']);
        //Hide Modal
        $this->dispatch('editModalToggle');
        //Refresh Page Auto Page From Skill Index And Make Listeners
        $this->dispatch('refreshDataSkills')->to(SkillsTable::class);
    }
    
    
    public function render()
    {
        return view('dashboard.skills.skills-update');
    }
}
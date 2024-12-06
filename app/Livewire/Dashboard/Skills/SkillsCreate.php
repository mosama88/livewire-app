<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;
use App\Http\Requests\Dashboard\SkillRequest;

class SkillsCreate extends Component
{
        //Property
    public $name, $progress;


    public function rules(){
        //Validations
       return(new SkillRequest())->rules();
    }
    
    public function submit(){
        $data = $this->validate();
        // Save Data
        Skill::create($data);
        //reset Data from Form
        $this->reset(['name','progress']);
        //Hide Modal
        $this->dispatch('createModalToggle');
        //Refresh Page Auto Page From Skill Index And Make Listeners
        $this->dispatch('refreshDataSkills')->to(SkillsTable::class);

    }
    

    
    public function render()
    {
        return view('dashboard.skills.skills-create');
    }
}
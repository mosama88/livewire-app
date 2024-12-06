<?php

namespace App\Livewire\Dashboard\Skills;

use Livewire\Component;

class SkillsCreate extends Component
{


    public function submit(){
        dd("Done Submitted");
    }
    
    public function render()
    {
        return view('dashboard.skills.skills-create');
    }
}
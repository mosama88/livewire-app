<?php

namespace App\Livewire\Front\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillComponent extends Component
{
    public function render()
    {
        $data = Skill::select("*")->take(3)->get();
        return view('front.components.skill-component',compact('data'));
    }
}
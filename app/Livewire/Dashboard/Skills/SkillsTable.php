<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsTable extends Component
{
    public function render()
    {
                $data= Skill::select("*")->orderBy('id',"DESC")->paginate(1);

        return view('dashboard.skills.skills-table',compact('data'));
    }
}

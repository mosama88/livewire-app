<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{


        public $skillDeleteRecored,$name;
        protected $listeners = ['skillDelete'];

        public function skillDelete($id){
            $this->skillDeleteRecored =  Skill::findOrFail($id);
            $this->name = $this->skillDeleteRecored->name;
            $this->dispatch('deleteModalToggle');
        }

        public function submit(){
            // Save Data
        $this->skillDeleteRecored->delete();
        $this->reset('skillDeleteRecored');
        //Hide Modal
        $this->dispatch('deleteModalToggle');
        //Refresh Page Auto Page From Skill Index And Make Listeners
        $this->dispatch('refreshDataSkills')->to(SkillsTable::class);
    }


    public function render()
    {
        return view('dashboard.skills.skills-delete');
    }
}

<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsTable extends Component
{
    use WithPagination;


    public $search="";
    protected $listeners = ['refreshDataSkills'=>'$refresh'];

  public function updatingSearch()
    {
        $this->resetPage();

    }
    
    public function render()
    {

        $query = Skill::query();

        if($this->search){
            $query->where('name','like', '%' .$this->search. '%');
        }

        $data= $query->orderBy('id',"DESC")->paginate(10);

        return view('dashboard.skills.skills-table',compact('data'));
    }
}
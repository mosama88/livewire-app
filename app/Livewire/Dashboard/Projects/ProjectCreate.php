<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Http\Requests\Dashboard\ProjectRequest;
use App\Livewire\Dashboard\Projects\ProjectTable;
use Illuminate\Support\Facades\Storage;

class ProjectCreate extends Component
{

    use WithFileUploads;
    public $project;
    public $name,$link,$image,$description,$category_id,$categories;


        public function mount(){
            $this->categories = Category::all();
        }


        public function rules(){
        return (new ProjectRequest)->rules();
        }

        public function attributes(){
            return (new ProjectRequest)->attributes();
            }

       

    public function submit(){
       $dataCreate =  $this->validate($this->rules(),[],$this->attributes());

       //save Image 
        $imageName=time().'.'. $this->image->getClientOriginalExtension();
        $this->image->storeAs('images',$imageName,'public');
        $dataCreate['image'] = 'storage/images/'. $imageName;
       Project::create($dataCreate);
       $this->reset(['name','link','image','description','category_id']);
       $this->dispatch('createModalToggle');
       $this->dispatch('refreshTableProject')->to(ProjectTable::class);
    }


    
    public function render()
    {
        return view('dashboard.projects.project-create');
    }
}
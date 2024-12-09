<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Http\Requests\Dashboard\ProjectRequest;

class ProjectUpdate extends Component
{

    use WithFileUploads;

    public $updateData;
    public $name,$link,$image,$description,$category_id,$categories;
    protected $listeners = ['ProjectUpdate'] ;

    public function ProjectUpdate($id){
        
        $this->updateData = Project::findOrFail($id);
        $this->name = $this->updateData->name;
        $this->description = $this->updateData->description;
        $this->link = $this->updateData->link;
        $this->category_id = $this->updateData->category_id;
        $this->resetValidation();
        $this->dispatch('editModalToggle');

     }


     public function mount(){
        $this->categories = Category::all();
    }

     public function rules(){
        return (new ProjectRequest())->rules();
     }

    public function submit(){
        $data = $this->validate($this->rules(),[],$this->attributes()); 
        if($this->image){
            unlink($this->updateData->image);

             //save Image 
        $imageName=time().'.'. $this->image->getClientOriginalExtension();
        $this->image->storeAs('images',$imageName,'public');
        $data['image'] = 'storage/images/'. $imageName;
        }
        $this->updateData-> update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshTableProject')->to(ProjectTable::class);
    }

    
    public function render()
    {
        return view('dashboard.projects.project-update');
    }
}
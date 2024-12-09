<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use App\Http\Requests\Dashboard\CategoryRequest;
use App\Livewire\Dashboard\Category\CategoryTable;

class CategoryUpdate extends Component
{

    public $updateData;
    public $name;
    protected $listeners = ['CategorUpdate'] ;

    public function CategorUpdate($id){
    $this->updateData = Category::findOrFail($id);
    $this->name = $this->updateData->name;
    $this->resetValidation();
    $this->dispatch('editModalToggle');

     }

     public function rules(){
        return (new CategoryRequest())->rules();
     }

    public function submit(){
        $data = $this->validate();
        $this->updateData-> update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshTableCategory')->to(CategoryTable::class);
    }


    public function render()
    {
        return view('dashboard.category.category-update');
    }
}

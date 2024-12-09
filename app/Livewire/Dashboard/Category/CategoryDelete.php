<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use App\Livewire\Dashboard\Category\CategoryTable;

class CategoryDelete extends Component
{

    public $categoryDeleteRecored,$name;
    protected $listeners = ['CategorDelete'];

    public function CategorDelete($id){
        $this->categoryDeleteRecored =  Category::findOrFail($id);
        $this->name = $this->categoryDeleteRecored->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        // Save Data
    $this->categoryDeleteRecored->delete();
    $this->reset('categoryDeleteRecored');
    //Hide Modal
    $this->dispatch('deleteModalToggle');
    //Refresh Page Auto Page From category Index And Make Listeners
    $this->dispatch('refreshTableCategory')->to(CategoryTable::class);
}



    public function render()
    {
        return view('dashboard.category.category-delete');
    }
}

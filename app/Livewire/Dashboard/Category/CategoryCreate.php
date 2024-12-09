<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use App\Http\Requests\Dashboard\CategoryRequest;
use App\Livewire\Dashboard\Category\CategoryTable;

class CategoryCreate extends Component
{
    public $category;
    public $name;

        public function rules(){
        return (new CategoryRequest)->rules();
        }
    public function submit(){
       $dataCreate =  $this->validate();
       Category::create($dataCreate);
       $this->reset(['name']);
       $this->dispatch('createModalToggle');
       $this->dispatch('refreshTableCategory')->to(CategoryTable::class);
    }


    public function render()
    {
        return view('dashboard.category.category-create');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategoryComp extends Component
{
    use WithPagination;
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Kategori başarıyla silindi!');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-comp',['categories'=>$categories])->layout('layouts.master');
    }
}

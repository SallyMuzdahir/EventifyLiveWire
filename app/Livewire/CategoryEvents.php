<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;

#[Title('Events Category')]

class CategoryEvents extends Component
{
    use WithPagination;
    public $category;
    public $categoryId;

    public function  mount($categoryId){
        $this->categoryId =$categoryId;
        $this->category=Category::findOrFail($categoryId);

    }
    public function render()
    {
        $products= Product::where('category_id',$this->categoryId)->with('category')->paginate(5);
        return view('livewire.category-events',[
            'products'=>$products,
            'category'=>$this->category
        ]);
    }
}

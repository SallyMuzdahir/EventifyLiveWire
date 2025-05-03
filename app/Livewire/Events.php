<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
#[Title('Events')]
class Events extends Component
{
    use WithPagination; 
    public $categoryId;

    public function mount(Request $request){
        $this->CategotyId=$request->query('category');

    }
    public function render()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        $query = Product::with(['category', 'country'])->orderBy('id', 'desc');

        if ($this->categoryId) {
            $query->where('category_id', $this->categoryId);
        }

        $products = $query->paginate(6);
        return view('livewire.events', compact('categories', 'products'));
    }
}

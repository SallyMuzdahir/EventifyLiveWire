<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Category;
use App\Models\Product;
use App\Models\Country;

#[Title('Home')]
class Home extends Component
{
    public $title="s";
    public function render()
    {

        $categories= Category::orderBy('id','desc')->limit(6)->get();
        $products=Product::with(['category','country'])->orderBy('id','desc')->limit(6)->get();;
        $countries= Country::all();

        return view('livewire.home',compact('categories','products','countries'));
    }
}

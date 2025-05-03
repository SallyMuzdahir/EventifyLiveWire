<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Title;
#[Title('Event')]
class Event extends Component
{
    public $product;

    public function mount($id){
        $this->product=Product::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.event');
    }
}

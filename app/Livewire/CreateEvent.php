<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
#[Title('Create A new Event')]
class CreateEvent extends Component
{
    use WithFileUploads;
    #[Rule('required|string|min:4')]
    public $title;
   
    #[Rule('required|string')]
    public $description='';

    #[Rule('required|date')]
    public $event_date_from='';

    #[Rule('required|date')]
    public $event_date_to='';

    #[Rule('required|date_format:H:i')]
    public $time_from='';


    #[Rule('nullable|date_format:H:i')]
    public $time_to='';

    #[Rule('required|numeric')]
    public $price='';

    #[Rule('required|exists:categories,id')]
    public $category_id='';

    #[Rule('required|exists:countries,id')]
    public $country_id='';

    #[Rule('required|image|mimes:jpeg,png,jpg|max:2048')]
    public $photo='';

    public $categories = [];
    public $countries = [];

    public function mount()
    {
        $this->categories = Category::orderBy('id', 'desc')->get();
        $this->countries = Country::orderBy('id', 'desc')->get();
    }

    public function save(){      
          $this->validate();
          $filename=$this->photo->store('images','public');
          Product::create([
             'title' => $this->title,
            'description' => $this->description,
            'event_date_from' => $this->event_date_from,
            'event_date_to' => $this->event_date_to,
            'time_from' => $this->time_from,
            'time_to' => $this->time_to,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'country_id' => $this->country_id,
            'photo' => $filename,
          ]);
        return redirect()->route('create_event')->with('success', 'Product created successfully!');
    }

    public function render()
    {
        return view('livewire.create-event');
    }
}

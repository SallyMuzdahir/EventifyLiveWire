<?php

namespace App\Livewire;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Country;
use App\Models\Product;

#[Title('Search')]
class Search extends Component
{
    public $search='';
    public $country = '';
    protected $queryString = ['search', 'country'];

    public function render()
    {
       $products = Product::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->when($this->country, function ($query) {
                $query->whereHas('country', function ($query) {
                    $query->where('id', $this->country);
                });
            })
            ->paginate(6);

        $countryName = 'Unknown';
        if ($this->country && $this->country != '0') {
            $country = Country::find($this->country);
            $countryName = $country ? $country->name : 'Unknown';
        }

        return view('livewire.search', [
            'products' => $products,
            'countryName' => $countryName,
        ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCountry()
    {
        $this->resetPage();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Category::orderBy('id','desc')->get();
        $countries=country::orderBy('id','desc')->get();
        return view('products.create',compact('categories','countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date_from' => 'required|date',
            'event_date_to' => 'required|date',
            'time_from' => 'required|date_format:H:i',
            'time_to' => 'nullable|date_format:H:i',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'country_id' => 'required|exists:countries,id',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $validated['photo'] =  $filename;
        }
        Product::create($validated);
    
        return redirect()->route('create_product')->with('success', 'Product created successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getProductsInCategory($categoryId)
    {
        $category = Category::find($categoryId);
        $products = Product::where('category_id', $categoryId)->with('category')->paginate(5);
        return view('products.category', compact('products', 'category'));
    }
    public function search(Request $request){
        // dd($_GET);
        $search = $request->input('search');
        $countryId = $request->input('country');
        $countryName = null;
        $countryName = 'Unknown';
        if ($countryId && $countryId != '0') {
            $country = \App\Models\Country::find($countryId);
            $countryName = $country ? $country->name : 'Unknown';
        }
        $products = Product::query()
    ->when($search, function ($query) use ($search) {
        $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%');
    })
    ->when($countryId, function ($query) use ($countryId) {
        $query->whereHas('country', function ($query) use ($countryId) {
            $query->where('id', $countryId);  
        });
    })
    ->paginate(6);;
        return view('products.search', compact('products', 'search', 'countryName'));
    }
}

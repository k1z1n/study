<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $products)
    {
        Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
//        Category $categories
//        Category::all();
//        compact('categories')
        return view('product.create',);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:100',
            'price' => 'required|min:2|max:10'
        ]);

        Product::created($validatedData);

        return redirect()->route('product.index')->with('success', 'норм все');
    }

    public function show(Product $product)
    {
        re
    }
}

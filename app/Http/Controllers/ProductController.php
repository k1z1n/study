<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.edit', compact('categories', 'product'));
    }
    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'title' => 'required|min:2|unique:products,title',
            'price' => 'required|min:2|numeric',
            'category_id' => 'required'
        ]);

        $validatedDate['slug'] = Str::slug($validatedDate['title']);
        Product::create($validatedDate);

        return redirect()->route('product.create')->with('success', 'товар успешно добавлен');
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'price' => 'required|min:2|numeric',
            'category_id' => 'required'
        ]);

        $product->update($validatedData);

        return redirect()->route('product.index')->with('success', 'товар обновлен');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete($id);

        return redirect()->route('product.index')->with('success', 'товар успешно удален');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a list of products
    public function index()
    {
        $title = 'Gopal Agri Export – Products';
        $products = Product::paginate(9); // Use pagination to get 9 products per page
        return view('shop', compact('products'));
    }


    // Display a specific product
    public function show($id)
    {
        $title = 'Gopal Agri Export – Products';
        $product = Product::findOrFail($id)->toArray();
        // dd($product);
        return view('shop-single', compact('product',   'title'));
    }

    // Show the form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index');
    }

    // Show the form to edit an existing product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update an existing product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', '%' . $query . '%')
            ->orderBy('name', 'asc')
            ->get();
        // dd($products);
        return view('search', compact('products' , 'query'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Gopal Agri Export – Home';
        $latestProducts = Product::orderBy('created_at', 'desc')->take(9)->get();

        // Pass the products to the view
        return view('index', compact('latestProducts' , 'title'));
    }
}

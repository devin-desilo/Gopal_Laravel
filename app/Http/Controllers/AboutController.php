<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Gopal Agri Export – About';
        return view('about' , compact('title'));
    }
}

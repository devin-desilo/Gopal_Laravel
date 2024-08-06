<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'Gopal Agri Export – Contact';
        return view('contact', compact('title'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'nullable|string',
            'service' => 'required|string',
            'note' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'address', 'service', 'note');
        // kevindholariya7830@gmail.com
        Mail::to('devinpatel2708@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

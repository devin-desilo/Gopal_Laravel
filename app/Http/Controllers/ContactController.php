<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('contact'); // This refers to the resources/views/contact.blade.php file
    }

    /**
     * Handle the form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'note' => 'required|string',
        ]);

        // Collect the form data
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'note' => $request->input('note'),
        ];

        // Send the email
        Mail::to('devinpatel2708@gmail.com')->send(new ContactFormMail($details));

        // Redirect back with a success message
        return redirect()->route('contact.show')->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    /**
     * Optional: Handle form submission (if using a different method for a specific route).
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        // Similar to the submit method, you can handle form data and email sending here
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'note' => 'required|string',
        ]);

        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'note' => $request->input('note'),
        ];

        Mail::to('recipient@example.com')->send(new ContactFormMail($details));

        return redirect()->route('contact.show')->with('success', 'Your message has been sent!');
    }
}

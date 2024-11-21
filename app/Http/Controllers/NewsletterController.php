<?php
namespace App\Http\Controllers;

use App\Models\NewsletterEmail; // Add this if you're saving the email to the database
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send a confirmation email
        Mail::send('emails.newsletter', ['email' => $request->email], function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Thank you for subscribing!');
        });

        // Optionally, save to the database if you want
        // NewsletterEmail::create(['email' => $request->email]);

        // Return a success message as JSON response for AJAX
        return response()->json([
            'message' => 'Thank you for subscribing to our newsletter!'
        ]);
    }
}

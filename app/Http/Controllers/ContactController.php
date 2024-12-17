<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Show the contact form
    public function show()
    {
        return view('contact.contact');
    }

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Optional: Send an email (uncomment if using email functionality)
        // Mail::to('admin@example.com')->send(new ContactMail($request->all()));

        // Redirect back with a success message
        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}

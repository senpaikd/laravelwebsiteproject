<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    public function show()
    {
        return view('user.contact.contact');  
    }


    public function submit(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);



        return redirect()->route('user.contact.show')->with('success', 'Message sent successfully!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    // Show the "About Us" edit page
    public function edit()
    {
        $aboutUs = AboutUs::first(); // Retrieve the first record or create a new one if empty
        if (!$aboutUs) {
            $aboutUs = new AboutUs();
            $aboutUs->content = ''; // Default empty content if no record exists
        }
        return view('admin.about.edit', compact('aboutUs'));
    }

    // Update the "About Us" content
    public function update(Request $request)
    {
        // Validate content
        $request->validate([
            'content' => 'required|string',
        ]);

        // Retrieve the first record or create a new one
        $aboutUs = AboutUs::first();
        if (!$aboutUs) {
            $aboutUs = new AboutUs();
        }

        // Update the content
        $aboutUs->content = $request->content;
        $aboutUs->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'About Us content updated successfully!');
    }
}

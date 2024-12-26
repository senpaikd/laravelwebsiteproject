<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Return the admin dashboard view
        return view('admin.dashboard');  // Make sure to create this view
    }
}

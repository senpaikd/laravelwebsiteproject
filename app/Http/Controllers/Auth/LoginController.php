<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 

class LoginController extends Controller
{
    use AuthenticatesUsers;  

    /**
     * 
     *
     * @return 
     */
    protected function redirectTo()
    {

        if (Auth::user()->is_admin) {
            return route('admin.dashboard'); 
        }


        return route('user.dashboard'); 
    }

    /**
     * 
     *
     * @param  
     * @return 
     */
    public function logout(Request $request)
    {
        $this->guard()->logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/login'); 
    }
}

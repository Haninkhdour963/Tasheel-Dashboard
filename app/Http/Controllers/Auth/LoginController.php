<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function authenticated()
    {
        // Check the role of the authenticated user and redirect accordingly
        if (Auth::user()->role_as == '1') { // 1 = Admin
            return redirect('admin/dashboard')->with('status', 'Welcome to Admin Dashboard');
        } elseif (Auth::user()->role_as == '2') { // 2 = Technician
            return redirect('technician/dashboard')->with('status', 'Welcome to Technician Dashboard');
        } elseif (Auth::user()->role_as == '0') { // 0 = Client
            return redirect('/home')->with('status', 'Logged in Successfully');
        } else {
            // Default redirection for undefined roles
            return redirect('/')->with('error', 'Role not recognized');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}

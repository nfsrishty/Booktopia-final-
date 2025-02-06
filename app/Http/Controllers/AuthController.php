<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // Ensure resources/views/auth/login.blade.php exists
    }

    // Handle login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/dashboard'); // Change to your home/dashboard route
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Logout function
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

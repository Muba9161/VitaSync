<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        Auth::logout();
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Ensure the user is logged out before logging in again
        Auth::logout();

        // Validate email and password
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Regenerate the session ID to prevent session fixation
            $request->session()->regenerate();

            session()->flash('status', 'success');

            // Redirect to dashboard or desired location
            return redirect()->route('frontend.index');
        }

        // If login fails, throw a validation exception
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }



    public function destroy(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect the user to the login page or home page
        return redirect()->route('login'); // Or redirect to a page you prefer
    }
}

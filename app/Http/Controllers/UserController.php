<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Ensure Auth is imported
use App\Models\User; // Import User model for registration

class UserController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'Username' => 'required|string',
            'Password' => 'required|string',
        ]);

        // Login credentials
        $credentials = [
            'Username' => $request->Username, // Match field name with database
            'Password' => $request->Password,
        ];

        $user = User::where('Username', $request->Username)->first();

        if ($user && Hash::check($request->Password, $user->Password)) {
            // Simpan Username di session
            Auth::login($user);
            logger('Login successful for user: ' . $request->Username);

            session(['Username' => $request->Username]);
        }else {
            logger('Login failed for Username: ' . $request->Username);
            return back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    public function logout(Request $request) {
        Auth::logout(); // Logout pengguna

        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/');
    }

    public function registerForm()
    {
        return view('register');
    }

    public function signupForm(){
        return view('signup');
    }
    
    public function IGIForm(){
        return view('item-gi');
    }

    public function signup(Request $request)
    {
        // Validate input
        $simanjuntak = $request->validate([
            'username' => 'required|unique:users', // Ensure Username is unique
            'password' => 'required', // Add minimum Password length
            'nomor'    => 'required', // Corrected field name
        ]);

        // Create new user
        $user = User::create([
            'Username' => $request->username,
            'Password' => Hash::make($request->password), // Hash Password
            'No_HP'    => $request->nomor, // Save phone number
        ]);

        // Log in the user after registration
        Auth::login($user);

        return redirect()->route('homepage'); // Redirect on successful registration
    }
}

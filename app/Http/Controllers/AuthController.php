<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Hardcoded credentials (for demonstration)
    private $users = [
        'email' => 'admin@example.com',
        'password' => 'password123'
    ];

    public function login(Request $req)
    {

        try {
            $req->validate([
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }

        $email = $req->input('email');
        $password = $req->input('password');

         // Validate credentials
         if ($email === $this->users['email'] && $password === $this->users['password']) {
            // Store session data
            Session::put('user_id', 1);
            Session::put('email', $email);

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'redirect' => route('dashboard')
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid email or password'
            ]);
        }
    }

     // Logout function
    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}

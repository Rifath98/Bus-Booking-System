<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Register Function
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        return $user->createToken('registertoken')-> plainTextToken;
    }
    // Login Function
    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // To Check Email
        $user = User::where('email', $fields['email']) ->first();

        // To check Password
        if (! $user || ! Hash::check($fields['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('registertoken')-> plainTextToken;
    }
    // Logout Function
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'User Logged Out'
        ];
    }

}

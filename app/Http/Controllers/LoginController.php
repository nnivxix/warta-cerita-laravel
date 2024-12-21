<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            return response()->json([
                'message' => 'Login successful',
                'user'    => $request->user(),
                'token'   => $request->user()->createToken('token')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'message' => 'Email or password is incorrect',
            ], 401);
        }
    }
}

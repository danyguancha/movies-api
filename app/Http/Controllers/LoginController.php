<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('token-name')->plainTextToken;

            return response()->json(['token' => $token,
            'message' => 'Login successful'], 200);
        }

        return response()->json(['error' => 'Unauthorized'],401);
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return back();
    }

    public function index()
    {
        return view('login');
    }

}

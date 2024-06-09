<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\Admin\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())){
            $request->session()->regenerate();

            return redirect()->intended();
        }
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrecte.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }

}

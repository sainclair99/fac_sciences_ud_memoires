<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create(array_merge($request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'password' => ['required','string','min:8', 'confirmed'],
        ]),['password'=>Hash::make($request->password)]));
        $user->save();
        // $this->sendEmailVerificationCode($request);
        $token = $user->createToken('ud_facsciences_thesis_management')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token'=> $token,
        ], 201);
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => ['required','string', 'email','max:255'],
            'password' => ['required','string','min:8'],
        ]);
        $user = User::where('email', $validateData['email'])->first();
        if ($user && password_verify($validateData['password'], $user->password)) {
            Auth::login($user);
            $token = $user->createToken('ud_facsciences_thesis_management')->plainTextToken;
            return response()->json([
                'user' => $user,
                'token'=> $token,
            ], 200);
        }
        response()->json([
            'status_code' => 422,
            'messages' => 'Invalid Informations'
        ], 422);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(string $id)
    {
        //
    }
}

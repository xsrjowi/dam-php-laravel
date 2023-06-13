<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $email = request('email');
        $password = request('password');
        $usuario = User::where('email', $email)->first();
        if ($usuario && $password === $usuario->password) { // check if $usuario is not null
            $token = $usuario->createToken('token')->plainTextToken;
            return response()->json([
                'message' => 'Logeado',
                'token' => $token,
            ]);
        } else {
            return response()->json([
                'message' => 'error',
            ], 400);
        }
    }
}

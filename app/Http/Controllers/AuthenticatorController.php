<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticatorController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $user->roles()->attach($request->roles);

        return response()->json([
            'res' => true,
            'message' => 'Usuario creado correctamente.',
            'data' => $user
        ], 201);
    }

    public function login(LoginRequest $request) 
    {
        $user = User::where('email', $request->email)->first();
 
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'error' => ['Las credenciales son incorrectas.'],
            ]);
        }
 
        $token = $user->createToken($request->email)->plainTextToken;

        // return response()->json([
        //     'res' => true,
        //     'data' => [
        //         'user' => $user,
        //         'token' => $token,
        //     ]
        // ], 200);

        return (new LoginResource($user))->additional([
            'token' => $token,
        ], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        
        return response()->json([
            'res' => true,
            'message' => 'Token eliminado correctamente.'
        ], 200);
    }
}

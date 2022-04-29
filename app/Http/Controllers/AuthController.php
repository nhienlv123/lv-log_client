<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function check(Request $request)
    {
        $isLoged = Auth::check();
        $user = Auth::user();
        return response()->json([
            'user' => $user,
            'isLoged' => $isLoged,
        ]);
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized'
                ]);
            }

            $user = User::where('email', $request->email)->first();

            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }
            $isLoged = Auth::check();
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([ 
                'user' => $user,
                'isLoged' => $isLoged,
                // 'status_code' => 200,
                // 'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'isLogout' => true,
            'message' => 'Success Logout',
        ]);
    }

    public function register(Request $request)
    {
        $user =new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => '1',
        ]);
        $user->save();
        return response()->json('Success Regist');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AuthCollection;
use App\Models\User;

class AuthController extends Controller
{
    public function signUp(Request $request) {
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $user->save();
        return response()->json('successfully sign up');
    }

    public function signIn(Request $request) {
        $user = User::where('email', $request->email)->first();
        if ($user->password == $request->password) {
            return response()->json($user);
        }
        else {
            return response()->json('sign in fail');
        }
    }
}
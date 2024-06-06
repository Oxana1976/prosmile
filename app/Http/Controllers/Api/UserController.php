<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function createToken()
    {
        $users = User::all();

        return view(
            'api.create_token',
            [
                'users' => $users
            ]
        );
    }

    public function storeToken(int $userId)
    {
        $user = User::query()->findOrFail($userId);

        if($user->role->role !== \App\Models\Role::PATIENT)
        {
            $token = $user->createToken('API_TOKEN_PERSONNAL_CHIEF')->plainTextToken;

            return response()->json(['token' => $token]);
        }
        else
        {
            abort(403);
        }
    }
}

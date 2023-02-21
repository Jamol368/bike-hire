<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(UserLoginRequest $request)
    {
        try {
            if ($request->validated() && Auth::attempt($request->only(['email', 'password']))) {
                $user = User::where('email', $request->email)->firstOrFail();
                auth()->user()->tokens()->delete();
                return response()->json(['access token' => $user->createToken($user->name)->plainTextToken]);
                // 2|WBfKXNMAtFQ6JfoPbKDSj1OyYrSXxLx7d4YqG4qw
            }
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     */
    public function register(UserRequest $request)
    {
        try {
            $request->password = Hash::make($request->password);
            $model = new User();
            $status = $model->fill($request->validated())->save();
            if ($status) {
                return response()->json($model->createToken($model->name)->plainTextToken);
            }
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }

    public function refresh(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json(['token' => $user->createToken($user->name)->plainTextToken]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthPostRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /**
     * Mobile Client: Register New
     *
     * @param AuthPostRequest $request
     * @return JsonResponse
     */
    public function register(AuthPostRequest $request): JsonResponse
    {
        // Get the validated data by AuthPostRequest
        $data = $request->validated();

        // Hash the given password
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->createToken('authToken')->accessToken;
        return response()->json(['success' => 'User created with success.']);
    }


    /**
     * Mobile Client: Login
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $rules = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($rules)) {
            return abort(401);
        }

        return response()->json(['success' => [
            'token' => auth()->user()?->createToken('authToken')->accessToken,
            'user' => auth()->user()
        ]])->setStatusCode(200);
    }

    /**
     * Mobile Client: Who am I
     *
     * @param Request $request
     * @return User|mixed
     * @noinspection SpellCheckingInspection
     */
    public function whoami(Request $request)
    {
        return $request->user();
    }
}

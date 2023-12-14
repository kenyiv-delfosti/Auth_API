<?php

namespace App\Http\Controllers;

use App\Http\Requests\RenewPasswordRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\RenewPasswordResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        return new UserResource($user);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json(['message' => 'Usuario ' . $user->id . ' eliminado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se pudo eliminar el usuario ' . $user->id . ' '], 500);
        }
    }

    public function getAllUsers()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function getSoftDeletedUsers()
    {
        $softDeletedUsers = User::onlyTrashed()->get();
        return UserResource::collection($softDeletedUsers);
    }

    public function renewPassword(RenewPasswordRequest $request)
    {
        $user = $request->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'message' => 'Invalid current password'
            ], 422);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
            'password_renew' => false
        ]);



        return new RenewPasswordResource($user);
    }
}

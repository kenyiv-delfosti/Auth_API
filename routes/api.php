<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('auth/logout', [AuthController::class, 'logout']);
    Route::post('auth/refresh', [AuthController::class, 'refresh']);
    Route::post('password/renew', [UserController::class, 'renewPassword']);
    Route::post('user', [UserController::class, 'getAuthenticatedUser']);
});

Route::middleware(['api', 'jwt.verify'])->group(function () {
    Route::get('/v1/users/{user}', [UserController::class, 'show']);
    Route::post('/v1/users', [UserController::class, 'store']);
    Route::put('/v1/users/{user}', [UserController::class, 'update']);
    Route::delete('/v1/users/{user}', [UserController::class, 'destroy']);
    Route::get('/v1/users', [UserController::class, 'getAllUsers']);
    Route::get('/v1/users/soft-deleted', [UserController::class, 'getSoftDeletedUsers']);
});

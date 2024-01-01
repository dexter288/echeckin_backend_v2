<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});

Route::post('/login', [App\Http\Controllers\LoginController::class, 'apiLogin']);

Route::prefix('v1')->group(function () {
    Route::post('/register', [App\Http\Controllers\RegisterController::class, 'apiStore']);
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'apiLogin']);
    Route::post('/reset-password', [App\Http\Controllers\LoginController::class, 'ResetPassword']);
    Route::post('/verify-otp', [App\Http\Controllers\LoginController::class, 'VerifyOtp']);
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'apiLogout']);
    Route::post('/checkin/post', [CheckinController::class,'apiCheckin'])->middleware('auth:sanctum');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return response()->json([
        'message' => 'Laravel Api is running',
        'version' => app()->version()
    ]);
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })
        ->name('user');

    Route::delete('/logout', LogoutController::class)->name('logout');
});

Route::middleware('guest:sanctum')->group(function () {
    Route::post('/login', LoginController::class)->name('login');
});

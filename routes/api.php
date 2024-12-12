<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'data' => 'I am user'
    ]);
});



Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});

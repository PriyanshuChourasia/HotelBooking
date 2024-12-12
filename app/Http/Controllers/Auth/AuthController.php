<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {}



    public function login(LoginRequest $loginRequest)
    {
        dd($loginRequest->validated());
    }
}

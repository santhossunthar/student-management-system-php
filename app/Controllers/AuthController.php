<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login(): string
    {
        return view('home');
    }

    public function register(): string
    {
        return view('register');
    }
}

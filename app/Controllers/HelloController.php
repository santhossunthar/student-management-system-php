<?php

namespace App\Controllers;

class HelloController extends BaseController
{
    public function index(): string
    {
        return "Hello";
    }

    public function test($user): string
    {
        return $user;
    }
}
<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }
    public function forgotPassword()
    {
        return view('auth/forgotPassword');
    }
}

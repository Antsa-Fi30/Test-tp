<?php

namespace App\Controllers;

use App\Models\AuthModel;

class RoutesController extends BaseController
{
    public function home(): string
    {
        return view('Home');
    }

    public function login(): string
    {
        return view('auth/login');
    }
    public function signin(): string
    {
        return view('auth/signin');
    }
}

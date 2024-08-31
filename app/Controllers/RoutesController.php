<?php

namespace App\Controllers;


class RoutesController extends BaseController
{

    public function login()
    {
        return view('user/Login');
    }

    public function signin()
    {
        return view('user/Signin');
    }

    public function home(): string
    {
        return view('Home');
    }
}

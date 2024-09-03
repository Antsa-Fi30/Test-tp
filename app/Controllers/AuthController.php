<?php

namespace App\Controllers;

use App\Models\AuthModel;

class UserController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function login() {}

    public function registre() {}
}

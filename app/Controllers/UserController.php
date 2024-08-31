<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function login()
    {
        return view('user/Login');
    }

    public function index(): string
    {
        $data['user'] = $this->model->findAll();
        return view('list', $data);
    }

    public function createUser() {}

    public function updateUser() {}
    public function deleteUser() {}

    public function home(): string
    {
        return view('Home');
    }
}

<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\HTTP\RedirectResponse;

class AuthController extends BaseController
{

    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function login(): string
    {
        return view('auth/login');
    }

    public function signin(): string
    {
        return view('auth/signin');
    }

    public function save(): RedirectResponse
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT); //Permet de securiser en tournant le mot de passe en non lisible
        $userType = $this->request->getPost('usertype');

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'user_type' => $userType
        ];


        if ($this->model->insert($data)) {
            //Permet d'afficher une signe de succes dans la page login pour montrer que le compte est enregistré
            session()->setFlashdata('success', 'Signed successfully');
            return redirect()->to('/login');
        } else {
            session()->setFlashdata('error', 'Something went wrong when saving your account');
            return redirect()->back();
        }
    }

    public function auth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user_exist = $this->model->where('email', $email)->first(); //Search the user account in table users by mail;

        if ($user_exist && password_verify($password, $user_exist['password'])) {
            session()->set([
                'id' => $user_exist['id'],
                'username' => $user_exist['username'],
                'user_type' => $user_exist['user_type'],
                'Logged' => true,
            ]);

            return redirect()->to('/');
        } else {
            session()->setFlashdata('error', 'Invalid login credentials');
            return redirect()->to('/login');
        }
    }

    public function indexWelcome()
    {
        return view('templates/welcome');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

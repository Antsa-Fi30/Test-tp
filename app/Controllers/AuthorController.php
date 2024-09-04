<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthorModel;

class AuthorController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthorModel();
    }

    public function index(): string
    {
        $data['authors'] = $this->model->findAll();

        return view('/authors/index', $data);
    }

    public function create(): string
    {
        return view('/authors/create');
    }

    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
        ];

        $this->model->save($data);

        return redirect()->to('/authors');
    }

    public function edit($id)
    {
        $data['author'] = $this->model->find($id);
        return view('authors/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'name' => $this->request->getPost('name'),
        ];

        $this->model->update($id, $data);

        return redirect()->to('/authors');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/authors');
    }
}

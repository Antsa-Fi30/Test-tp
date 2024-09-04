<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class BookController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new BookModel();
    }

    public function index(): string
    {
        $data['books'] = $this->model->findAll();

        return view('/books/index', $data);
    }

    public function create(): string
    {
        return view('/books/create');
    }

    public function store()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'authors_id' => $this->request->getPost('authors_id'),
            'stocked_date' => $this->request->getPost('stocked_date'),
        ];

        $this->model->save($data);

        return redirect()->to('/books');
    }

    public function edit($id)
    {
        $data['book'] = $this->model->find($id);
        return view('books/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'authors_id' => $this->request->getPost('authors_id'),
            'stocked_date' => $this->request->getPost('stocked_date'),
        ];

        $this->model->save($id, $data);

        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/books');
    }
}

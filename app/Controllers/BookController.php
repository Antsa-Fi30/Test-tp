<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BookController extends BaseController
{

    public function index(): string
    {
        return view('/books/Books');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;

class CartController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new CartModel();
    }

    public function index(): string
    {
        $data['carts'] = $this->model->findAll();
        return view('/cart/index', $data);
    }

    public function add() {}
}

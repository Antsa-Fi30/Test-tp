<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CartController extends BaseController
{
    public function index(): string
    {
        return view('/cart/Carts');
    }
}

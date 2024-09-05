<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primarykey = 'id';
    protected $allowedFields = ['books_id', 'client', 'borrowed_at', 'return_at'];

    public function addBookToCart($bookId, $client)
    {
        $data = [
            'books_id' => $bookId,
            'client' => $client,
            'borrowed_at' => date('Y-m-d H:i:s'),
        ];

        $this->save($data);

        $bookModel = new BookModel();
        $bookModel->update($bookId, ['disponibility' => 0]); //Disponibilte dynamique
    }
}

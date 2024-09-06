<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowModel extends Model
{
    protected $table = 'borrows';
    protected $primarykey = 'id';
    protected $allowedFields = ['book_id', 'user_id', 'borrowed_at', 'return_at'];
    protected $useTimestamps = false;

    /**
     * Requete de jointure SQL Entre 3 entites dont users,books,borrows
     * On peut tirer le titre du livre a partir de son id 
     * Pareil pour, user , user.id -> username
     */
    public function getBooks()
    {
        return $this->select('borrows.id, borrows.user_id, borrows.book_id, borrows.borrowed_at, borrows.return_at, books.title AS book_title, users.username AS user_name')
            ->join('books', 'borrows.book_id = books.id')
            ->join('users', 'borrows.user_id = users.id')
            ->findAll();
    }
}

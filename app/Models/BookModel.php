<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primarykey = 'id';
    protected $allowedFields = ['title', 'authors_id', 'stocked_date', 'dispo'];
    protected $useTimestamps = false;

    public function getAuthor()
    {
        return $this->select('books.id,books.title,authors.name AS author_name, books.stocked_date,books.dispo')
            ->join('authors', 'books.authors_id = authors.id')
            ->findAll();
    }
}

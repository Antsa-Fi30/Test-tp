<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primarykey = 'id';
    protected $allowedFields = ['title', 'authors_id', 'stocked_date'];
    protected $useTimestamps = false;
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowModel extends Model
{
    protected $table = 'borrows';
    protected $primarykey = 'id';
    protected $allowedFields = ['author_id', 'user_id', 'borrowed_at', 'returned_at'];
    protected $useTimestamps = false;
}

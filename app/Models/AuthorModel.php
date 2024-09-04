<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table = 'authors';
    protected $primarykey = 'id';
    protected $allowedFields = ['name'];
    protected $useTimestamps = false;
}

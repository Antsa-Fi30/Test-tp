<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $allowedFields = ['username', 'email', 'user_type', 'password'];
    protected $useTimestamps = true;
}

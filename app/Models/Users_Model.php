<?php namespace App\Models;

use CodeIgniter\Model;


class Users_Model extends Model
{
    protected $table = 'Users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'email', 'password'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;


class Company extends Model
{

    protected $table = 'companies';

    protected $allowedFields = [
        'users_id',
        'name',
        'number'
    ];
}

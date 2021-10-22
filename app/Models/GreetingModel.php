<?php

namespace App\Models;

use CodeIgniter\Model;

class GreetingModel extends Model
{
    protected $table      = 'sambutan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['content','tautan_youtube','updated_at'];
}

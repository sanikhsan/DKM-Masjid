<?php

namespace App\Models;

use CodeIgniter\Model;

class JumatModel extends Model
{
    protected $table      = 'jumat';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['tanggal', 'imam', 'khatib', 'muadzin', 'bilal','updated_at'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table      = 'pengaturan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nama_web',
        'deskripsi_web',
        'keyword_web',
        'email',
        'telepon',
        'alamat',
        'twitter',
        'facebook',
        'youtube',
        'linkedin',
        'instagram',
        'updated_at'
    ];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class MakamModel extends Model
{
    protected $table = 'makam';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jk', 'tgl_lhr', 'tgl_wafat', 'latitude', 'longitude'];
}

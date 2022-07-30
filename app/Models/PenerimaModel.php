<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerimaModel extends Model
{
    protected $table = 'tb_penerima';
    protected $primaryKey = 'nama';

    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = ['no','Negara', 'Kode', 'Kota'];


}

<?php

namespace App\Models;

use CodeIgniter\Model;

class IndoModel extends Model
{
    protected $table = 'tb_product1';
    protected $primaryKey = 'id_barang';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $allowedFields = ['id_barang', 'nama_barang', 'penerima','alamat', 'status'];


}

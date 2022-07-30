<?php

namespace App\Models;

use CodeIgniter\Model;

class VietModel extends Model
{
    protected $table = 'tb_product3';
    protected $primaryKey = 'id_barang';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $allowedFields = ['id_barang', 'nama_barang', 'penerima','alamat', 'status'];


}

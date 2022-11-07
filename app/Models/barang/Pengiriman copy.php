<?php

namespace App\Models\barang;
use CodeIgniter\Model;

class Pengiriman_copy extends Model
{
    protected $table      = 'pengiriman';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['alias', 'stok', 'tujuan', 'satuan', 'deskripsi', 'date_created'];

}
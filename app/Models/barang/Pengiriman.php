<?php

namespace App\Models\barang;
use CodeIgniter\Model;

class Pengiriman extends Model
{
    protected $table      = 'pengiriman';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['alias', 'qty', 'tujuan', 'satuan', 'deskripsi', 'date_created'];

}
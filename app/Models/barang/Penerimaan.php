<?php

namespace App\Models\barang;
use CodeIgniter\Model;

class Penerimaan extends Model
{
    protected $table      = 'penerimaan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['alias', 'qty', 'harga', 'satuan', 'from', 'date_created'];

}
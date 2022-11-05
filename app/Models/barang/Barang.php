<?php

namespace App\Models\barang;
use CodeIgniter\Model;

class Barang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'created_by', 'qty', 'satuan', 'deskripsi', 'date_created'];

}
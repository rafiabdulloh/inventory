<?php

namespace App\Models\barang;
use CodeIgniter\Model;

class Stok extends Model
{
    protected $table = 'stok_barang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['alias', 'date_created', 'stok'];

    // public function upt_sum($alias)
    // {

    //     $data = $this->stok_barang()->find('stok');
        
    // }


}
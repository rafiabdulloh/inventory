<?php

namespace App\Models\barang;
use CodeIgniter\Model;

class Barang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'created_by', 'qty', 'satuan', 'deskripsi', 'date_created'];

    // public function dlt_brg($id)
    // {
    //     $builder=$this->table('barang');
    //     $builder->where('id', $id);
    //     return $builder->delete();
    // }  
    
    public function get_stock()
    {
        // return $this->stok->where('alias', $alias)->get();    
        // ambil 1valu yang isinya stok dari table
        
    }

    
}
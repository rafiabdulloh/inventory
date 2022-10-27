<?php

namespace App\Controllers\Base;
use App\Models\barang\Barang;
use App\Models\barang\Stok;
use App\Controllers\BaseController;
use CodeIgniter\CLI\Console;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('main/home');
    // }
    public function returnJson($msg)
    {
        echo json_encode($msg);
        exit;
    }
    public function barang()
    {

        $stok = new Stok;
        $barang = new Barang;
        
        $data['stokBarang']=$stok->findAll();
        $data['barang']=$barang->findAll();
        echo view('main/home',$data,$data);
    }


    public function tambahBarang()
    {
        
        $data['sawi'] = $this->request->getPost('sawi');
        $data['total'] = $this->request->getPost('total');
        // return json_encode($data);
        // exit;
        $this->barang();
        return view('main/home',$data);
        
    }
        
    public function add_barang()
    {
        $valid = \Config\Services::validation();
        $valid->setRules(['qty' => 'required']);
        $isvalid = $valid->withRequest($this->request)->run();

        $alias=$this->request->getPost('alias');
        $name=ucfirst($alias);
        $created_by=$this->request->getPost('created_by');
        $qty=$this->request->getPost('qty');
        $satuan=$this->request->getPost('satuan');
        $deskripsi=$this->request->getPost('deskripsi');

        if($isvalid){
            $stock = new Stok;
            $barang = new Barang;
            $get_stock = $stock->where('alias', $alias)->first();
            $do_insert = $barang->insert([
                "name"=>$name,
                "alias"=>$alias,
                "created_by"=>$created_by,
                "qty"=>$qty,
                "satuan"=>$satuan,
                "deskripsi"=>$deskripsi
            ]);
            if($do_insert){ 
                $stock->save([
                    "stok" =>$get_stock['stok']+$qty
                ]);
            }
            // return json_encode($qty+$get_stock['stok']);
            // exit;
            return redirect('inventor');
        }else{
            echo "data tidak valid";
        };
 
    }
    

    public function insert_brg_msk($stok)
    {
        //insert ke barang masuk dari form barnag masuk
        //segaligus
        //update data qty ke stock
        //validasi
        //ambil inputan qty lalu tambahkan dengan stok      

    }
    
    public function delete_brg()
    {
        $id=$this->request->getPost('id');
        $barang = new Barang;
        $do_delete = $barang->delete($id);
        if($do_delete){
            $this->returnJson(array('status' => 'ok'));
        } else {
            $this->returnJson(array('status' => 'false')); 
        }
        
        // return redirect('inventor');
        
        return view('main/home');
        
             
    }
}


    



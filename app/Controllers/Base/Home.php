<?php

namespace App\Controllers\Base;
use App\Models\barang\Barang;
use App\Models\barang\Stok;
use App\Models\barang\Pengiriman;
use App\Models\barang\CatatanLaporan;
use App\Models\barang\BarangKeluar;
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
        $pengiriman = new Pengiriman();
        $catatan_laporan = new CatatanLaporan();
        $barang_keluar = new BarangKeluar();

        $data['barang-keluar']= $barang_keluar->findAll();
        $data['laporan']= $catatan_laporan->findAll();
        $data['pengiriman']= $pengiriman->findAll();
        $data['stokBarang']=$stok->findAll();
        $data['barang']=$barang->findAll();
        echo view('main/home', $data, $data, $data, $data, $data);
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
        
    public function add_stok()
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
                $stock->update($get_stock['id'],[
                    "qty" =>$get_stock['qty']+$qty
                ]);
            }
            // return json_encode($qty+$get_stock['stok']);
            // exit;
            return redirect('inventor');
        }else{
            echo "data tidak valid";
        };
 
    }
        
    public function delete_brg()
    {
        $barang = new Barang;
        $stok_barang = new Stok();
        $id=$this->request->getPost('id');
        $name=$this->request->getPost('name');
        $qty=$this->request->getPost('qty');
        $get_stok=$stok_barang->where('alias',$name);
        // $qty=$barang->where('qty',$id);
        
        $do_delete = $barang->delete($id);  
        // return json_encode($id);
        if($do_delete){
            $this->returnJson(array('status' => 'ok'));
        } else {
            $this->returnJson(array('status' => 'false')); 
        };
        if($do_delete){
            $stok_barang->update($get_stok['id'],[
                "qty"=> $get_stok['qty']-$qty,

            ]);
        }
        
        return redirect('inventor');
        
        // return view('main/home');
        
             
    }

    public function delete($data)
    
    {
        $stock = new Stok;
        $id = $stock->where('id', $data)->first();
        // return json_encode($id);
        // exit;
        $stock->delete($id);
        return redirect('inventor');



        // $model = model(Stok::class);

    }
    public function add_barang_baru()
    {
        $stok_barang = new Stok;
        $barang = new Barang();
        $valid = \Config\Services::validation();
        $valid->setRules(['qty' => 'required']);
        $isvalid = $valid->withRequest($this->request)->run();

        $alias = $this->request->getPost('alias');
        $qty = $this->request->getPost('qty');

        $name=ucfirst($alias);
        $created_by=$this->request->getPost('created_by');
        $satuan=$this->request->getPost('satuan');
        $deskripsi=$this->request->getPost('deskripsi');

        if($isvalid){
            $stok_barang->insert([
                "alias" => $alias,
                "qty" => $qty,
            ]);

        }else{
            echo "datanya mana bang";
        };
        if($isvalid){
            $barang->insert([
                "name"=>$name,
                    "created_by"=>$created_by,
                    "qty"=>$qty,
                    "satuan"=>$satuan,
                    "deskripsi"=>$deskripsi

            ]);
        }
        
        return redirect('inventor');
    }

    public function update_stok_brg($id)
    {
        $stok = new Stok();
        $data['id'] = $stok->where('id', $id)->first();
        $validation =  \Config\Services::validation();
        $validation->setRules([
      'alias' => 'required',
      'qty' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
        $stok->update($id, [
            "alias" => $this->request->getPost('alias'),
            "qty" => $this->request->getPost('qty'),
        ]);
            return redirect('inventor');

        }

    }

    public function pengiriman()
    {
        $pengiriman = new Pengiriman();
        $data['pengiriman']= $pengiriman->findAll();

        echo view('pengiriman/home', $data);
    }
    
    public function kirim()
    {
        $stock = new Stok;
        $barang = new Pengiriman();
        $barang_keluar = new BarangKeluar();
        $valid = \Config\Services::validation();
        $valid->setRules(['tujuan' => 'required']);
        $isvalid = $valid->withRequest($this->request)->run();

        $alias=$this->request->getPost('alias');
        $qty=$this->request->getPost('qty');
        $satuan=$this->request->getPost('satuan');
        $tujuan=$this->request->getPost('tujuan');
        $deskripsi=$this->request->getPost('deskripsi');
        if($isvalid){
            $get_stock = $stock->where('alias', $alias)->first();
            $do_insert = $barang_keluar->insert([
                "alias"=>$alias,
                "qty"=>$qty,
                "satuan"=>$satuan,
                "tujuan"=>$tujuan,
                "deskripsi"=>$deskripsi
            ]);
            if($do_insert){ 
                $stock->update($get_stock['id'],[
                    "qty" =>$get_stock['qty']-$qty
                ]);
            };
            if($isvalid){
                $barang->insert([
                    "alias"=>$alias,
                    "qty"=>$qty,
                    "satuan"=>$satuan,
                    "tujuan"=>$tujuan,
                    "deskripsi"=>$deskripsi
                ]);
            }
           
            // return json_encode($get_stock['id']);
            // exit;
            return redirect('inventor');
        }else{
            echo "data tidak valid";
        };
 
    }

    public function status_pengiriman($id)
    {
        $catatan_laporan = new CatatanLaporan();

        $pengiriman = new Pengiriman();
        $id = $pengiriman->where('id', $id)->first();
        // return json_encode($id);
        $do_delete=$pengiriman->delete($id);
        if($do_delete){
            $catatan_laporan->insert($id);
        }
        
        // buat query delete
        // buat query insert ke database laporan
        return redirect('inventor/catatan/laporan');
    }
    
    public function catatan_laporan()
    {
        $catatan_laporan = new CatatanLaporan();
        $data['laporan']= $catatan_laporan->findAll();
        echo view('laporan/catatan_laporan', $data);
    }
    public function barang_keluar()
    {
        $keluar = new BarangKeluar();
        $data['keluar']=$keluar->findAll();

        echo view('barang_keluar/barang_keluar', $data);
    }
}


    



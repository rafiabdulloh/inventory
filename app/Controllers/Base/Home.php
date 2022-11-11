<?php

namespace App\Controllers\Base;
use App\Models\barang\Barang;
use App\Models\barang\Stok;
use App\Models\barang\Pengiriman;
use App\Models\barang\CatatanLaporan;
use App\Models\barang\Penerimaan;
use App\Models\barang\BarangKeluar;
use App\Models\barang\Lokasi;
use App\Controllers\BaseController;
use CodeIgniter\CLI\Console;
use CodeIgniter\Debug\Toolbar\Collectors\Logs;
use CodeIgniter\Router\Router;
use CodeIgniter\Validation\Validation;

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
    public function home()
    {

        $stok = new Stok;
        $barang = new Barang;
        $pengiriman = new Pengiriman();
        $catatan_laporan = new CatatanLaporan();
        $barang_keluar = new BarangKeluar();
        $penerimaan = new Penerimaan();
        $lokasi = new Lokasi();

        $data['penerimaan'] = $penerimaan->findAll();
        $data['barang-keluar']= $barang_keluar->findAll();
        $data['laporan']= $catatan_laporan->findAll();
        $data['pengiriman']= $pengiriman->findAll();
        $data['stokBarang']=$stok->findAll();
        $data['barang']=$barang->findAll();
        $data['lokasi']=$lokasi->findAll();
        echo view('main/home', $data, $data, $data, $data, $data, $data);
    }
    
    public function barang()
    {

        $stok = new Stok;
        $barang = new Barang();
        $lokasi = new Lokasi();

        $data['lokasi']=$lokasi->findAll();
        $data['barang'] = $barang->findAll();
        $data['stokBarang']=$stok->findAll();


        echo view('barang/home', $data, $data, $data);

    }

    public function tambahBarang()
    {
        
        $data['sawi'] = $this->request->getPost('sawi');
        $data['total'] = $this->request->getPost('total');
        // return json_encode($data);
        // exit;
        $this->home();
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
                // "alias"=>$name,
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
        $name=$this->request->getPost('alias');
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

    public function delete($id)
    
    {
        $stok = new Stok;
        $stok->delete($id);

        return redirect('inventor/barang');


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
                "alias"=>$alias,
                    "created_by"=>$created_by,
                    "qty"=>$qty,
                    "satuan"=>$satuan,
                    "deskripsi"=>$deskripsi

            ]);
        }
        
        return redirect('inventor/barang');
    }

    public function update_stok_brg($id)
    {
        $stok = new Stok();
        // $data['id'] = $stok->where('id', $id)->first();
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
        // tanda
    }
    return redirect('inventor/barang');

    }

    public function pengiriman()
    {
        $pengiriman = new Pengiriman();
        $stok = new Stok;
        $lokasi = new Lokasi();

        $data['pengiriman']= $pengiriman->findAll();
        $data['stokBarang']=$stok->findAll();
        $data['lokasi']=$lokasi->findAll();



        echo view('pengiriman/home', $data, $data, $data);
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
        $get_stock = $stock->where('alias', $alias)->first();
        $stok_stok = $get_stock['qty'];

            if($qty<=$stok_stok && $isvalid){               //hanya tereksekusi jika stok barang ada atau cukup
                $do_insert = $barang->insert([
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
                    
            }else{
                // belum ada peringatan stok kurang
                return redirect('inventor/barang');
            };

            return redirect('inventor/pengiriman');
        
 
    }

    // accept pengiriman
    public function status_pengiriman($id)
    {
        $catatan_laporan = new CatatanLaporan();
        $pengiriman = new Pengiriman();
        $barang_keluar = new BarangKeluar();
        // return json_encode($id);

        
        $get_status = $pengiriman->where('id', $id)->first();

        $doFor_status = $pengiriman->update($get_status['id'],["status" => 1]);      

        if($doFor_status)
        {
            $catatan_laporan->insert([
                'alias'=> $get_status['alias'],
                'qty'=> $get_status['qty'],
                'satuan'=> $get_status['satuan'],
                'tujuan'=> $get_status['tujuan'],
                'deskripsi'=> $get_status['deskripsi'],
                'status' => 1
            ]);
            $barang_keluar->insert([
                'alias'=> $get_status['alias'],
                'qty'=> $get_status['qty'],
                'satuan'=> $get_status['satuan'],
                'tujuan'=> $get_status['tujuan'],
                'deskripsi'=> $get_status['deskripsi'],
            ]);


            $this->returnJson(array('status' => 'ok'));
        }else
            {
                $this->returnJson(array('status' => 'false'));
            };   
        
        return redirect('inventor/pengiriman');
    }
    
    public function catatan_laporan()
    {
        $catatan_laporan = new CatatanLaporan();
        $lokasi = new Lokasi();
        $stok = new Stok;

        $data['laporan']= $catatan_laporan->findAll();
        $data['stokBarang']=$stok->findAll();
        $data['lokasi']=$lokasi->findAll();
        
        echo view('laporan/catatan_laporan', $data, $data, $data);
    }
    public function barang_keluar()
    {
        $keluar = new BarangKeluar();
        $stok = new Stok;
        $lokasi = new Lokasi;
        
        $data['lokasi']=$lokasi->findAll();
        $data['keluar']=$keluar->findAll();
        $data['stokBarang']=$stok->findAll();

        echo view('barang_keluar/barang_keluar', $data, $data);
    }

    public function penerimaan()
    {
        $penerimaan = new Penerimaan();
        $stok = new Stok;
        $lokasi = new Lokasi();
        
        $data['stokBarang']=$stok->findAll();        
        $data['penerimaan']=$penerimaan->findAll();
        $data['lokasi']=$lokasi->findAll();

        return view('penerimaan/penerimaan', $data, $data, $data);
    }

    public function tambah_penerimaan()
    {
        $penerimaan = new Penerimaan();
        $validation = \Config\Services::validation();
        $validation->setRules(['alias' => 'required']);
        $valid = $validation->withRequest($this->request)->run();


        $alias = $this->request->getPost('alias');
        $qty = $this->request->getPost('qty');
        $satuan = $this->request->getPost('satuan');
        $from = $this->request->getPost('from');
        $harga = $this->request->getPost('harga');
        // $format_harga = format_number($harga, 0, '', );
        $jumlah = str_replace(".","",$harga);

        if($valid){
            $penerimaan->insert([
                "alias" => $alias,
                "qty" => $qty,
                "satuan" => $satuan,
                "from" => $from,
                "harga" => $jumlah,
            ]);
        }
        return redirect('inventor/penerimaan');
    }

    //penerimaan barang accept
    public function accept_penerimaan($id)
    {
        $penerimaan = new Penerimaan();
        $stok = new Stok();
        $barang = new Barang();
        $stok_pen = $penerimaan->where('id', $id)->first();
        $get_stok = $stok->where('alias', $stok_pen['alias'])->first();
        // $get_stok_all = $stok->findAll();
                
            if($get_stok !== null){

                $do_accept = $stok->update($get_stok['id'],[
                    'qty' => $get_stok['qty']+$stok_pen['qty']
                ]);

            $do_accept;

            $barang->insert([
                'alias' => $stok_pen['alias'],
                'qty' => $stok_pen['qty'],
                'created_by' => $stok_pen['from'],
                'satuan' => $stok_pen['satuan'],
                'deskripsi' => "Barang dari ". $stok_pen['from'],
            ]);
            
            $penerimaan->update($id,[
                'status' => 1
            ]);
            
        }else{
            // jika barang belum ada
            $barang->insert([
                'alias' => $stok_pen['alias'],
                'qty' => $stok_pen['qty'],
                'created_by' => $stok_pen['from'],
                'satuan' => $stok_pen['satuan'],
                'deskripsi' => "Barang dari ". $stok_pen['from'],

            ]);
            $stok->insert([
                'alias' => $stok_pen['alias'],
                'qty' => $stok_pen['qty'],
            ]);

            $penerimaan->update($id,[
                'status' => 1
            ]);
        }


        return redirect('inventor/penerimaan');

    }

    public function barang_masuk()
    {
        $barang = new Barang();
        $stok = new Stok;
        $lokasi = new Lokasi();
        $data['barang'] = $barang->findAll();
        $data['stokBarang']=$stok->findAll();
        $data['lokasi']=$lokasi->findAll();


        echo view('barang_masuk/home', $data, $data, $data);
    }

    public function edit_brg_to_stok($id)
    {

        $barang = new Barang();
        $stok = new Stok();
        // $data['id'] = $stok->where('id', $id)->first();
        $validation =  \Config\Services::validation();
        $validation->setRules([
      'alias' => 'required',
      'qty' => 'required',
        ]);
        
        $alias = $this->request->getPost('alias');
        $qty = $this->request->getPost('qty');
        $created_by = $this->request->getPost('created_by');
        $satuan = $this->request->getPost('satuan');
        $deskripsi = $this->request->getPost('deskripsi');
        
        $qty_brg = $barang->where('id' , $id)->first();
        $get_stok = $stok->where('alias', $alias)->first();
        $stok_brg = $get_stok['qty'];
        $id_stok = $get_stok['qty'];
        // return json_encode($qty_brg['qty']);

        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
        $barang->update($id, [
            "alias" => $alias,
            "qty" => $qty,
            "satuan" => $satuan,
            "created_by" => $created_by,
            "deskripsi" => $deskripsi,
            
        ]);
        
        if($stok_brg > $qty){
            $stok->update($get_stok['id'],[
                "qty" => $get_stok['qty']-($qty_brg['qty'] - $qty)
            ]);
        }
        if($stok_brg < $qty){
            $stok->update($get_stok['id'],[
                "qty" => $get_stok['qty']+($qty - $qty_brg['qty'])
            ]);
        }
        
        }
        return redirect('inventor/barang/masuk');
    }

    public function batal($id, $alias, $qty)
    {
        $pengiriman = new Pengiriman();
        $stok = new Stok();
        $catatan_laporan = new CatatanLaporan();

        $get_stok = $stok->where('alias', $alias)->first();
        // return json_encode($get_stok);
        // $do_delete = $pengiriman->delete($id);    

        // if($do_delete){
            $stok->update($get_stok['id'],[
                "qty" => $get_stok['qty']+$qty,
            ]);
        // }

        $get_status = $pengiriman->where('id', $id)->first();
        // return json_encode($get_status['status']);

        $doFor_status = $pengiriman->update($get_status['id'],["status" => 2]);      

        if($doFor_status){
            $catatan_laporan->insert([
                'alias'=> $get_status['alias'],
                'qty'=> $get_status['qty'],
                'satuan'=> $get_status['satuan'],
                'tujuan'=> $get_status['tujuan'],
                'deskripsi'=> $get_status['deskripsi'],
                'status' => 2
            ]);

            $this->returnJson(array('status' => 'ok'));
        }else{
            $this->returnJson(array('status' => 'false'));
        }
        
        return redirect('inventor/pengiriman');
    }
       
    public function cancel_penerimaan($id)
    {
        $penerimaan = new Penerimaan();
        // return json_encode($id);
        $penerimaan->update($id,[
            'status' => 2
        ]);

        return redirect('inventor/penerimaan');
    }

    // tambah lokasi penerima
    public function add_location()
    {
        $lokasi = new Lokasi();
        $validation = \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $isvalid = $validation->withRequest($this->request)->run();


        if($isvalid){
            $lokasi->insert([
                'nama' => $nama,
                'alamat' => $alamat
            ]);
        }else{
            return "validation not correct";
        }

        return redirect('inventor');
    }

}



    



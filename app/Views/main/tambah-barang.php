<!-- Tambah Stok -->
<div>
	<div class="modal fade" id="tambah-stok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content" style="margin-top:80px">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Agrioduct</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/add" method="post">
	            <label for="recipient-name" class="col-form-label">Pilih nama barang:</label>
                <select name="alias" id="" class="select form-group col-form-label form-control">
                    <option value="" selected disabled hidden>-- Pilih Barang --</option>
                    
					<?php foreach($stokBarang as $stok):?>
						<option style="text-transform:capitalize" value="<?= $stok['alias']?>">
							<?= $stok['alias']?>
							<!-- ucfirst -->
						</option>
					<?php endforeach ?>
                </select>
	            <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Pengirim</label>
                    <input placeholder="Masukan nama anda" class="form-control" type="text" name="created_by" autocomplete="off" style="text-transform:capitalize" required>
	            </div>
                <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Jumlah</label>
                    <input placeholder="Masukan angka" class="form-control" type="number" min="0" name="qty" id="total" required>
	            </div>
	            <label for="recipient-name" class="col-form-label">Satuan:</label>
                <select name="satuan" id="" class="select form-group col-form-label form-control" required>
                <option value="" selected disabled hidden>-- Pilih satuan --</option>
                    <option value="kg">Kilogram</option>
                    <option value="pcs">Pack</option>
                </select>
	            <div class="form-group">
	              <label for="message-text" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" placeholder="masukan deskripsi disini..." type="number" name="deskripsi"></textarea>
	            </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<!-- Tambah barang -->
<div id="tambah-barang" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="margin-top:80px">
      <div class="modal-header">
		  <h4 class="modal-title">Tambahkan Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
	  		<form action="/add/barang/baru" method="post">
				<div class="form-group">
	                <label for="recipient-name" class="col-form-label" >Nama</label>
                    <input placeholder="Sayuran" class="form-control" autocomplete="off" type="text" name="alias" style="text-transform:capitalize" required>
	            </div>
                <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Jumlah</label>
                    <input placeholder="Masukan angka" class="form-control" type="number" min="0" name="qty" id="total" required>
	            </div>
	            <label for="recipient-name" class="col-form-label">Satuan:</label>
                <select name="satuan" id="" class="select form-group col-form-label form-control">
                <option value="" selected disabled hidden>-- Pilih satuan --</option>
                    <option value="kg">Kilogram</option>
                    <option value="pcs">Pack</option>
                </select>
				<div class="form-group">
	                <label for="recipient-name" class="col-form-label">Pengirim</label>
                    <input placeholder="Masukan nama anda" class="form-control" type="text" name="created_by" autocomplete="off" style="text-transform:capitalize" required>
	            </div>
				<div class="form-group">
	              <label for="message-text" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" placeholder="masukan deskripsi disini..." type="number" name="deskripsi"></textarea>
	            </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
	        </form>
      </div>
    </div>
  </div>
</div>

<!-- kirim barang -->
<div id="kirim" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="margin-top:80px">
            <div class="modal-header">
                <h3 class="modal-title">Kirim barang ke tujuan</h3>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="/kirim/barang" method="post">
				<div class="form-group">
	                <label for="recipient-name" class="col-form-label">Nama</label>
                        <select name="alias" id="" class="select form-group col-form-label form-control">
                    <option value="" selected disabled hidden>-- Pilih Barang --</option>
					<?php foreach($stokBarang as $stok):?>
						<option value="<?= $stok['alias']?>">
							<?= ucFirst($stok['alias'])?>
						</option>
					<?php endforeach ?>
                    </select>
	            </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tujuan</label>
                    <select name="tujuan" id="" class="select form-group col-form-label form-control">
                        <option value="" selected disabled hidden>-- Pilih tujuan --</option>
                        <?php foreach($lokasi as $loc):?>
                        <option value="<?= $loc['nama']?> <?= $loc['alamat']?>" style="text-transform:capitalize"><?= $loc['nama']?> <?= $loc['alamat']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Jumlah</label>
                    <input placeholder="Masukan angka" class="form-control" type="number" min="0" name="qty" id="total" required>
	            </div>
	            <label for="recipient-name" class="col-form-label">Satuan:</label>
                <select name="satuan" id="" class="select form-group col-form-label form-control">
                    <option value="" selected disabled hidden>-- Pilih satuan --</option>
                    <option value="kg">Kilogram</option>
                    <option value="pcs">Pack</option>
                </select>
                <div class="form-group">
                     <label for="recipient-name" class="col-form-label">Deskripsi</label>
                     <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10" placeholder="Tuliskan deskripsi tujuan disini..."></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
			</form>
            </div>
        </div>
    </div>
</div>


<!-- tambah penerimaan -->
<div id="penerimaan" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="margin-top:80px">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Penerimaan</h3>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="/tambah/penerimaan" method="post">
				<div class="form-group">
	                <label for="recipient-name" class="col-form-label">Nama</label>
                    <input placeholder="pilih atau tambahkan barang baru" class="form-control" type="text" name="alias" autocomplete="off" required list="list-alias">
                    <datalist id="list-alias">
                        <!-- <option value="" selected disabled hidden>-- Pilih Barang --</option> -->
                        <?php foreach($stokBarang as $stok):?>
                            <option value="<?= $stok['alias']?>">
                                <?= ucFirst($stok['alias'])?>
                            </option>
                            <?php endforeach ?>
                    </datalist>
                        <!-- <select name="alias" id="" class="select form-group col-form-label form-control" required>
                        
                    </select> -->
	            </div>
                <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Jumlah</label>
                    <input placeholder="Masukan angka" class="form-control" type="number" min="0" name="qty" id="total" required>
	            </div>
	            <label for="recipient-name" class="col-form-label">Satuan:</label>
                <select name="satuan" id="" class="select form-group col-form-label form-control" required>
                    <option value="" selected disabled hidden>-- Pilih satuan --</option>
                    <option value="kg">Kilogram</option>
                    <option value="pcs">Pack</option>
                </select>
                <div class="form-group">
					<label for="recipient-name" class="col-form-label">Barang dari</label>
					<input placeholder="Barang dari" class="form-control" type="text" name="from" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Harga</label>
					<input placeholder="Masukan angka" class="form-control" type="text" id="rupiah" name="harga" min="0" autocomplete="off" required>
				</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
			</form>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah lokasi pengiriman -->
<div id="tambah-lokasi" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:80px">
      <div class="modal-header">
		  <h4 class="modal-title">Tambahkan Lokasi Penerima</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
	  		<form action="/add/lokasi" method="post">
				<div class="form-group">
	                <label for="recipient-name" class="col-form-label" >Nama Penerima</label>
                    <input placeholder="Nama penerima barang" class="form-control" autocomplete="off" type="text" name="nama" style="text-transform:capitalize" required>
	            </div>
				<div class="form-group">
	                <label for="recipient-name" class="col-form-label">Alamat</label>
                    <input placeholder="Contoh: Bintaro no 12, Tangerang selatan" class="form-control" type="text" name="alamat" autocomplete="off" style="text-transform:capitalize" required>
	            </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
	        </form>
      </div>
    </div>
  </div>
</div>
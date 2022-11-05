<div id="kirim" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="margin-top:80px">
            <div class="modal-header">
                <h3 class="modal-title">Kirim barang ke tujuan</h3>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="kirim/barang" method="post">
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
                        <option value="jakarta">Jakarta</option>
                        <option value="tangerang">Tangerang</option>
                        <option value="bandung">Bandung</option>
                        <option value="surabaya">Surabaya</option>
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
            </div>
        </div>
    </div>
</div>

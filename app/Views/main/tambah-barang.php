<!-- <div>
    <form action="/add" method="post" id="form" class="form-group">
        <select name="alias" id="" class="select">
            <option value="" selected disabled hidden>-- Pilih Barang --</option>
            <option value="sawi">Sawi</option>
            <option value="lobak">Lobak</option>
            <option value="pakcoy">Pakcoy</option>
        </select>
        <input placeholder="masukan nama anda"  type="text" name="created_by"  required>
        <input placeholder="jumlah barang" type="number" name="qty" id="total" required>
        <input placeholder="satuan" type="text" name="satuan" required>
        <div>
            <textarea placeholder="masukan deskripsi disini..." type="number" name="deskripsi"></textarea>
        </div>
        <input id="submit" type="submit" name="submit" value="kirim">
    </form>
</div> -->

<div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/add" method="post">
	            <label for="recipient-name" class="col-form-label">Pilih nama barang:</label>
                <select name="alias" id="" class="select form-group col-form-label form-control">
                    <option value="" selected disabled hidden>-- Pilih Barang --</option>
                    <option value="sawi">Sawi</option>
                    <option value="lobak">Lobak</option>
                    <option value="pakcoy">Pakcoy</option>
                </select>
	            <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Pengirim</label>
                    <input placeholder="Masukan nama anda" class="form-control" type="text" name="created_by"  required>
	            </div>
                <div class="form-group">
	                <label for="recipient-name" class="col-form-label">Jumlah</label>
                    <input placeholder="Masukan angka" class="form-control" type="number" name="qty" id="total" required>
	            </div>
	            <label for="recipient-name" class="col-form-label">Satuan:</label>
                <select name="alias" id="" class="select form-group col-form-label form-control">
                    <option value="kg">Kilogram</option>
                    <option value="pcs">Pack</option>
                </select>
	            <div class="form-group">
	              <label for="message-text" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" placeholder="masukan deskripsi disini..." type="number" name="deskripsi"></textarea>
	            </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Send message</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>
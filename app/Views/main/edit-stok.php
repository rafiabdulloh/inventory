<div id="edit-stok" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		  <h4 class="modal-title">Edit data stok barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="myform" action="/edit/stok/" method="post">
            <label for="">Nama:</label>
            <input type="text" class="alias form-control" name="alias" autocomplete="off" id="alias">
            <label for="">Stok:</label>
            <input type="number" class="stok form-control" name="qty" id="stok">
        <div class="modal-footer">
                    <button class="btn btn-primary" id="submit" type="submit" name="submit">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
        </form>
        <div class="coba"></div>
      </div>
    </div>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href=<?= base_url('css/style.css')?>>
	<link rel="stylesheet" href=<?= base_url('/css/style.sdb.css')?>>
	<link rel="stylesheet" href=<?= base_url('/css/bootstrap.min.sdb.css')?>>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/list/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?=$this->include('main/navbar')?>
<body>
		<div>
			<div class="row" style="flex-flow: row; margin:0px">
				<div>
					<?= $this->include('main/sidebar') ?>
				</div>
				<div id="content" style="padding-top:20px; padding-left:60px; padding-right:60px; margin-top:60px" >
                <!-- <h1>Barang Keluar</h1> -->
                <div id="history-barang" class="box" >
                    <h1 class="h1" style="padding:20px; margin-top: 0">Barang masuk</h1>
                    <table class="table table-striped table-hover" id="table" cellspacing="0" width="100%">
                      <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama barang</th>
                                <th scope="col">Dibuat oleh</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col" style="text-align:center ;width:100px">Action</th>
                            </tr>
                        </thead>
                              <tbody>
                                <?php $no=1; foreach($barang as $a):?>
                                <tr>
                                    <td scope="row"><?= $no ?></td>
                                    <td scope="row" style="text-transform:capitalize"><?= $a['alias']?></td>
                                    <td scope="row" style="text-transform:capitalize"><?= $a['created_by']?></td>
                                    <td scope="row"><?= $a['qty']?></td>
                                    <td scope="row"><?= $a['satuan']?></td>
                                    <td scope="row"><?= $a['deskripsi']?></td>
                                    <td scope="row"><?= $a['date_created']?></td>
                                    <td scope="row" class="icon-history">
                                      <a id="dlt-brg" data-id="<?= $a['id']?>" class=" btn-danger icon-dlt">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="float:left">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                      </a>
                                      <a data-toggle="modal" data-target="#edit-barang" href="#" 
                                        data-id="<?= $a['id']?>"
                                        data-alias="<?= $a['alias']?>"
                                        data-created_by="<?= $a['created_by']?>"
                                        data-qty="<?= $a['qty']?>"
                                        data-satuan="<?= $a['satuan']?>"
                                        data-deskripsi="<?= $a['deskripsi']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                      </a>
                                    </td>
                                </tr>
                                <?php $no++; endforeach?>
                              </tbody>
                    </table>
			    <?= $this->include('main/tambah-barang')?>
            </div>

                </div>			
            </div>
		</div>
        <!-- modal edit -->
        <div id="edit-barang" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="margin-top:60px">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Barang</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/edit/barang" method="post" id="formEdit">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" name="alias" class="form-control alias" style="text-transform:capitalize">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Dibuat oleh:</label>
                                <input type="text" name="created_by" class="form-control created_by" style="text-transform:capitalize">
                            </div>
                            <div class="form-group">
	                            <label for="recipient-name" class="col-form-label">Jumlah</label>
                                <input placeholder="Masukan angka" class="form-control qty" type="number" min="0" name="qty" id="total" required>
	                        </div>
	                        <label for="recipient-name" class="col-form-label">Satuan:</label>
                            <select name="satuan" id="" class="select form-group form-control satuan">
                                <option value="" selected disabled hidden>-- Pilih satuan --</option>
                                <option value="kg">Kilogram</option>
                                <option value="pcs">Pack</option>
                            </select>
                            <div class="form-group">
                                 <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                 <textarea name="deskripsi" class="form-control deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Tuliskan deskripsi tujuan disini..."></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Send</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="modal-footer"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<?= $this->include('main/footer')?>
    </body>
    <script src=<?= base_url('js/font-icon.js')?>></script>
        <script src=<?= base_url('js/jquery.min.sdb.js')?>></script>
        <script src=<?= base_url('js/jquery.js')?>></script>
        <script src=<?= base_url('js/popper.sdb.js')?>></script>
        <script src=<?= base_url('js/bootstrap.min.sdb.js')?>></script>
        <script src=<?= base_url('js/main.sdb.js')?>></script>
        <script src=<?= base_url('js/inventory.home.js')?>></script>
        <script src=<?= base_url('js/jquery.min.sdb.js')?>></script>
        <script src=<?= base_url('js/jquery.min.sdb.js')?>></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery.min.js"></script>
</html> 
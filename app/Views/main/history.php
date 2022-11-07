<div id="history-barang" class="box" style="display:none" >
    <h1 class="h1" style="padding:20px; margin-top: 0">History barang masuk</h1>
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
                    <td scope="row"><?= $a['alias']?></td>
                    <td scope="row"><?= $a['created_by']?></td>
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
                      <a class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                      </a>
                    </td>
                </tr>
                <?php $no++; endforeach?>
              </tbody>
    </table>
</div>
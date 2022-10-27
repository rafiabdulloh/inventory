<div id="history-barang" class="box" style="display:none">
    <h1 class="h1" style="padding:20px; margin-top: 0">History barang masuk</h1>
    <table class="table">
          <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama barang</th>
                <th scope="col">Dibuat oleh</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
              <tbody>
                <?php $no=1; foreach($barang as $a):?>
                <tr>
                    <td scope="row"><?= $no ?></td>
                    <td scope="row"><?= $a['name']?></td>
                    <td scope="row"><?= $a['created_by']?></td>
                    <td scope="row"><?= $a['qty']?></td>
                    <td scope="row"><?= $a['satuan']?></td>
                    <td scope="row"><?= $a['deskripsi']?></td>
                    <td scope="row"><?= $a['date_created']?></td>
                    <td scope="row">
                      <a id="dlt-brg" data-id="<?= $a['id']?>" class="btn btn-danger dlt-brg">
                        hapus
                      </a>
                    </td>
                </tr>
                <?php $no++; endforeach?>
              </tbody>
    </table>
</div>
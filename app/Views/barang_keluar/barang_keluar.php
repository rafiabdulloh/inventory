
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?= $this->include('pengiriman/navbar')?>
<body>
		<div>
			<div class="row" style="flex-flow: row; margin:0px">
				<div>
					<?= $this->include('main/sidebar') ?>
				</div>
				<div id="content" style="padding-top:20px; padding-left:60px; padding-right:60px" >
                <h1>Laporan dari Pengiriman Barang</h1>
                   <table class="table-bordered table table-hover box">
                    <thead>
                        <th>No</th>
                        <th>Name</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Tujuan</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($keluar as $dist):?>
                        <tr>
                            <td><?= $no?></td>
                            <td style="text-transform:capitalize"><?= $dist['alias']?></td>
                            <td><?= $dist['qty']?></td>
                            <td><?= $dist['satuan']?></td>
                            <td style="text-transform:capitalize"><?= $dist['tujuan']?></td>
                            <td><?= $dist['deskripsi']?></td>
                            <td><?= $dist['date_created']?></td>
                            <td>
                                <a href="" class="btn btn-inline-primary">
                                    Selesai
                                </a>
                            </td>
                        </tr>
                        <?php $no++; endforeach?>
                    </tbody>
                   </table>
			</div>
		</div>
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
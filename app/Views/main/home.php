<!doctype html>
<html lang="en">
  <head>
  	<title>inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="/css/style.sdb.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<?=$this->include('main/navbar')?>
		<div>
			<div class="row" style="flex-flow: row; margin:0px">
				<div>
					<?= $this->include('main/sidebar') ?>
				</div>
				<div id="content" style="padding-top:20px; padding-left:60px; padding-right:60px" >
					<div class="table">
						<table>
							<th rowspan="2" id="" class="penerimaan">
								<img src="image/keranjang.png" alt="" width="60px" height="60px">
								<td class="penerimaan">penerimaan</td>
								<td class="penerimaan">0</td>
							</th>
							<th rowspan="2" id="barang" class="barang">
									<img src="image/barang.png" alt="" width="60px" height="60px">
									<td class="barang">Barang</td>
									<td class="barang">0</td>	
							</th>
							<th rowspan="2" id="" class="pengiriman">
								<img src="image/mobil.png" alt="" width="60px" height="60px">
								<td class="pengiriman">pengiriman</td>
								<td class="pengiriman">0</td>
							</th>
							<th rowspan="2" id="" class="list">
								<img src="image/catatan.png" alt="" width="60px" height="60px">
								<td class="list">selesai</td>
								<td class="list">0</td>
							</th>
						</table>
					</div>
					<div>
						<?= $this->include('main/tambah-barang')?>
					</div>
					<?= $this->include('main/history')?>
					<div>
						<?= $this->include('main/barang')?>
					</div>
					
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery.min.sdb.js"></script>
	<script href="js/jquery.js"></script>
	<script src="js/popper.sdb.js"></script>
	<script src="js/bootstrap.min.sdb.js"></script>
	<script src="js/main.sdb.js"></script>
	<script src="js/inventory.home.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
</html>
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
	<?=$this->include('main/navbar')?>
	<body>
		<div>
			<div class="row" style="flex-flow: row; margin:0px; width:100%">
				<div>
					<?= $this->include('main/sidebar') ?>
				</div>
				<div id="content" class="parent" >
					<div class="table">
						<table>
							<th rowspan="2" id="" class="penerimaan">
								<a href="/inventor/penerimaan" style="color:black">
									<!-- <img src="image/keranjang.png" alt="" width="60px" height="60px"> -->
									<i style='font-size:50px' class='fas'>&#xf07a;</i>
										<td class="penerimaan">
											<a href="/inventor/penerimaan" style="color:black">penerimaan</a>
										</td>
										<td class="penerimaan">0</td>
								</a>
							</th>
							<th rowspan="2" id="barang" class="barang">
								<a href="/inventor/barang" style="color:black">
									<!-- <img src="image/barang.png" alt="" width="60px" height="60px"> -->
									<i style='font-size:50px' class='fas'>&#xf1b2;</i>
									<td class="barang">
									<a href="/inventor/barang" style="color:black">Barang
									</td>
									<td class="barang"><?= count($stokBarang)?></td>	
								</a>
							</th>
							<th rowspan="2" id="" class="pengiriman">
								<a href="/inventor/pengiriman" style="color:black">
									<!-- <img src="image/mobil.png" alt="" width="60px" height="60px"> -->
									<i style='font-size:50px' class='fas'>&#xf0d1;</i>

									<td type="link" class="pengiriman">
										<a href="/inventor/pengiriman" style="color:black">pengiriman</a>
									</td>
									<td class="pengiriman"><?= count($pengiriman)?></td>
								</a>
							</th>
							<th rowspan="2" id="" class="list">
								<a href="/inventor/catatan/laporan" style="color:black">
									<!-- <img src="image/catatan.png" alt="" width="60px" height="60px"> -->
									<i style='font-size:50px' class='fas'>&#xf0ae;</i>
									<td class="list">
									<a href="/inventor/catatan/laporan" style="color:black">Catatan Laporan</a>
									</td>
									<td class="list"><?= count($laporan)?></td>
								</a>
							</th>
						</table>
					</div>
					<div>
						<?= $this->include('main/tambah-barang')?>
					</div>
					<?= $this->include('main/history')?>
				</div>
			</div>
		</div>
		<?= $this->include('main/footer')?>
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
        <script src="js/font-icon.js"></script>
</html>
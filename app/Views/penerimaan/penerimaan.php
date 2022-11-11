
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
<?=$this->include('main/navbar')?>
<body>
	<div>
		<div class="row" style="flex-flow: row; margin:0px">
			<div>
				<?= $this->include('main/sidebar') ?>
			</div>
			<div id="content" style="padding-top:20px; padding-left:60px; padding-right:60px; margin-top:60px" >
            <h1>Penerimaan
                <a data-toggle="modal" data-target="#penerimaan" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>
            </h1>
            <table class="table-bordered table table-hover box">
                <thead>
                    <th>No</th>
                        <th>Name</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Barang dari</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($penerimaan as $pen):
                        $s = $pen['status'];
                            switch($s){
                                case 0: $s = "<span class='btn pending'>Pending</span>";break;
                                case 1: $s = "<span class='btn act'>Success</span>";break;
                                case 2: $s = "<span class='btn btn-danger act-cancel'>Canceled</span>";break;
                                // default: $s = "Kamu inputin data apa?";
                            };?>
                        <tr>
                            <td><?= $no?></td>
                            <td style="text-transform:capitalize"><?= $pen['alias']?></td>
                            <td><?= $pen['qty']?></td>
                            <td><?= $pen['satuan']?></td>
                            <td><?= $pen['from']?></td>
                            <td>Rp.<?php 
                                $rp = $pen['harga'];
                                $number = number_format($rp , 2, ',', '.');
                                echo $number;
                                ?>
                            </td>
                            <td><?= $s?></td>
                            <td><?= $pen['date_created']?></td>
                            <td>
                                <span>
                                    <?php $s = $pen['status'];
                                    if($s !=1 && $s !=2){
                                        echo "<a href='/accept/penerimaan/".$pen['id']."' class='btn btn-primary act'>Accept</a>" ;
                                        // echo "hai";
                                    }else{
                                        echo "<span class='gv-act'>Telah Diberi Tindakan</span>";
                                    }
                                    ?>
                                </span>
                                <span>
                                    <?php $s = $pen['status'];
                                    if($s !=1 && $s !=2){
                                        echo "<a href='/cancel/penerimaan/".$pen['id']."' class='btn btn-danger act-cancel'>Cancel</a>" ;
                                        // echo "hai";
                                    }
                                    ?>
                                </span>
                            </td>
                        </tr>
                        <?php $no++; endforeach?>
                    </tbody>
                </table>
            </div>
            <div>
			    <?= $this->include('main/tambah-barang')?>
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



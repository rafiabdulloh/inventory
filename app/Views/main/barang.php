<table class="table table-hover box tmpl" id="stock">
    <!-- <div class="btn btn-inline-primary tmpl insert-stock" id="insert-stock">+ Stok</div> -->
	<button type="button" class="btn btn-inline-primary insert-stock" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambahkan stok</button>
	<thead>
        <th>No</th>
        <th>Name</th>
        <th>Stok barang</th>
	</thead>
	<tbody>
        <?php $no=1; foreach($stokBarang as $brg):?>
    <tr>
		<td><?= $no ?></td>
		<td><?= $brg['alias']?></td>
		<td><?= $brg['stok']?></td>
    </tr>
        <?php $no++; endforeach; ?>
	</tbody>
</table>
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
<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th class="text-center">ID Invoice</th>
			<th class="text-center">Nama Pemesan</th>
			<th class="text-center">Alamat Pengiriman</th>
			<th class="text-center">Tanggal Pemesanan</th>
			<th class="text-center">Batas Pembayaran</th>
			<th class="text-center">Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
			</tr>
			
		<?php endforeach; ?>
		
	</table>
</div>
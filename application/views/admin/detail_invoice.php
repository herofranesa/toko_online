<div class="container-fluid">
	<h4>Detail Pesanan <div  class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div></h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th class="text-center">ID BARANG</th>
			<th class="text-center">NAMA PRODUK</th>
			<th class="text-center">JUMLAH PESANAN</th>
			<th class="text-center">HARGA SATUAN</th>
			<th class="text-center">SUB-TOTAL</th>
		</tr>
		<?php
		$total=0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total 	+= $subtotal;
			?>

			<tr>
				<td align="center"><?php echo $psn->id_barang ?></td>
				<td align="center"><?php echo $psn->nama_barang ?></td>
				<td align="center"><?php echo $psn->jumlah ?></td>
				<td align="center"><?php echo number_format($psn->harga,0,',','.') ?></td>
				<td align="center"><?php echo number_format($subtotal,0,',','.') ?></td>
			</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4" align="right"><b>TOTAL</b></td>
			<td align="center">Rp. <?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>
	<a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>
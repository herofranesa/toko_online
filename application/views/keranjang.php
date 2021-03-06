<div class="container-fluid">
	<h4>Keranjang Belanja</h4>
	<table class="table table-bordered table-strip table-hover">
		<tr>
			<th class="text-center">NO</th>
			<th class="text-center">Nama Produk</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Harga</th>
			<th class="text-center">Sub-Total</th>
		</tr>

		<?php
		$no = 1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td align="center"><?php echo $no++ ?></td>
				<td align="center"><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['qty'] ?></td>
				<td align="right">Rp.<?php echo number_format($items['price'], 0, ',', '.') ?></td>
				<td align="right">Rp.<?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
			</tr>

		<?php endforeach ?>
		<tr>
			<td colspan="4"></td>
			<td align="right">Rp.<?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
		</tr>
	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
			<div class="btn btn-sm btn-danger">Hapus Keranjang</div>
		</a>
		<a href="<?php echo base_url('welcome') ?>">
			<div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
		</a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>">
			<div class="btn btn-sm btn-success">Pembayaran</div>
		</a>
	</div>
</div>
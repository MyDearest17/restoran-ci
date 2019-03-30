	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-3">
				<div class="list-group">
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/">Dashboard</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/meja">Kelola meja</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/user">Kelola user</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/menu">Kelola Menu</a>
					<a class="list-group-item list-group-item-action active adm" href="<?= base_url() ?>administrator/order">Lihat data Order</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/transaksi">Lihat data Transaksi</a>
				</div>
			</div>
			<div class="col-9">
			<div class="card border">
            <h5 class="card-header">DAFTAR PESANAN <span class ="float-right"><h6>ID Order = <?= $order['id_order'] ?></span></h6></h5>
			<table class ="table table-bordered table-hover">
					<thead>
						<tr>
							<th scope = "col">#</th>
							<th scope = "col">Nama Masakan</th>
							<th scope = "col">Jumlah</th>
							<th scope = "col">Keterangan</th>
							<th scope = "col">Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
			   		$i = 1 ;
			    	foreach ($detail_order as $do) : ?>
						<tr>
							<td><?= $i++ ?></td>
							<td><?= $do['nama_masakan']?></td>
							<td><?= $do['jumlah'] ?></td>
							<td><?= $do['keterangan'] ?></td>
							<td><span class ="badge badge-info"><?= $do['status_detail_order'] ?></span></td>
						</tr>
					<?php endforeach ; ?>
					</tbody>
				</table>
				<!-- data -->
				<?= form_open('Administrator/tambahTransaksi') ?>
				<input type ="hidden" name ="id_order" value ="<?= $order['id_order']?>">
				<input type ="hidden" name ="no_meja" value ="<?= $order['no_meja']?>">
				<input type ="hidden" name ="tanggal" value ="<?= $order['tanggal']?>">
				<input type ="hidden" name ="keterangan" value ="<?= $order['keterangan']?>">
				<input type ="hidden" name ="status_order" value ="<?= $order['status_order']?>">
				<input type ="hidden" name ="id_user" value ="<?= $order['id_user']?>">
				<div class="card-footer">No Meja = <?= $order['no_meja'] ?><button type ="submit"  class ="btn btn-info float-right btn-sm" <?php if( $order['status_order'] == 'selesai' ) :?> disabled <?php endif ;?>>KONFIRMASI</button> </div>
				<?= form_close() ?>
            </div>
			</div>
		</div>
	</div>
</div>


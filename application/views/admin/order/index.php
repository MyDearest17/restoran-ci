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
			<!-- TAMBAH -->
			<div class="card">
                <h4 class="card-header">DATA ORDER</h4>
            </div>
            <?php if($this->session->flashdata('flash')) : ?>
            <div class ="alert alert-success col-5 mt-3">
				Data Order <strong>berhasil </strong><?= $this->session->flashdata('flash')?>
			</div>
            <?php endif; ?>
			<!-- AKHIR TAMBAH -->
            <table class ="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID Order</th>
									<th>No Meja</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;
								foreach($order as $od) :?>
								<tr>
									<td><?= $no++;?></td>
									<td><?= $od['id_order'];?></td>
									<td><?= $od['no_meja'];?></td>
									<td><?= $od['tanggal'];?></td>
									<td> <span class ="badge 
									<?php if($od['status_order'] == 'terkirim'):?> badge-info
									<?php elseif($od['status_order'] == 'selesai') : ?> badge-success
									<?php elseif($od['status_order'] == 'tertunda') : ?> badge-danger
									<?php endif; ?>">
									<?= $od['status_order'];?></span>
									</td>
									<td>
										<a href ="<?= base_url();?>administrator/lihatDetail/<?= $od['id_order']; ?>" class ="btn btn-primary btn-sm">Lihat</a>
										<a href ="<?= base_url(); ?>administrator/hapusorder/<?= $od['id_order']; ?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

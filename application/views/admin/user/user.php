	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-3">
				<div class="list-group">
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/">Dashboard</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/meja">Kelola meja</a>
					<a class="list-group-item list-group-item-action active adm" href="<?= base_url() ?>administrator/user">Kelola user</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/menu">Kelola Menu</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/order">Lihat data Order</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/transaksi">Lihat data Transaksi</a>
				</div>
			</div>
            <div class="col-9">
			<!-- TAMBAH -->
			<div class="card">
				<div class="card-header">
					<h4>DATA USER <a href ="<?=base_url()?>administrator/tambah/" class ="btn btn-info btn-sm float-right">Tambah</a></h4>
				</div>
			</div>
			<?php if($this->session->flashdata('flash')) : ?>
			<div class ="alert alert-success col-5 mt-3">
				Data user <strong>berhasil </strong><?= $this->session->flashdata('flash')?>
			</div>
			<?php endif;?>
			<!-- MODAL -->
			<!-- MODAL TAMBAH -->
			<div class="modal fade" id="tambah" >
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Form Tambah User</h5>
					<button class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id ="tambah">
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button class="btn btn-primary">Tambah</button>
				</div>
				</div>
			</div>
			</div>
			<!-- LINK TAB -->
				<div class="bd-example bd-example-tabs mt-4">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
					<a class="nav-link active show" data-toggle="tab" href="#admin" role="tab">Admin</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#waiter" role="tab">Waiter</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kasir" role="tab">Kasir</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#owner" role="tab">Owner</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#pelanggan" role="tab">Pelanggan</a>
					</li>
				</ul>
				<!-- AKHIR -->
				<!-- TAB CONTENT ADMIN-->
				<div class="tab-content mt-4">
					<div class="tab-pane fade  active show" id="admin" role="tabpanel">
						<table class ="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID User</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Password</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;
								foreach($administrator as $adm) :?>
								<tr>
									<td><?= $no++;?></td>
									<td><?= $adm['id_user'];?></td>
									<td><?= $adm['nama_user'];?></td>
									<td><?= $adm['usernam'];?></td>
									<td><?= $adm['password'];?></td>
									<td>
										<a href ="<?= base_url();?>administrator/ubah/<?= $adm['id_user']; ?>" class ="badge badge-success">ubah</a>
										<a href ="<?= base_url(); ?>administrator/hapus/<?= $adm['id_user']; ?>" class = "badge badge-danger" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- AKHIR ADMIN -->
					<!-- TAB CONTENT WAITER -->
					<div class="tab-pane fade" id="waiter" role="tabpanel">
						<table class ="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID User</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Password</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;
								foreach($waiter as $wtr) :?>
								<tr>
									<td><?= $no++;?></td>
									<td><?= $wtr['id_user'];?></td>
									<td><?= $wtr['nama_user'];?></td>
									<td><?= $wtr['usernam'];?></td>
									<td><?= $wtr['password'];?></td>
									<td>
										<a href ="<?= base_url();?>administrator/ubah/<?= $wtr['id_user']; ?>" class ="badge badge-success">ubah</a>
										<a href ="<?= base_url(); ?>administrator/hapus/<?= $wtr['id_user']; ?>" class = "badge badge-danger" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- AKHIR WAITER -->
					<!-- TAB CONTENT KASIR -->
					<div class="tab-pane fade" id="kasir" role="tabpanel">
						<table class ="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID User</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Password</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;
								foreach($kasir as $ksr) :?>
								<tr>
									<td><?= $no++;?></td>
									<td><?= $ksr['id_user'];?></td>
									<td><?= $ksr['nama_user'];?></td>
									<td><?= $ksr['usernam'];?></td>
									<td><?= $ksr['password'];?></td>
									<td>
										<a href ="<?= base_url();?>administrator/ubah/<?= $ksr['id_user']; ?>" class ="badge badge-success">ubah</a>
										<a href ="<?= base_url(); ?>administrator/hapus/<?= $ksr['id_user']; ?>" class = "badge badge-danger" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- AKHIR KASIR -->
					<!-- TAB CONTENT OWNER -->
					<div class="tab-pane fade" id="owner" role="tabpanel">
						<table class ="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID User</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Password</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;
								foreach($owner as $own) :?>
								<tr>
									<td><?= $no++;?></td>
									<td><?= $own['id_user'];?></td>
									<td><?= $own['nama_user'];?></td>
									<td><?= $own['usernam'];?></td>
									<td><?= $own['password'];?></td>
									<td>
										<a href ="<?= base_url();?>administrator/ubah/<?= $own['id_user']; ?>" class ="badge badge-success">ubah</a>
										<a href ="<?= base_url(); ?>administrator/hapus/<?= $own['id_user']; ?>" class = "badge badge-danger" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- AKHIR OWNER -->
					<!-- TAB CONTENT PELANGGAN -->
					<div class="tab-pane fade" id="pelanggan" role="tabpanel">
						<table class ="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID User</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Password</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;
								foreach($pelanggan as $plg) :?>
								<tr>
									<td><?= $no++;?></td>
									<td><?= $plg['id_user'];?></td>
									<td><?= $plg['nama_user'];?></td>
									<td><?= $plg['usernam'];?></td>
									<td><?= $plg['password'];?></td>
									<td>
										<a href ="<?= base_url();?>administrator/ubah/<?= $plg['id_user']; ?>" class ="badge badge-success">ubah</a>
										<a href ="<?= base_url(); ?>administrator/hapus/<?= $plg['id_user']; ?>" class = "badge badge-danger" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- AKHIR PELANGGAN -->
				</div>
            </div>
		</div>
	</div>

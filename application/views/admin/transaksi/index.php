
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-3">
				<div class="list-group">
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/">Dashboard</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/meja">Kelola meja</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/user">Kelola user</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/menu">Kelola Menu</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/order">Lihat data Order</a>
					<a class="list-group-item list-group-item-action active adm" href="<?= base_url() ?>administrator/transaksi">Lihat data Transaksi</a>
				</div>
			</div>
			<div class="col-9">
            <!-- TRANSAKSI -->
            	<!-- TAMBAH -->
			<div class="card">
                <h4 class="card-header">DATA TRANSAKSI</h4>
            </div>
            <?php if($this->session->flashdata('flash')) : ?>
            <div class ="alert alert-success col-5 mt-3">
				Data Order <strong>berhasil </strong><?= $this->session->flashdata('flash')?>
			</div>
            <?php endif; ?>
			<!-- AKHIR TAMBAH -->
            <table class ="table table-bordered">
                <thead  class ="text-center">
                    <tr>
                        <th>#</th>
                        <th>ID Order</th>
                        <th>Tanggal</th>
                        <th width ="150px">Bayar</th>
                        <th>Total Bayar</th>
                        <th>Kembalian</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                    foreach($transaksi as $tr) :?>
                    <?= form_open('Administrator/updateTransaksi/') ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $tr['id_order'];?><input type ="hidden" name ="id_order" value ="<?= $tr['id_order'];?>"></td>
                        <td><?= $tr['tanggal'];?></td>
                        <td><input type="number" class ="form-control" name ="bayar" value ="<?= $tr['bayar'];?>"></td>
                        <td><?= $tr['total_harga'];?><input type ="hidden" name ="total_harga" value ="<?= $tr['total_harga'];?>"></td>
                        <td><?= $tr['kembalian'];?></td>
                        <td> <span class ="badge 
                        <?php if($tr['status_transaksi'] == 'belum bayar'):?> badge-danger
                        <?php else : ?> badge-success
                        <?php endif; ?>">
                        <?= $tr['status_transaksi'];?></span>
                        </td>
                        <td>
                            <button type ="submit" class ="btn btn-primary btn-sm">Bayar</button>
                            <a href ="<?= base_url(); ?>administrator/hapusorder/<?= $tr['id_order']; ?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Yakin akan dihapus!!');" >hapus</a>
                            <a href ="<?= base_url(); ?>administrator/hapusorder/<?= $tr['id_order']; ?>" class = "btn btn-info btn-sm">cetak</a>
                        </td>
                    </tr>
                    <?= form_close()?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            </div>
						
            <!-- AKHIR TRANSAKSI -->
		</div>
	</div>

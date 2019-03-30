	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-3">
				<div class="list-group">
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/">Dashboard</a>
					<a class="list-group-item list-group-item-action  active adm" href="<?= base_url() ?>administrator/meja">Kelola meja</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/user">Kelola user</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/menu">Kelola Menu</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/order">Lihat data Order</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/transaksi">Lihat data Transaksi</a>
				</div>
			</div>
			<div class="col-9">
            <!-- TAMBAH MEJA -->
            <div class="card">
                <h4 class="card-header">DATA MEJA <a href ="<?= base_url()?>administrator/tambahmeja" class ="btn btn-info btn-sm float-right">Tambah</a> </h4>
            </div>
            <?php if($this->session->flashdata('flash')) : ?>
            <div class ="alert alert-success col-5 mt-3">
				Data Meja <strong>berhasil </strong><?= $this->session->flashdata('flash')?>
			</div>
            <?php endif; ?>
            <!-- AKHIR TAMBAH MEJA -->
            <!-- MEJA -->
            <div class="row  justify mt-3">
            <?php foreach($meja as $mj ) : ?>
                    <div class="col-3">
                        <div class="card border-info mb-3">
                            <div class="card-body text-center">
                            <h2><?= $mj['no_meja']?></h2>
                            <p class ="card-subtitle mt-2 mb-3"><?= $mj['jumlah_orang'];?> Orang</p>
                            <p class ="badge badge-info"><?= $mj['status_meja'];?></p>
                            </div>
                            <div class="card-footer">
                                <a href ="<?= base_url()?>administrator/ubahmeja/<?= $mj['no_meja'] ?>" class ="btn btn-success btn-sm float-left">ubah<a>
                                <a href ="<?= base_url()?>administrator/hapusmeja/<?= $mj['no_meja'] ?>" class ="btn btn-danger btn-sm float-right" onclick = "return confirm('Yakin akan dihapus!!');">hapus<a>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>  
            </div>  
            </div>
            <!-- AKHIR MEJA -->
		</div>
	</div>

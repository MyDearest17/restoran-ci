
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-3">
				<div class="list-group">
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/">Dashboard</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/meja">Kelola meja</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/user">Kelola user</a>
					<a class="list-group-item list-group-item-action active adm" href="<?= base_url() ?>administrator/menu">Kelola Menu</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/order">Lihat data Order</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/transaksi">Lihat data Transaksi</a>
				</div>
			</div>
			<div class="col-9">
            <!-- TAMBAH MEJA -->
            <div class="card">
                <h4 class="card-header">DATA MENU <a href ="<?= base_url()?>administrator/tambahmenu" class ="btn btn-info btn-sm float-right">Tambah</a> </h4>
            </div>
            <?php if($this->session->flashdata('flash')) : ?>
            <div class ="alert alert-success col-5 mt-3">
				Data Menu <strong>berhasil </strong><?= $this->session->flashdata('flash')?>
			</div>
            <?php endif; ?>
            <!-- AKHIR TAMBAH MEJA -->
            <!-- MENU -->
            <div class="row">
            <?php foreach($menu as $mn) : ?>
                <div class="col-3 mb-3">
                <div class="card border-info mt-3">
                    <img class="card-img-top" src="<?=base_url('gambar/menu/').$mn['foto_masakan']?>" width = "150" height ="150">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $mn['nama_masakan']?></h5>
                        <p class="card-text">Rp. <?= number_format($mn['harga'])?>.00<br></p>
                        <span class="badge badge-primary"><?= $mn['status_masakan'] ?></span>
                    </div>
                        <div class="card-footer">
                        <a href ="<?= base_url()?>administrator/ubahmenu/<?= $mn['id_masakan'] ?>" class ="btn btn-success btn-sm float-left">ubah<a>
                        <a href ="<?= base_url()?>administrator/hapusmenu/<?= $mn['id_masakan'] ?>" class ="btn btn-danger btn-sm float-right" onclick = "return confirm('Yakin akan dihapus!!');">hapus<a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
						
            <!-- AKHIR MENU -->
		</div>
	</div>

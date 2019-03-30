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
			<div class="col-4">
                <div class="card border-info">
                    <h5 class="car-header mt-3 ml-3">Form Ubah Menu</h5>
                    <div class="card-body">
                        <form action ="" method ="post">
                            <input type ="hidden" name ="id_masakan" value ="<?=$menu['id_masakan'] ?>">
                            <div class ="form-group">
                                <label for ="nama_masakan">Nama Masakan</label>
                                <input type ="text" name="nama_masakan" id ="nama_masakan" class ="form-control" value ="<?=$menu['nama_masakan'] ?>" >
                                <small class ="form-text text-danger"><?= form_error('nama_masakan')?></small>
                            </div>
                            <div class ="form-group">
                                <label for ="harga">Harga</label>
                                <input type ="number" name="harga" id ="harga" class ="form-control" value ="<?=$menu['harga'] ?>">
                                <small class ="form-text text-danger"><?= form_error('harga')?></small>
                            </div>
                            <div class="form-group">
                            <div class ="form-group">
                                <label for ="status_masakan">Status Masakan</label>
                                <select name="status_masakan" id ="status_masakan" class ="form-control" value ="<?=$menu['status_masakan_masakan'] ?>">
                                <option>Tersedia</option>
                                <option>Habis</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Jenis</label><br>
                            <div class="form-check form-check-inline" >
                                <input type="radio" name="jenis_masakan" class="form-check-input" value="makanan" value ="<?=$menu['jenis_masakan'] ?>">
                                <label class="form-check-label">Makanan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jenis_masakan" class="form-check-input" value="minuman" value ="<?=$menu['jenis_masakan'] ?>">
                                <label class="form-check-label">Minuman</label>
                            </div>
                            <small class ="form-text text-danger"><?= form_error('harga')?></small>
                            <div class="form-group">
                                <label>Foto</label><br>
                                <input type="file" name="foto_masakan" value ="<?=$menu['foto_masakan'] ?>">
	                        </div>
                            <button type ="submit" name ="ubah" class ="btn btn-info float-right">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>

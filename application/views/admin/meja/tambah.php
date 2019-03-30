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
			<div class="col-4">
                <div class="card border-info">
                    <h5 class="car-header mt-3 ml-3">Form Tambah User</h5>
                    <div class="card-body">
                        <form action ="" method ="post">
                            <div class ="form-group">
                            <label for ="no_meja">NO Meja</label>
                            <input type ="text" name="no_meja" id ="no_meja" class ="form-control">
                            <small class ="form-text text-danger"><?= form_error('no_meja')?></small>
                            </div>
                            <div class ="form-group">
                            <label for ="jumlah_orang">Jumlah Orang</label>
                            <input type ="number" name="jumlah_orang" id ="jumlah_orang" class ="form-control">
                            <small class ="form-text text-danger"><?= form_error('jumlah_orang')?></small>
                            </div>
                            <div class ="form-group">
                            <label for ="status_meja">Status Meja</label>
                            <select name="status_meja" id ="status_meja" class ="form-control">
                            <option>Kosong</option>
                            </select>
                            </div>
                            <button type ="submit" name ="tambah" class ="btn btn-info float-right">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>

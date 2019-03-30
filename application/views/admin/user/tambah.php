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
            <div class="col-4">
                <div class="card border-info">
                    <h5 class="car-header mt-3 ml-3">Form Tambah User</h5>
                    <div class="card-body">
                    <form action ="" method ="post">
						<div class ="form-group">
						<label for ="nama">Nama User</label>
						<input type ="text" name="nama_user" id ="nama_user" class ="form-control">
                        <small class ="form-text text-danger"><?= form_error('nama_user')?></small>
						</div>
						<div class ="form-group">
						<label for ="usernam">Username</label>
						<input type ="text" name="usernam" id ="usernam" class ="form-control">
                        <small class ="form-text text-danger"><?= form_error('usernam')?></small>
						</div>
						<div class ="form-group">
						<label for ="password">Password</label>
						<input type ="text" name="password" id ="password" class ="form-control">
						<small class ="form-text text-danger"><?= form_error('password')?></small>
						</div>
						<div class ="form-group">
						<label for ="id_level">Level</label>
						<select name="id_level" id ="id_level" class ="form-control">
						<option value ="1">Administrator</option>
						<option value ="2">Waiter</option>
						<option value ="3">Kasir</option>
						<option value ="4">Owner</option>
						<option value ="5">Pelanggan</option>
						</select>
						</div>
                        <button type ="submit" name ="tambah" class ="btn btn-info float-right">Tambah</button>
					</form>
                    </div>
                </div>

            </div>
		</div>
	</div>

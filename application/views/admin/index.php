<content class="petugas">
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-3">
				<div class="list-group">
					<a class="list-group-item list-group-item-action active adm" href="<?= base_url() ?>administrator/">Dashboard</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/meja">Kelola meja</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/user">Kelola user</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/menu">Kelola Menu</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/order">Lihat data Order</a>
					<a class="list-group-item list-group-item-action" href="<?= base_url() ?>administrator/transaksi">Lihat data Transaksi</a>
				</div>
			</div>
			<div class="col-9">
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header bg-danger pt-5 pb-5">
								<i class="fas fa-user fa-5x text-white"></i>
							</div>
							<div class="card-body">
								<a href="<?= base_url() ?>/administrator/user">Kelola user</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header bg-success pt-5 pb-5">
								<i class="fas fa-list fa-5x text-white"></i>
							</div>
							<div class="card-body">
								<a href="<?= base_url() ?>/administrator/menu">Kelola menu</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header bg-warning pt-5 pb-5">
								<i class="fas fa-table fa-5x text-white"></i>
							</div>
							<div class="card-body">
								<a href="<?= base_url() ?>/administrator/meja">Kelola meja</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</content>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card border-danger mt-5">
				<div class="card-body">
					<h2 class="text-center">Login</h2>
					<?=form_open('login/proses_login_petugas')?>
						<div class="form-group">
							<label for="usernam">Username</label>
							<input type="text" name="usernam" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
                        <?php if ($this->session->flashdata('error')): ?>
			            <small class="form-text text-danger mb-4"><?=$this->session->flashdata('error')?></small>
			            <?php endif ?>
						<div class="form-group">
							<button type="submit" class="btn btn-block btn-danger">LogIn</button>
						</div>
					<?=form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
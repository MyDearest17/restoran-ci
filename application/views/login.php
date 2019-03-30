<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card border-success mt-5">
				<div class="card-body">
					<h2 class="text-center">Login</h2>
					<?=form_open('login/proses_login')?>
						<div class="form-group">
							<label for="usernam">Username</label>
							<input type="text" name="usernam" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<br>
                        <?php if ($this->session->flashdata('error')): ?>
                        <small class="form-text text-danger mb-4"><?=$this->session->flashdata('error')?></small>
			            <?php endif ?>
						<div class="form-group">
							<label for="no_meja">Kode Meja</label>
							<select name="no_meja" class="form-control">
								<?php foreach ($meja as $mj): ?>
									<option value="<?=$mj['no_meja']?>"><?=$mj['no_meja']?>(<?=$mj['jumlah_orang']?>orang)</option>
								<?php endforeach ?>
							</select>
							<small class ="form-text text-danger"> *Kode meja tertera pada meja</small>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-block btn-success">LogIn</button>
						</div>
					<?=form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
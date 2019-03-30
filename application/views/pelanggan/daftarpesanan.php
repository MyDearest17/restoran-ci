<div class ="container">
<!-- AWAL CONTAIER -->
	<?=form_open('pelanggan/updateOrder')?>
	<div class ="card border-dark mb-5 mt-5">
		<h4 class ="card-header pl-3 pt-3 pb-3">DAFTAR PESANAN <button type ="submit "class ="btn btn-success btn-sm float-right" 
						<?php if ($order['status_order']=='terkirim'): ?> disabled
						<?php elseif ($order['status_order']=='selesai'): ?> disabled
						<?php endif ?>>konfirmasi</button></h4>
	<?php foreach ($totalHarga as $total) :?>
	<input type ="hidden" value ="<?=$total->total_harga; ?>" name = "total_harga"> 
	<?php endforeach; ?>
		<?=form_close()?>
		<div class ="card-body">
			<table class="table table-hover">
			  <thead class =>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama Masakan</th>
			      <th scope="col">Jumlah</th>
			      <th scope="col">Keterangan</th>
			      <th scope="col">Harga</th>
			      <th scope="col" class ="text-center">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			   <?php
			   $i = 1 ;
			    foreach ($dataOrder as $data) : ?>

			   		<tr>
			   			<td><?= $i++ ?></td>	
			   			<td><?= $data->nama_masakan; ?></td>
			   			<td><?= $data->jumlah; ?></td>
			   			<td><?= $data->keterangan; ?></td>
			   			<td>Rp. <?= number_format($data->harga * $data->jumlah); ?>.00,-</td>
			   			<td class=" text-center"> <a href =" <?= base_url('pelanggan/deleteDetailOrder')."/".$data->id_detail_order ?>" class ="btn btn-outline-danger btn-sm">BATAL</a></td>
			   		</tr>
			   <?php endforeach; ?>
			   <tr>
			   		<td colspan="4" >Jumlah Harga</td>
			   		<?php foreach ($totalHarga as $total) :?>
			   		<td>Rp. <?= number_format($total->total_harga); ?>.00,-</td> 
			   		<?php endforeach; ?>
			   	</tr>
			   	<tr>
			   	</tr>
			  </tbody>
		</table>
		<td><a href="<?=base_url()?>pelanggan" class ="btn btn-info btn-sm">Tambah</a></td>
		</div>
	</div>
<!-- AKHIR CONTAINER -->
</div>

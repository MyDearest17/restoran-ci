<div class="container"><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!-- AWAL CONTAINER -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
 
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=base_url()?>gambar/slide1.jpg" height ="450" weight ="940" alt="First slide">
      <div class="carousel-caption d-none d-md-block teksmakan">
      <p>SELAMAT DATANG DI</p>
      <h3>- RIZKY CAFE -</h3>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url()?>gambar/slide3.jpg" height ="450" weight ="940" alt="Second slide">
      <div class="carousel-caption d-none d-md-block teksmakan">
      <p>SELAMAT MEMESAN :)</p>
      <h3>- RIZKY CAFE -</h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

  <div class="row">
    <?php foreach($menu as $mn): ?>
    <div class="col-md-3">
    <?=form_open('pelanggan/setDetailOrder') ?>
       <input type ="hidden" name ="id_masakan" value ="<?= $mn['id_masakan'] ?>">
       <input type ="hidden" name ="harga" value ="<?= $mn['harga'] ?>">
       <div class="card border-dark mt-4 mb-2">
            <img class="card-img-top" src="<?=base_url('gambar/menu/').$mn['foto_masakan']?>" width = "150" height ="150">
            <div class="card-body text-center">
                <h5 class="card-title"><?= $mn['nama_masakan']?></h5>
                <p class="card-text">Rp. <?= number_format($mn['harga'])?>.00,-<br></p>
            </div>
            <div class="card-footer center">
            <div class ="form-row">
              <div class ="col-8">  
                <input type ="text" placeholder ="Keterangan" name = "keterangan" class ="form-control float-left">
              </div>
              <div class ="col">
                <input type ="number" placeholder ="" name = "jumlah" class ="form-control float-left" required value ="1" min ="1">
              </div>
            </div>
                <button type ="submit" class ="btn btn-success btn-block float-right mt-3" <?php if($order['status_order'] == 'terkirim' || $order['status_order'] == 'selesai') : ?> disabled <?php endif ;?>>PESAN</button>
            </div>
        </div>
    <?= form_close();?>
    </div>
    <?php endforeach ?>
  </div>
<!-- AKHIR CONTAINER -->
</div>



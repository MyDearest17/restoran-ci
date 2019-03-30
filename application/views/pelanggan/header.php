<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url();?>assets/css/style.css">
    <script src=""></script>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-3" href="<?= base_url()?>pelanggan/index">RIZKY CAFE</a>
        <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link mr-3" href="<?= base_url()?>pelanggan">HOME</a>
      <a class="nav-item nav-link" href="<?= base_url()?>pelanggan/daftarpesanan">DAFTAR PESANAN</a>
      <a class="nav-item nav-link" href="<?= base_url()?>login/logout" onclick = "return confirm('Yakin akan Keluar!!');">KELUAR</a>
        </div>
    </div>
</nav>




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
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand ml-3" href="<?= base_url()?>administrator/index">RIZKY CAFE</a>
        <div class="navbar-nav ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success mr-3" type="submit">Search</button>
        <a href ="<?= base_url()?>login/logoutpetugas" onclick ="confirm('Yakin akan Keluar')" class ="btn btn-danger">keluar</a>
        </div>
    </div>
</nav>
    

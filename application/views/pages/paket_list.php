<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Bumi Mandiri - Booking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--     Fonts and icons     -->
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
</head>
<body>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php  echo base_url();?>"><b>BUMI MANDIRI</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown pull-right">
        <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
      </li>
    </ul>
  <a class="navbar-brand" href="#">Form Pemesanan</a>
  </div>
</nav>





<div class="container">
  <div class="content">
    <div class="row align-items-center mx-auto"  style="width: 75vw;">
      <h5 class="text-primary"><i class="fas fa-arrow-left"></i> Kembali</h5>
    </div>





    <div class="row text-center align-items-center mx-auto">
      <h2 class="align-items-center mx-auto">PILIH PROGRAM</h2>
    </div>





    <div class="row align-items-center mx-auto">
    <?php foreach ($res->result() as $post): ?>
        <div class="col-md-12">
          <div class="card">
            <form action="<?php  echo base_url("Booking/paket_detail/").$post->id;?>" method="get" enctype="multipart/form-data">
            <div class="card-header card-header-success">
              <input type='text' class="form-control" name="idpaket" value="<?php echo $_GET['idpaket'] ?>" hidden/>
              <input type='text' class="form-control" name="namapaket" value="<?php echo $_GET['namapaket'] ?>" hidden/>
              <h3 class="card-title"><b><?php echo $post->nama_program ?></b></h3>
              <p class="card-category">Lama Kegiatan: <b><?php echo $post->lama_kegiatan ?></b></p>
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  
                </div>
                <div class="row">
                  <div class="col-sm-3"><img style="max-width: 235px; height: auto;" src="<?php echo base_url();?>assets/img/people.jpg" alt=""></div>
                  <div class="col-sm-8">
                    <h3 class="card-title text-success">Fasilitas:</h3>
                    <p class="card-text"><?php echo $post->fasilitas ?></p>
                    <hr>
                    <h3 class="card-title text-success">Konsumsi:</h3>
                    <p class="card-text"><?php echo $post->konsumsi ?></p>
                    <input type="text" id="put" class="form-control" name="jumlahorg" value="<?php echo $post->jumlah_hari ?>" readonly="true" hidden="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <button type="submit" class="btn btn-warning pull-right">Pilih Paket</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
  </div>
</div>





<!-- JQuery  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Plugin for the momentJs  -->
<script src="<?php echo base_url();?>/assets/js/plugins/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Bumi Mandiri - User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
</head>


<?php $userriwayat=$userriwayat->row_array() ?>
<?php $userdata=$userdata->row_array() ?>





  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>BUMI MANDIRI</b></a>
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




<body>
<div class="container">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-body">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?php echo base_url();?>/upload/user/profile_photos/<?php echo $userdata['foto_profil']  ?>" />
                  </a>
                </div>
                  <h6 class="card-category text-gray">User Account</h6>
                  <h4 class="card-title"><?php echo $userdata['nama_depan']  ?> <?php echo $userdata['nama_belakang']  ?></h4>
                </div>
              </div>
              <div class="card card-profile">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">NAVIGATION</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?php echo base_url();?>">Ke Halaman Utama</a></li>
                        <li class="list-group-item"><a href="<?php echo base_url();?>">Ke Halaman Pemesanan</a></li>
                        <li class="list-group-item"><a href="<?php echo base_url('web/logout'); ?>">Logout</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                <?php echo form_open('Account/set_pembatalan');?>
                <h2 class="display-4">Form permohonan pembatalan</h2>
                <label for="fileupload">untuk Reservasi</label> 
                <input type="text" class="form-control-plaintext text-primary" name="kode" value="<?php echo $userriwayat['kode_reservasi'] ?>" style="font-size: 1.5rem;">
                <input type="text" class="form-control-plaintext text-primary" name="rid" value="<?php echo $userriwayat['id'] ?>" hidden>
                <hr class="my-4">
                <p class="lead">Apa alasan anda melakukan pembatalan?</p>
                <div class="form-check">
                  <input class="" type="radio" name="alasan" id="op1" value="Salah memasukan tanggal pelaksanaan kegiatan/program" checked>
                  <label class="form-check-label" for="op1">
                    Salah memasukan tanggal pelaksanaan
                  </label>
                </div>
                <div class="form-check">
                  <input class="" type="radio" name="alasan" id="op2" value="Salah memilih paket/program">
                  <label class="form-check-label" for="op2">
                    Salah memilih paket/program
                  </label>
                </div>
                <div class="form-check">
                  <input class="" type="radio" name="alasan" id="op3" value="Salah input jumlah peserta">
                  <label class="form-check-label" for="op3">
                    Salah input jumlah peserta
                  </label>
                </div>
                <div class="form-check">
                  <input class="" type="radio" name="alasan" id="op4" value="Lainnya">
                  <label class="form-check-label" for="op4">
                    Lainnya
                  </label>
                </div>
                <hr class="my-4">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="bmd-label-floating">Masukan no. rekening anda</label>
                      <input type="text" class="form-control" name="norek" required="ture">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Atas nama</label>
                      <input type="text" class="form-control" name="an" required="true">
                    </div>
                  </div>
                </div>
                <p>Pastikan data yang anda masukan benar.</p>
                <p class="lead">
                  <button type="submit" class="btn btn-primary btn-lg pull-right" href="#" role="button">Kirim</button>
                </p>
                </form>

                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
</div>

    <!-- JQuery  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

</body>


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




<body>


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
  
<div class="container">
    <div class="content">
        <div class="container-fluid">
                <?php foreach ($userdata->result() as $post): ?>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-body">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?php echo base_url();?>/assets/img/faces/marc.jpg" />
                  </a>
                </div>
                  <h6 class="card-category text-gray">User Account</h6>
                  <h4 class="card-title"><?php echo $post->nama_depan  ?></h4>
                  <a href="#pablo" class="btn btn-primary btn-round">Ganti Foto</a>
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
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('web/auth'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username"  value="<?php echo $post->username  ?>">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $post->email  ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Depan</label>
                          <input type="text" class="form-control" name="nama_depan" value="<?php echo $post->nama_depan  ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Belakang</label>
                          <input type="text" class="form-control" name="nama_belakang" value="<?php echo $post->nama_belakang  ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" name="alamat">Alamat</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <h6 class="card-category text-gray">Member sejak: <?php echo $post->tgl_reg  ?></h6>
                    <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
          <?php endforeach ?>
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Riwayat Transaksi</h4>
                  <p class="card-category">Transaksi yang pernah anda lakukan:</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Kode Reservasi</th>
                        <th>Program</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status </th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <?php foreach ($userriwayat->result() as $res): ?>
                        <tr>
                          <td><?php echo $res->kode_reservasi  ?> </td>
                          <td><?php echo $res->nama_program  ?> </td>
                          <td>
                            <?php
                            if (empty($res->bukti)) {
                              echo '<button type="button"  href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#showModal" disabled>
                            <i class="material-icons">close</i> Empty
                            </button>';
                            }
                            else{
                              echo '<button type="button"  href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#showModal" disabled>
                            <i class="material-icons">done</i> Uploaded
                            </button>';
                            }
                          ?>
                          </td>
                          <td><?php echo $res->pembayaran  ?></td>
                          <td class="td-actions text-right">
                            <a  href="<?php echo base_url() ?>account/upload_bukti/<?php echo $res->kode_reservasi ?>" class="btn btn-success btn-sm">
                            Upload Bukti
                            </a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<hr>

    <!-- JQuery  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

</body>
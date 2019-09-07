

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Bumi Mandiri - User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
</head>




<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url();?>"><b>BUMI MANDIRI</b></a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown pull-right">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
        </li>
      </ul>
    <a class="navbar-brand pull-right" href="#">User Profile</a>
    </div>
  </nav>
  
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
          <?php $userdata=$userdata->row_array() ?>
          <?php $hariini = date('Y-m-d'); ?>
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
                  <a href="#pablo" class="btn btn-primary btn-round" data-toggle="collapse" data-target="#collapsedContent1" aria-expanded="false" aria-controls="collapsedContent1">Ganti Foto</a>
                  <div class="collapse" id="collapsedContent1">
                    <?php echo form_open_multipart('Account/update_foto');?>
                    <input type="file" name="fileupload" id="fileupload">
                    <button type="submit" class="btn btn-sm btn-success btn-round">Upload</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card card-profile">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">NAVIGASI</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?php echo base_url();?>">Ke Halaman Utama</a></li>
                        <li class="list-group-item"><a href="<?php echo base_url();?>Booking">Ke Halaman Pemesanan</a></li>
                        <li class="list-group-item"><a href="<?php echo base_url('web/logout'); ?>" class="btn btn-danger btn-round">Logout</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">View/Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('Account/update_profile'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Depan</label>
                          <input type="text" class="form-control" name="namadepan" value="<?php echo $userdata['nama_depan']  ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Belakang</label>
                          <input type="text" class="form-control" name="namabelakang" value="<?php echo $userdata['nama_belakang']  ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username"  value="<?php echo $userdata['username']  ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">No. Telp (HP)</label>
                          <input type="text" class="form-control" name="username"  value="<?php echo $userdata['telp']  ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $userdata['email']  ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" name="alamat" value="<?php echo $userdata['alamat']  ?>">
                        </div>
                      </div>
                    </div>
                    <h6 class="card-category text-gray">Member sejak: <?php echo $userdata['tgl_reg']  ?></h6>
                    <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
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
                          <td><?php echo $res->pembayaran  ?><?php if(($res->pembayaran=='MENUNGGU PEMBAYARAN')){?>
                            <button type="button" class="btn btn-warning btn-link" rel="tooltip" title="lihat info rekening" data-toggle="modal" data-target="#openModal"><i class="material-icons">info</i></button>
                            <?php } ?></td>





                           <!-- Modal -->
                          <div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Informasi Rekening Transfer</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="modal-data">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <p class="card-category">Kami menyediakan metode pembayaran menggunakan bank transfer.</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <p class="card-category">Nama Bank</p>
                                      </div>
                                      <div class="col-md-9">
                                        <p class="card-category text-success">MANDIRI</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <p class="card-category">No. Rek</p>
                                      </div>
                                      <div class="col-md-9">
                                        <p class="card-category text-success">12908xxxxxxxxx</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <p class="card-category">A/N</p>
                                      </div>
                                      <div class="col-md-9">
                                        <p class="card-category text-success">BUMI MANDIRI</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                      <div class="col-md-12">
                                        <p class="card-category">Pastikan nomor rekening yang dituju adalah benar dan sesuai dengan data yang tertera diatas. jika mengalami kesulitan, segera <a href="" class="text-success"><b>hubungi kami</b></a> atau lihat <a href="" class="text-success"><b>Prosedur Pembayaran</b></a></p>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>





                          <td class="td-actions text-right">
                            <a  href="<?php echo base_url() ?>account/upload_bukti/<?php echo $res->kode_reservasi ?>" class="btn btn-success btn-sm <?php if(!($res->pembayaran=='MENUNGGU PEMBAYARAN')){echo "collapse";}  ?>" title="Upload bukti pembayaran">
                            <i class="material-icons">cloud_upload</i>
                            </a>
                            <a  href="<?php echo base_url() ?>account/bukti_pemesanan/<?php echo $res->kode_reservasi ?>" target="_blank" class="btn btn-info btn-sm <?php if(!($res->pembayaran=='LUNAS')){echo "collapse";}  ?>" title="Cetak bukti transaksi">
                            <i class="material-icons">print</i>
                            </a>
                            <a  href="<?php echo base_url() ?>account/pembatalan/<?php echo $res->kode_reservasi ?>" target="_blank" class="btn btn-danger btn-sm <?php if((!($res->pembayaran=='LUNAS')) || ($hariini>($res->tgl_masuk)) || ($res->pembayaran=='PERMINTAAN BATAL')){echo "collapse";}  ?>" title="Permohonan pembatalan">
                            <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <?php if (empty($userriwayat->result())) {?>
              
              <?php } elseif (!empty($userreview->result())) { ?>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ulasan</h4>
                  <p class="card-category">Bagaimana kesan anda:</p>
                </div>
                <div class="card-body">
                  <?php $userreview=$userreview->row_array()?>
                  <form action="<?php echo base_url('Account/update_testimoni'); ?>" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="bmd-label-floating">Pendapat Anda:</label>
                      <input type="text" class="form-control" name="id" value="<?php echo $userreview['id_testimoni'] ?>" hidden>
                      <input type="text" class="form-control" name="sum" value="<?php echo $userreview['summary'] ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="bmd-label-floating">Detail:</label>
                      <textarea class="form-control" name="para"><?php echo $userreview['paragraph'] ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit"  href="" class="btn btn-success btn-sm pull-right"><i class="material-icons">edit</i> Ubah</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <?php } else {  ?>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ulasan</h4>
                  <p class="card-category">Bagaimana kesan anda:</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('Account/set_testimoni'); ?>" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="bmd-label-floating">Pendapat Anda:</label>
                      <input type="text" class="form-control" name="sum" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="bmd-label-floating">Detail:</label>
                      <textarea class="form-control" name="para" value=""></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success btn-sm pull-right"><i class="material-icons">done</i>Simpan</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <?php } ?>
          </div>
        </div>
      </div>
</div>
<footer class="footer">
  <div class="container-fluid">
    <nav class="float-left">
      <ul>
        <li>
          <a href="https://www.creative-tim.com">
            UBSI - Tim Bumi
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>
      <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
    </div>
  </div>
</footer>

    <!-- JQuery  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

</body>
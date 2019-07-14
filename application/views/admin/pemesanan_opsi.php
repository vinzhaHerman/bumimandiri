<!DOCTYPE html>
<html lang="en">



    <div class="main-panel">
      <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('admin/logout') ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">





          



<?php 
  $res=$res->row_array();
  $resd=$resd->row_array();
 ?>

          





          <div class="">
              <div class="card">
                <div class="card-header card-header-info">
                  <h3 class="card-title">Data Pemesanan</h3>
                  <a href="<?php echo base_url();?>admin/pemesanan" class="btn btn-sm"><i class="material-icons">keyboard_return</i> Kembali</a>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url();?>admin/ubah_status" method="post">
                    <div class="row">
                      <div class="col-md-8 col-sm-8">
                        <div class="row">
                          <div class='col-sm-4'>
                            <label class="bmd-label-floating">Kode reservasi</label>
                            <input type="text" class="form-control-plaintext text-warning" name="kodereservasi"  value="<?php echo $res['kode_reservasi'] ?>" style="font-size: 1.8rem;" readonly>
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-sm-10 col-md-10'>
                            <label class="bmd-label-floating">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="namadepan"  value="<?php echo $resd['nama_depan'] ?>" readonly="">
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-sm-10 col-md-10'>
                            <label class="bmd-label-floating">Program yang dipesan</label>
                            <input type="text" class="form-control" name="namaprogram"  value="<?php echo $resd['nama_program'] ?>" readonly="">
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-sm-3 col-md-3'>
                            <label class="bmd-label-floating">Jumlah Orang</label>
                            <input type="text" class="form-control-plaintext text-warning" name="jumlah"  value="999" readonly="">
                          </div>
                          <div class='col-sm-3 col-md-3'>
                            <label class="bmd-label-floating">Planned Check in</label>
                            <input type="text" class="form-control" name="datein"  value="<?php echo $res['tgl_masuk'] ?>" readonly="" style="text-align: center;">
                          </div>
                          <div class='col-sm-3 col-md-3'>
                            <label class="bmd-label-floating">Planned Check out</label>
                            <input type="text" class="form-control" name="dateout"  value="<?php echo $res['tgl_keluar'] ?>" readonly="" style="text-align: center;">
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-sm-10 col-md-10'>
                            <label class="bmd-label-floating">Status Pemesanan</label>
                            <input type="text" class="form-control-plaintext text-success" name="pembayaran"  value="<?php echo $res['pembayaran'] ?>" style="font-size: 1.2rem;" readonly="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="card">
                          <div class="card-header card-header-warning">
                            <h6 class="card-title">Bukti Pembayaran</h6>
                          </div>
                          <div class="card-body" style="min-height: 280px;">
                              <div class="row"></div>
                              <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    </div>
                    <button type="submit" class="btn btn-success pull-right"><i class="material-icons">done</i> Konfirmasi Pembayaran</button>
                    <a href="<?php echo base_url();?>admin/ubah_status_batal/<?php echo $res['kode_reservasi'] ?>" class="btn btn-danger pull-right"><i class="material-icons">clear</i> Batalkan Transaksi</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
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
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
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
    </div>
  </div>

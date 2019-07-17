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
 ?>

          





          <div class="">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Edit Data Program</h3>
                  <a href="<?php echo base_url();?>admin/data_program" class="btn btn-sm"><i class="material-icons">keyboard_return</i> Kembali</a>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('admin/update_program'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="card">
                          <div class="card-header card-header-warning">
                            <h6 class="card-title">Thumbnail Program</h6>
                          </div>
                          <div class="card-body" style="min-height: 280px;">
                              <div class="row mx-auto">
                                <img src="<?php echo base_url().'upload/bukti/default.jpg'?>" alt="" class="img-thumbnail mx-auto" style="max-height: 250px;">
                              </div>
                              <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID program :</label>
                          <input type="text" class="form-control" name="id"  value="<?php echo $res['id']?>" readonly style="max-width: 120px;">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Program*</label>
                          <input type="text" class="form-control" name="namapaket" value="<?php echo $res['nama_program']?>">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Termasuk Dalam Paket:*</label>
                          <select id="selectPaket" name="paket" class="form-control">
                            <?php foreach ($respaket->result() as $paket):?>
                            <option value="<?php echo $paket->id ?>"><?php echo $paket->nama_paket ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating">Lama Kegiatan*</label>
                              <input type="text" class="form-control" name="namapaket" value="<?php echo $res['lama_kegiatan']?>">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">Jumlah Hari*</label>
                              <input type="text" class="form-control text-center" name="namapaket" value="<?php echo $res['jumlah_hari']?>">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Upload/Ganti Thumbnail*</label><br>
                          <a href="" class="btn btn-primary">Upload</a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga per orang* :</label>
                          <input type="text" class="form-control" name="id"  value="<?php echo $res['harga']?>">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Minimal Peserta*</label>
                              <input type="text" class="form-control text-center" name="namapaket" value="<?php echo $res['minkapasitas']?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Maksimal Peserta*</label>
                              <input type="text" class="form-control text-center" name="namapaket" value="<?php echo $res['kapasitas']?>">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Status* :</label>
                          <select name="status" class="form-control">
                            <option <?php if($res['status']=='1'){echo "selected"; } ?> value='1'>Available</option>
                            <option <?php if($res['status']=='0'){echo "selected"; } ?> value='0'>Unavailable</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label class="bmd-label-floating">Fasilitas*:</label>
                        <textarea name="deskripsi"><?php echo $res['fasilitas']?></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <label class="bmd-label-floating">Konsumsi*:</label>
                        <textarea name="deskripsi"><?php echo $res['konsumsi']?></textarea>
                      </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    <button class="btn btn-warning pull-right">Batal</button>
                    <label class="bmd-label-floating">*tidak boleh kosong<label>
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


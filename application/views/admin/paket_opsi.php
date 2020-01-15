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
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo base_url() ?>Admin/profile">Profile</a>
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
                  <h3 class="card-title">Edit Data Paket</h3>
                  <a href="<?php echo base_url();?>admin/data_paket" class="btn btn-sm"><i class="material-icons">keyboard_return</i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="card">
                          <div class="card-header card-header-warning">
                            <h6 class="card-title">Gambar Paket</h6>
                          </div>
                          <div class="card-body" style="min-height: 280px;">
                              <div class="row mx-auto">
                                <img src="<?php echo base_url().'upload/paket/jenis/'.$res['paket_img'];?>?>" onerror="this.onerror=null; this.src='<?php echo base_url().'upload/bukti/default.jpg'?>'" alt="" class="img-thumbnail mx-auto" style="max-height: 250px;">
                              </div>
                              <div class="row mx-auto">
                                <?php echo form_open_multipart('Admin/update_foto_paket');?>
                                <label>Update/Edit gambar</label>
                                <input type="file" name="fileupload" id="fileupload">
                                <input type="text" class="form-control" name="id"  value="<?php echo $res['id']?>" readonly style="max-width: 120px;" hidden>
                                <button type="submit" class="btn btn-success btn-sm btn-round pull-right" href="#" role="button">Upload</button>
                                </form>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <form action="<?php echo base_url('admin/update_paket'); ?>" method="post">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID paket :</label>
                          <input type="text" class="form-control" name="id"  value="<?php echo $res['id']?>" readonly style="max-width: 120px;">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Paket</label>
                          <input type="text" class="form-control" name="namapaket" value="<?php echo $res['nama_paket']?>">
                        </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label class="bmd-label-floating">Deskripsi:</label>
                        <textarea name="deskripsi"><?php echo $res['deskripsi']?></textarea>
                      </div>
                    </div>
                      </div>
                    </div>

                    <div class="clearfix">
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                  </div>
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


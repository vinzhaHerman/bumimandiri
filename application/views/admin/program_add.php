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





          




          





          <div class="">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Edit Data Program</h3>
                  <a href="<?php echo base_url();?>admin/data_program" class="btn btn-sm"><i class="material-icons">keyboard_return</i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                      <form action="<?php echo base_url('admin/set_program'); ?>" method="post">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Program*</label>
                          <input type="text" class="form-control" name="namaprogram">
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
                              <input type="text" class="form-control" name="lama">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">Jumlah Hari*</label>
                              <input type="text" class="form-control text-center" name="jml">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga per orang* :</label>
                          <input type="text" class="form-control" name="harga">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Minimal Peserta*</label>
                              <input type="text" class="form-control text-center" name="minkapa">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Maksimal Peserta*</label>
                              <input type="text" class="form-control text-center" name="maxkapa">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Status* :</label>
                          <select name="status" class="form-control">
                            <option value='1'>Available</option>
                            <option value='0'>Unavailable</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label class="bmd-label-floating">Fasilitas*:</label>
                        <textarea name="fasilitas"></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <label class="bmd-label-floating">Konsumsi*:</label>
                        <textarea name="konsumsi"></textarea>
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


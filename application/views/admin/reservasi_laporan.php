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
                <div class="card-header card-header-warning">
                  <h3 class="card-title pull-left">Laporan Data Paket</h3>
                  <a href="<?php echo base_url('admin/print_paket');?>" class="btn btn-danger btn-sm pull-right"><i class="fas fa-print"></i> Cetak Laporan</a>
                </div>
                <div class="card-body table-responsive">

                  <form action="<?php echo base_url('web/laporan-transaksi/pembayaran/print') ?>" method="post">
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="datein">Untuk Tanggal</label>
                        <input type='text' class="form-control" id='datetimepicker1' name="datein" required="true" />
                      </div>
                      <div class="col-lg-6">
                        <label for="datein">Sampai</label>
                        <input type='text' class="form-control" id='datetimepicker2' name="dateout" required="true" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="submit" class="btn btn-info pull-right">Cari</button>
                      </div>
                    </div>
                  </form>
                  <hr>
                  <table id="laporan" class="table table-hover  table-striped">
                    <thead class="text-warning">
                      <th>No.</th>
                      <th>Nama Paket</th>
                      <th>Deskripsi</th>
                    </thead>
                    <tbody><?php $no=1; ?>
                    <?php ?>
                      <tr>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                      </tr>
                    <?php ?></tbody>
                  </table>
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


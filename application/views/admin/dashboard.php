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
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Sedang Berlangsung</p>
                  <h3 class="card-title"><?php echo $totalreservasi; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Pelanggan terdaftar</p>
                  <h3 class="card-title"><?php echo $totalpelanggan; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons">local_offer</i> Tracked from Github -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_offer</i>
                  </div>
                  <p class="card-category">Pemesanan masuk</p>
                  <h3 class="card-title"><?php echo $totalpemesanan; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Email Subscriptions</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Completed Tasks</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-lg-9 col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ulasan Terbaru</h4>
                  <p class="card-category">Daftar ulasan oleh pelanggan</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-info">
                      <th>Nama</th>
                      <th>Ringkasan</th>
                      <th>Detail</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php foreach ($res->result() as $post): ?>
                      <tr>
                        <td><?php echo $post->nama_depan ?></td>
                        <td><?php echo $post->summary ?></td>
                        <td><?php echo $post->paragraph ?></td>
                        <td>
                          <a href="<?php echo base_url() ?>Admin/publish_testimoni/<?php echo $post->id_testimoni?>" rel="tooltip" title="Publikasi" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </a>
                          <a href="<?php echo base_url() ?>Admin/delete_testimoni/<?php echo $post->id_testimoni?>" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Ulasan</p>
                  <h3 class="card-title"><?php echo $res->num_rows(); ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <a href="#pablo">Terpublikasi</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9 col-md-9">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Permintaan Pembatalan oleh pelanggan</h4>
                  <p class="card-category">Daftar Permintaan Pembatalan oleh pelanggan</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-info">
                      <th>Kode Res.</th>
                      <th>Pelanggan</th>
                      <th>Alasan</th>
                      <th>No rek</th>
                      <th>A/N</th>
                    </thead>
                    <tbody>
                      <?php foreach ($pembatalan->result() as $pb): ?>
                      <tr>
                        <td width="30px">
                          <a href="<?php echo base_url() ?>Admin/opsi_pemesanan/<?php echo $pb->kode_reservasi  ?>" class="btn btn-sm btn-warning">
                                <?php echo $pb->kode_reservasi ?>
                              </a>
                        </td>
                        <td><?php echo $pb->nama_depan ?></td>
                        <td><?php echo $pb->alasan ?></td>
                        <td><?php echo $pb->norek ?></td>
                        <td><?php echo $pb->an ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Pembatalan</p>
                  <h3 class="card-title"><?php echo $pembatalan->num_rows(); ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <a href="#pablo">Dari </a> -->
                  </div>
                </div>
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
  
  


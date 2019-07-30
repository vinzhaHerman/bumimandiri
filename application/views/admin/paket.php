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
                  <h3 class="card-title">Data Paket</h3>
                  <a href="<?php echo base_url() ?>admin/tambah_paket" class="btn btn-warning btn-sm">+ Tambah Paket</a>
                </div>
                <div class="card-body table-responsive">
                  <table id="myTable" class="table table-hover  table-striped">
                    <thead class="text-primary">
                      <th>No.</th>
                      <th>Nama Paket</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody><?php $no=1; ?>
                    <?php 
                      function word_limit($string, $word_limit){
                        $words = explode(" ",$string);
                        return implode(" ",array_splice($words,0,$word_limit));
                      }
                      foreach(array_slice($res->result(), 0, 10) as $post ): 
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $post->nama_paket?></td>
                        <td><?php echo word_limit($post->deskripsi, 8);?></td>
                        <td class="td-actions text-right">
                          <a href="<?php echo base_url() ?>Admin/ubah_paket/<?php echo $post->id?>" rel="tooltip" title="Opsi" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">settings</i>
                          </a>
                          <button type="button" class="btn btn-danger pull-right btn-link" rel="tooltip" title="hapus" data-toggle="modal" data-target="#<?php echo $post->id?>"><i class="material-icons">close</i></button>
                        </td>
                      </tr>
                      <!-- Modal -->
                      <div class="modal fade" id="<?php echo $post->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi pembatalan transaksi</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="modal-data">
                                <div class="row">
                                  <div class="col-md-2">
                                    <i class="material-icons" style="font-size: 4rem; color: red;">info</i>
                                  </div>
                                  <div class="col-md-10">
                                    Anda yakin ingin menghapus data? Data yang sudah dihapus tidak dapat dikembalikan!
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn" data-dismiss="modal">Kembali</button>
                              <a href="<?php echo base_url() ?>Admin/delete_paket/<?php echo $post->id?>" class="btn btn-danger">
                                <i class="material-icons">close</i> Hapus
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal -->
                    <?php endforeach; ?></tbody>
                  </table>
                </div>
              </div>
            </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  <canvas id="myChart" width="80" height="30"></canvas>
                </div>
                <div class="row">
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
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});
</script>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          </div>
        </div>
      </footer>
    </div>
  </div>


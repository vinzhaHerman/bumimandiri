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
                <div class="card-header card-header-info">
                  <h3 class="card-title">Data Pemesanan</h3>
                </div>
                <div class="card-body table-responsive">
                  <table id="myTable" class="table table-hover  table-striped">
                    <thead class="text-info">
                      <th>No.</th>
                      <th>Kode Reservasi</th>
                      <th>Atas Nama</th>
                      <th>Program</th>
                      <th>Bukti Pembayaran</th>
                      <th>Status</th>
                      <th></th>
                    </thead>
                    <tbody><?php $no=1; ?><?php foreach ($res->result() as $post): ?>
                      <tr>
                        <td><?php echo $no++  ?></td>

                        <td><?php echo $post->kode_reservasi  ?></td>

                        <td><?php echo $post->nama_depan  ?></td>

                        <td><?php echo $post->nama_program  ?></td>

                        <td class="text-center">




                          <?php
                            if (empty($post->bukti)) {
                              echo '<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#showModal" disabled>
                            <i class="material-icons">close</i> Empty
                            </button>';
                            }
                            else{
                              echo '<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#'.$post->kode_reservasi.'">
                            <i class="material-icons">done</i> Uploaded
                            </button>';
                            }
                          ?>





                            <!-- Modal -->
                          <div class="modal fade" id="<?php echo $post->kode_reservasi  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Bukti Pembayaran</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="modal-data">
                                  	<img src="<?php echo base_url().'upload/bukti/'.$post->bukti?>" onerror="this.onerror=null; this.src='<?php echo base_url().'upload/bukti/default.jpg'?>'" alt="" class="img-thumbnail mx-auto" style="max-height: 250px;">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>





                        </td>
                        <td class="status-pembayaran"><?php echo $post->pembayaran  ?></td>
                        <td class="td-actions text-right">




                          <?php
                            // if ($post->pembayaran == 'LUNAS' && !empty($post->bukti) ) {
                            //   echo '<button type="button" rel="tooltip" title="Batalkan Transaksi" class="btn btn-warning batal" disabled>
                            //     <i class="material-icons">close</i> Batal
                            //   </button> <button type="button" rel="tooltip" title="Konfirmasi" class="btn btn-success konfirmasi" disabled>
                            //     <i class="material-icons">done</i> Konfirmasi
                            //   </button>';
                            // }
                            // elseif (empty($post->bukti)) {
                            //   echo '<button type="button" rel="tooltip" title="Batalkan Transaksi" class="btn btn-warning batal">
                            //     <i class="material-icons">close</i> Batal
                            //   </button> <button type="button" rel="tooltip" title="Konfirmasi" class="btn btn-success konfirmasi" disabled>
                            //     <i class="material-icons">done</i> Konfirmasi
                            //   </button>';
                            // }
                            // else{
                            //   echo '<button type="button" rel="tooltip" title="Batalkan Transaksi" class="btn btn-warning batal">
                            //     <i class="material-icons">close</i> Batal
                            //   </button> <button type="button" rel="tooltip" title="Konfirmasi" class="btn btn-success konfirmasi">
                            //     <i class="material-icons">done</i> Konfirmasi
                            //   </button>';
                            // }
                          ?>





                              <!-- <button type="button" rel="tooltip" title="Batalkan Transaksi" class="btn btn-warning batal">
                                <i class="material-icons">close</i> Batal
                              </button>
                              <button type="button" rel="tooltip" title="Konfirmasi" class="btn btn-success konfirmasi">
                                <i class="material-icons">done</i> Konfirmasi
                              </button> -->
                              <a href="<?php echo base_url() ?>Admin/opsi_pemesanan/<?php echo $post->kode_reservasi  ?>" rel="tooltip" title="Lihat Detail" class="btn btn-success konfirmasi">
                                <i class="material-icons">settings</i> Opsi
                              </a>
                            </td>
                      </tr>
                    <?php endforeach; ?></tbody>
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




              $(document).ready(function(){
              $('#showModal').on('show.bs.modal', function (e) {
              var getDetail = $(e.relatedTarget).data('id');
              /* fungsi AJAX untuk melakukan fetch data */
              $.ajax({
                  type : 'post',
                  url : 'foto_modal.php',
                  /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                  data :  'getDetail='+ getDetail,
                  /* memanggil fungsi getDetail dan mengirimkannya */
                  success : function(data){
                  $('.modal-data').html(data);
                  /* menampilkan data dalam bentuk dokumen HTML */
                  }
              });
              });
              });
            </script>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          </div>
        </div>
      </footer>
    </div>
  </div>


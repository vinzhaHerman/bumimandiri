<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url();?>/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?php echo base_url()?>Admin" class="simple-text logo-normal">
          Bumi Mandiri
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>Admin">
              <i class="material-icons">dashboard</i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>Admin/pemesanan">
              <i class="material-icons">calendar_today</i>
              <p>Pemesanan</p>
            </a>
          </li>





          

          <!-- <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>Admin/reservasi">
              <i class="material-icons">library_books</i>
              <p>Reservasi</p>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
              <i class="material-icons">library_books</i>
              <p>Reservasi</p>
            </a>
            <div class="collapse" id="submenu1" aria-expanded="false">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/waiting_list"><i class="material-icons">library_books</i>Daftar Tunggu</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/reservasi"><i class="material-icons">library_books</i>Sedang Berlangsung</a></li>
                </ul>
            </div>
          </li>
          <?php if ($this->session->userdata('s_level') == "1") {?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#submenu2" data-toggle="collapse" data-target="#submenu2">
              <i class="material-icons">folder</i>
              <p>Data Master</p>
            </a>
            <div class="collapse" id="submenu2" aria-expanded="false">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/data_paket"><i class="material-icons">folder_open</i>Data Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/data_program"><i class="material-icons">folder_open</i></i>Data Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/data_petugas"><i class="material-icons">folder_open</i>Data Petugas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/data_pelanggan"><i class="material-icons">folder_open</i>Data Pelanggan</a></li>
                </ul>
            </div>
          </li>
          <?php } else { ?><?php } ?>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>Admin/kelola_blog">
              <i class="material-icons">message</i>
              <p>Blogs</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">perm_media</i>
              <p>Gallery</p>
            </a>
          </li> -->





          <li class="nav-item">
            <a class="nav-link collapsed" href="#submenu3" data-toggle="collapse" data-target="#submenu3">
              <i class="material-icons">archive</i>
              <p>Laporan</p>
            </a>
            <div class="collapse" id="submenu3" aria-expanded="false">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/laporan_reservasi"><i class="material-icons">calendar_today</i>Data Reservasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Admin/laporan_paket"><i class="material-icons">move_to_inbox</i>Data Paket</a></li>
                </ul>
            </div>
          </li>





          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#submenu4" data-toggle="collapse" data-target="#submenu4">
              <i class="fas fa-cog"></i>
               <p>Settings</p>
            </a>
            <div class="collapse" id="submenu4" aria-expanded="false">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item"><a class="nav-link py-0" href="#">Profile</a></li>
                    <li class="nav-item">
                        <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">Account</a>
                        <div class="collapse" id="submenu1sub1" aria-expanded="false">
                            <ul class="flex-column nav pl-4">
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="#">
                                        <i class="fa fa-fw fa-clock-o"></i> Ganti Password
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="#">
                                        <i class="fa fa-fw fa-dashboard"></i> Ganti email
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="#">
                                        <i class="fa fa-fw fa-bar-chart"></i> Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
          </li> -->





        </ul>
      </div>
    </div>
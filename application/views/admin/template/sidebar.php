<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url();?>/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://localhost/bumimmandiri/admin" class="simple-text logo-normal">
          Bumi Mandiri
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/bumimandiri/Admin">
              <i class="material-icons">dashboard</i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">calendar_today</i>
              <p>Reservasi</p>
            </a>
          </li>





          

          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>on - progress</p>
            </a>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/bumimandiri/Admin/kelola_blog">
              <i class="material-icons">content_paste</i>
              <p>Blogs</p>
            </a>
          </li>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/bumimandiri/Admin/data_paket">
              <i class="material-icons">list</i>
              <p>Data Paket</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">perm_media</i>
              <p>Gallery</p>
            </a>
          </li>





          <li class="nav-item">
            <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
              <i class="fas fa-print"></i>
              <p>Laporan</p>
            </a>
            <div class="collapse" id="submenu1" aria-expanded="false">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-users"></i>Data Pengunjung</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-calendar-alt"></i>Data Reservasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-stream"></i>Data Paket</a></li>
                </ul>
            </div>
          </li>





          <li class="nav-item">
            <a class="nav-link collapsed" href="#submenu2" data-toggle="collapse" data-target="#submenu2">
              <i class="fas fa-cog"></i>
               <p>Settings</p>
            </a>
            <div class="collapse" id="submenu2" aria-expanded="false">
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
          </li>





        </ul>
      </div>
    </div>
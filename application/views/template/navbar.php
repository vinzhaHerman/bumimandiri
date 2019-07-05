<div class="top-logo-container"><a href="http://localhost/bumimandiri" ><img class="top-logo" src="<?php echo base_url();?>assets/logos/mid_logo.png"></a></div>

    <nav class="navbar">
    	<div class="nav-items">
        <ul>
            <li class="open-slide"><a onclick="openSlideMenu()"><i class="fas fa-bars"></i><a class="menu-text" onclick="openSlideMenu()">MENU</a></a></li>
            <!-- <li class="open-slide"><a class="menu-open" style="cursor: pointer"><i class="fas fa-bars"></i><a>MENU</a></a></li> -->
            <?php if ($this->session->userdata('status') == "login") {?>

            <li><a href="<?php echo base_url('web/logout'); ?>" class="right border-button">Logout</a></li>
            <li><a href="http://localhost/bumimandiri/login" class="right border-button">My Account</a></li>
            <li><a href="http://localhost/bumimandiri/register" class="right fill-button">Pesan Sekarang</a></li>

            <?php } else { ?>

            <li><a href="#" class="right lang-button">IDN</a></li>
            <li><a href="http://localhost/bumimandiri/login" class="right border-button">Login</a></li>
            <li><a href="http://localhost/bumimandiri/register" class="right fill-button">Daftar</a></li>

            <?php } ?>

        </ul>
    	</div>
    </nav>
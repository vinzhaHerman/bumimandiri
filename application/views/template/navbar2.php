<?php if ($this->session->userdata('status') == "login"):?>

    <div id="navcon" class="navbar-con">
    <div id="nav-icon-open"><span></span><span></span><span></span><span></span></div>
    <span class="pro-pic"></span>
    <div class="nav-drop">
        <span class="username" style="cursor: default;"><?php echo $this->session->userdata('nama_depan') ?> ▾</span>
        <ul class="dropdown">
            <li>
              <a href="<?php echo base_url(); ?>Account">Profile</a>
            </li>
            <li>
              <a href="">Change Password</a>
            </li>
            <hr>
            <li>
              <a href="<?php echo base_url('web/logout'); ?>">Logout</a>
            </li>
        </ul>
    </div>
</div>

<?php else: ?>

    <div id="navcon" class="navbar-con">
    <div id="nav-icon-open"><span></span><span></span><span></span><span></span></div>
        
    <a href="<?php echo base_url(); ?>register" class="cta"><button class="tmb tmb-md tmb-round tmb-flat">Daftar</button></a>
    <a href="<?php echo base_url(); ?>login" class="cta"><button class="tmb tmb-md tmb-border tmb-round tmb-flat">Login</button></a>
</div>

<?php endif; ?>
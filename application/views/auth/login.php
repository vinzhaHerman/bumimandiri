    <?php //echo validation_errors(); ?>
    <div class="login-div" style="width: 28rem;">
      <div class="row">
        <div class="logo"></div>
      </div>
      <div class="row align-item-center mx-auto">
        <div class="col-md-12"><h3 class="text-center">Login</h3></div>
      </div>
        <?php           
          if($message=$this->session->flashdata('message')):
        ?>
        <div class="col-lg-12">
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
              <?php echo $message ?>
          </div>
        </div>
        <?php endif; ?>
        <?php           
          if($message=$this->session->flashdata('daftar')):
        ?>
        <div class="col-lg-12">
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
              <?php echo $message ?>
          </div>
        </div>
        <?php endif; ?>
      <?php echo form_open('Web/auth'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Username</label>
            <input type="text" class="form-control" name="username"  required="true">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Kata sandi</label>
            <input type="password" class="form-control" name="password" required="true">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><p style="margin: 24px 0 24px 0;">Belum punya akun? <a href="<?php echo base_url();?>Register" class="text-success">Daftar</a></p></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-info btn-block">Masuk</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php
          $previous = "javascript:history.go(-1)";
          if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
          }
          ?>
          <a href="<?= $previous ?>" class="btn btn-warning btn-block">Kembali</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><label class="pull-right" style="margin: 24px 0 0 0;"><a href="<?php echo base_url();?>Lupa_password">Lupa password?</a></label></div>
      </div>
      <?php echo form_close(); ?>
    </div>
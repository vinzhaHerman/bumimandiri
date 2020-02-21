    <?php //echo validation_errors(); ?>
    <div class="login-div">
      <div class="row">
        <div class="logo"></div>
        <div class="col-lg-12">
          <?php           
            if($message=validation_errors()):
          ?>
          <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
              <?php echo validation_errors(); ?>
          </div>
          <?php endif; ?>
          <?php           
            if($email=$this->session->flashdata('email')):
          ?>
            <div class="col-lg-12">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                  <?php echo $email ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="row align-item-center mx-auto">
        <h3>Daftar Akun</h3>
      </div>
      <?php echo form_open('Register/daftar'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <!-- <label class="bmd-label-floating">Email</label> -->
            <input type="text" placeholder="Email anda. contoh: example@gmail.com" class="form-control" name="email">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Nama Depan" class="form-control" name="namadepan" required="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Nama Belakang" class="form-control" name="namabelakang" required="true">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <!-- <label class="bmd-label-floating">Nama Pengguna/username</label> -->
            <input type="text" placeholder="Nama Pengguna/Username" class="form-control" name="username" required="true">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <!-- <label class="bmd-label-floating">Password</label> -->
            <input type="password" class="form-control" placeholder="Kata Sandi" name="password" required="true">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <!-- <label class="bmd-label-floating">Ketik ulang password</label> -->
            <input type="password" class="form-control" placeholder="Ketik ulang kata sandi" name="confirm_password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><p>Sudah punya akun? <a href="<?php echo base_url();?>Login" class="text-success">Login</a></p></div>
      </div>
      <div class="row">
        <div class="col-md-12"><label>Dengan mendaftar anda menyetujui <a href="">syarat & ketentuan</a> yang berlaku</label></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-success btn-block">Daftar</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
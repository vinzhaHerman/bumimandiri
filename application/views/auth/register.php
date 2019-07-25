
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/auth.css">
  <title>Daftar</title>
</head>
<body>
  <div class="main-wrapper">
    <div class="form-wrapper">
    <?php echo form_open('Register/daftar'); ?>
      <div class="container">
        <div class="imgcontainer-register">
          <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar-register">
        </div>
      <h1 class="form-title">Daftar</h1>
      <?php echo form_error('namadepan'); ?>
      <input type="text" placeholder="Nama Depan" name="namadepan">
      <?php echo form_error('namabelakang'); ?>
      <input type="text" placeholder="Nama Belakang" name="namabelakang">
      <?php echo form_error('username'); ?>
      <input type="text" placeholder="Masukan username anda" name="username">
      <?php echo form_error('email'); ?>
      <input type="text" placeholder="Email address" name="email">
      <?php echo form_error('password'); ?>
      <input type="password" placeholder="Password" name="password">
      <?php echo form_error('confirm_password'); ?>
      <input type="password" placeholder="Ketik Ulang Password" name="confirm_password">

      <p class="agreement">Saya menyetujui <a href="http://localhost/bumimandiri/syaratdanketentuan" style="color:dodgerblue">Syarat dan Ketentuan</a> yang berlaku.</p>

      <div class="clearfix">
        <button type="submit" class="positive-button">Daftar</button>
        <a href="http://localhost/bumimandiri/"><button type="button" class="negative-button">Batal</button></a>
      </div>
    </div>
  <?php echo form_close(); ?>
  </div>
</div>
</body>
</html>
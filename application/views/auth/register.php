<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
    <form action="<?php echo base_url('Register/daftar');?>" method="post">
      <div class="container">
        <div class="imgcontainer-register">
          <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar-register">
        </div>
      <h1 class="form-title">Daftar</h1>
      <input type="text" placeholder="Nama Depan" name="namadepan" required>

      <input type="text" placeholder="Nama Belakang" name="namabelakang" required>

      <input type="text" placeholder="Masukan username anda" name="username" required>

      <input type="text" placeholder="Email address" name="email" required>

      <input type="password" placeholder="Password" name="password" required>

      <input type="password" placeholder="Ketik Ulang Password" name="confirm_password" required>

      <p class="agreement">Saya menyetujui <a href="http://localhost/bumimandiri/syaratdanketentuan" style="color:dodgerblue">Syarat dan Ketentuan</a> yang berlaku.</p>

      <div class="clearfix">
        <button type="submit" class="positive-button">Daftar</button>
        <a href="http://localhost/bumimandiri/"><button type="button" class="negative-button">Batal</button></a>
      </div>
    </div>
  </form>
  </div>
</div>
</body>
</html>
<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/auth.css">
  <title>Register</title>
</head>
<body>
  <div class="main-wrapper">
    <div class="form-wrapper">
    <form action="action_page.php">
      <div class="container">
        <div class="imgcontainer-register">
          <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar-register">
        </div>
      <h1 class="form-title">Sign Up</h1>
      <input type="text" placeholder="Nama Lengkap" name="name" required>

      <input type="text" placeholder="Masukan username anda" name="user" required>

      <input type="text" placeholder="Email address" name="email" required>

      <input type="password" placeholder="Password" name="psw" required>

      <input type="password" placeholder="Ketik Ulang Password" name="psw-repeat" required>

      <input type="text" placeholder="Nomor Telepon" name="no_telp" required>

      <p class="agreement">Saya menyetujui <a href="#" style="color:dodgerblue">Syarat dan Ketentuan</a> yang berlaku.</p>

      <div class="clearfix">
        <button type="submit" class="positive-button">Sign Up</button>
        <a href="http://localhost/PBumiMandiri/"><button type="button" class="negative-button">Cancel</button></a>
      </div>
    </div>
  </form>
  </div>
</div>
</body>
</html>
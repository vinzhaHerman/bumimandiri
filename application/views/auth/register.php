<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css">
  <title>Register</title>
</head>
<body>
 <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up Form</h1>
    <p></p>
    <hr>
    <label for="name"><b>Nama</b></label>
    <input type="text" placeholder="Input Name" name="name" required>

    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Ketik Ulang Password" name="psw-repeat" required>

    <label for="no_telp"><b>Telepon</b></label>
    <input type="text" placeholder="Nomor Telepon" name="no_telp" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>Dengan anda membuat akun, berarti ada setuju dengan segala kesepakatan yang sudah dibuat oleh Bumi Mandiri<br>
    Untuk informasi lebih lanjut, tolong kunjungi <a href="#" style="color:dodgerblue">Tentang Kami</a>.</p>

    <div class="clearfix">
      <a href="http://localhost/PBumiMandiri/"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
<!-- login ---->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/auth.css">
  <title></title>
</head>
<body>
<div class="main-wrapper">
  <div class="form-wrapper">
  <form action="<?php echo base_url('web/auth'); ?>" method="post">
  <div class="imgcontainer">
    <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <div class="form-container">
    <label for="username">Nama Pengguna</label>
    <input type="text" placeholder="Enter Username" name="username" required>
    </div>

    <div class="form-container">
    <label for="password">Kata Sandi</label>
    <input type="password" placeholder="Enter Password" name="password" required>
    </div>

    <p class="mid-text">Belum punya akun? <a href="http://localhost/bumimandiri/register">daftar sekarang</a></p>
    <button class="positive-button" type="submit">Masuk</button>
  </div>

  <div class="button-container">
    <a class="links" href="http://localhost/bumimandiri/web"><button type="button" class="negative-button">Kembali</button></a>
    <p class="bottom-text"><a href="<?php echo base_url();?>Lupa_password">Lupa password?</a></p>
  </div>
  </form>
  </div>
</div>
</body>
</html>

<!--end login section-->
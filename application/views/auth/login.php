<!-- login ---->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
  <title></title>
</head>
<body>
<div class="main-wrapper">
  <form action="action_page.php">
  <div class="imgcontainer">
    <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <div class="form-container">
    <label for="username">Username</label>
    <input type="text" placeholder="Enter Username" name="username" required>
    </div>

    <div class="form-container">
    <label for="password">Password</label>
    <input type="password" placeholder="Enter Password" name="password" required>
    </div>

    <button class="positive-button" type="submit">Login</button>
  </div>

  <div class="container">
    <a href="http://localhost/PBumiMandiri/web"><button type="button" class="negative-button">Kembali</button></a>
    <p class="bottom-text">Forgot Password?</p>
  </div>
  </form>
</div>
</body>
</html>

<!--end login section-->
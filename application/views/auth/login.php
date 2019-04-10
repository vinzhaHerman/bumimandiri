<!-- login ---->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
  <title></title>
</head>
<body>
  <form action="action_page.php">
  <div class="imgcontainer">
    <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar">
    <h3>Welcome To Bumi Mandiri</h3>
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="http://localhost/PBumiMandiri/web"><button type="button" class="cancelbtn">Kembali</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>

<!--end login section-->
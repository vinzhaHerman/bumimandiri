<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" 
	integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" 
	crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/auth_admin.css">
</head>
<body><div class="overlay">
<div class="main-wrapper">
  <div class="form-wrapper">
  	<form action="action_page.php">
  	<div class="imgcontainer">
    	<img src="<?php echo base_url();?>assets/logos/blue.png" alt="Avatar" class="avatar">
  	</div>

  	<div class="container">
    	<div class="form-container">
    	<label for="username">Username</label>
    	<input type="text" placeholder="Enter Admin Username" name="username" required>
    	</div>

    	<div class="form-container">
    	<label for="password">Password</label>
    	<input type="password" placeholder="Enter Admin Password" name="password" required>
    	</div>

    	<button class="positive-button" type="submit">Login</button>
    	<a class="links" href="http://localhost/PBumiMandiri/web"><button type="button" class="negative-button">Kembali</button></a>
    	<p class="bottom-text">Admin Systems.</a>
  	</div>
  	</form>
  </div>
</div>
</div></body>
</html>
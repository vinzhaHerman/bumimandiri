 <html>   
  <head>   
   <meta charset="UTF-8">   
   <title>   
     <?= $title;?>  
   </title> 
   <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/auth.css">  
 </head>   
 <body>   
  

  <div class="main-wrapper">
  <div class="form-wrapper">
  <div class="imgcontainer">
    <img src="<?php echo base_url();?>assets/logos/mixed.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <h4 style="text-align: center;">Lupa Password</h4>
    <p style="text-align: center;">Untuk melakukan reset password, silakan masukkan alamat email anda. </p>
    <div class="form-container">
    <?php echo form_open('lupa_password');?>
    <label for="username">email:</label>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
    <p> <?php echo form_error('email'); ?> </p> 
    </div>

    <button class="positive-button" type="submit">Submit</button>
  </div>
  </div>
</div> 
 </body>   
 </html>   
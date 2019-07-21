

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Bumi Mandiri - User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
</head>


<?php $userriwayat=$userriwayat->row_array() ?>




<body>
<div class="container">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <?php foreach ($userdata->result() as $post): ?>
              <div class="card card-profile">
                <div class="card-body">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?php echo base_url();?>/assets/img/faces/marc.jpg" />
                  </a>
                </div>
                  <h6 class="card-category text-gray">User Account</h6>
                  <h4 class="card-title"><?php echo $post->nama_depan  ?></h4>
                  <a href="#pablo" class="btn btn-primary btn-round">Ganti Foto</a>
                </div>
              </div>
              <?php endforeach; ?>
              <div class="card card-profile">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">NAVIGATION</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?php echo base_url();?>">Ke Halaman Utama</a></li>
                        <li class="list-group-item"><a href="<?php echo base_url();?>">Ke Halaman Pemesanan</a></li>
                        <li class="list-group-item"><a href="<?php echo base_url('web/logout'); ?>">Logout</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <?php echo form_open_multipart('Account/do_upload');?>
                <input type="text" class="form-control" name="kode" value="<?php echo $userriwayat['kode_reservasi'] ?>" >
                <input type="file" name="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> 
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <button type="submit" class="btn btn-primary btn-lg" href="#" role="button">Upload</button>
                </p>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
</div>
<hr>

    <!-- JQuery  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

</body>
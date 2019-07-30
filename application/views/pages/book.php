<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Bumi Mandiri - Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!--     datetime picker     -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/book.css" rel="stylesheet" />
</head>
<body>





  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url();?>"><b>BUMI MANDIRI</b></a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown pull-right">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
        </li>
      </ul>
    <a class="navbar-brand pull-right" href="#">Transaksi</a>
    </div>
  </nav>





  <div class="row text-center align-items-center mx-auto">
    <h2 class="align-items-center mx-auto">PILIH PAKET</h2>
  </div>





  <div class="row text-center align-items-center mx-auto" >
    <?php foreach ($res->result() as $post): ?>
    <div class="col-sm">
      <div class="card mx-auto" style="width: 20rem;">
        <div class="card-body">
          <form action="<?php  echo base_url("Booking/src_by_paket/");?>" method="get" enctype="multipart/form-data">
          <h4 class="card-title"><?php echo $post->nama_paket ?></h4>
          <img src="<?php echo base_url();?>upload/paket/jenis/<?php echo $post->paket_img ?>" alt="..." class="img-thumbnail">
          <!-- <p class="card-text"></p> -->
          <input type='text' class="form-control" name="idpaket" value="<?php echo $post->id ?>" hidden/>
          <input type='text' class="form-control" name="namapaket" value="<?php echo $post->nama_paket ?>" hidden/>
          <button type="submit" class="btn btn-info">Pilih Paket</button>
          </form>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>





<!-- JQuery  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <!--  Plugin for the DatePicker, https://gijgo.com/datepicker/example/material-design -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>


<script type="text/javascript">
  var nextDay = new Date(new Date().getTime()+(7*24*60*60*1000));
   $(function(){
       // $('#datetimepicker1').datepicker({
       // 	minDate:nextDay
       // });
       $('#datetimepicker1').datepicker({
        modal: true,
        minDate: nextDay,
        format: 'yyyy-mm-dd'
       });

       $('#datetimepicker2').datepicker({
        modal: true,
        format: 'yyyy-mm-dd'
       });
   });
</script>

</body>
</html>
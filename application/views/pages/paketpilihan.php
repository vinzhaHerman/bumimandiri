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
</head>
<body>


<?php 
  $res=$res->row_array();
?>





  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>BUMI MANDIRI</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown pull-right">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
        </li>
      </ul>
    <a class="navbar-brand" href="#">Form Pemesanan</a>
    </div>
  </nav>





    <div class="row text-center align-items-center mx-auto">
    <h2 class="align-items-center mx-auto">TRANSAKSI</h2>
  </div>




<div class="container">
  <div class="content">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <h2 class="card-title">Detail Pemesanan</h2>
            <p class="card-category">Anda Memilih Program: <b class="text-warning">Nama Program</b></p>
          </div>
          <div class="card-body">
             <div class="row">
                <div class='col-sm-4'>
                  <label for="datein">Untuk Tanggal</label>
                  <input type='text' class="form-control" id='datetimepicker1' name="datein" />
                </div>
                <div class='col-sm-2'>
                  <label for="datein">Lama Hari:</label>
                  <input type='text' class="form-control" name="lama" readonly="true" value="3" />
                </div>
                 <div class='col-sm-4'>
                  <label for="dateout">Checkout:</label>
                  <input type='text' class="form-control" id="dateout" name="dateout" readonly="true" />
                </div>
                 <div class='col-sm-2'>
                  <label for="datein">Status:</label>
                  <input type="text" readonly class="form-control-plaintext text-warning" id="status" value="Available">
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <label for="datein">Jumlah Orang (min. 30 / max. 60):</label>
                <input type='range' class="form-control" name="orang"/>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <h4 class="">Rincian Program</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Employees Stats</h4>
            <p class="card-category">New employees on 15th September, 2016</p>
          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<!-- JQuery  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Plugin for the momentJs  -->
 <script src="<?php echo base_url();?>/assets/js/plugins/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, https://gijgo.com/datepicker/example/material-design -->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>


<script type="text/javascript">
  var nextDay = new Date(new Date().getTime()+(7*24*60*60*1000));
   $(function(){
       // $('#datetimepicker1').datepicker({
       //   minDate:nextDay
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

       $("#datetimepicker1").on("change",function(){
        var selected = $(this).val();
        var jumlahhari = parseInt($('input[name="lama"]').val());
        var counted = selected + jumlahhari;
        // alert(selected);
        $('input[name="dateout"]').val(counted);
       });

       // $('input[name="dateout"]').val("Good Fish");
   });
</script>

</body>
</html>
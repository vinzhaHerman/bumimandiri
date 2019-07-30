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
  $hasil_rupiah = "Rp " . number_format($res['harga'],2,',','.');
?>







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
    <h2 class="align-items-center mx-auto">TRANSAKSI</h2>
  </div>




<div class="container">
  <div class="content">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-info">
            <h2 class="card-title">Detail Pemesanan</h2>
            <p class="card-category">Anda Memilih Program: <b class=""><?php echo $res['nama_program'] ?></b></p>
          </div>
          <div class="card-body">
            <form action="<?php echo base_url('booking/cek_pemesanan'); ?>" method="get">
              <?php           
                if($message=$this->session->flashdata('message')):
              ?>
              <div class="animated bounceInDown sufee-alert alert with-close btn-info alert-dismissible fade show">
                <?php echo $message ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php endif; ?>
             <div class="row">
                <div class='col-sm-3'>
                  <label for="datein">Untuk Tanggal</label>
                  <input type='text' class="form-control" id='datetimepicker1' name="datein" required="true" />
                  <input type='text' class="form-control" id='idprogram' name="idprogram" value="<?php echo $res['id'] ?>" hidden/>
                  <input type='text' class="form-control" id='idprogram' name="namaprogram" value="<?php echo $res['nama_program'] ?>" hidden/>
                  <input type='text' class="form-control" name="idpaket" value="<?php echo $_GET['idpaket'] ?>" hidden/>
                  <input type='text' class="form-control" name="namapaket" value="<?php echo $_GET['namapaket'] ?>" hidden/>      
                </div>
                <div class='col-sm-2'>
                  <label for="datein">Lama Hari:</label>
                  <input type='text' class="form-control text-center" name="lama" readonly="true" value="<?php echo $res['jumlah_hari'] ?>" />
                </div>
                <div class='col-sm-3'>
                  <label for="dateout">Checkout:</label>
                  <input type='text' class="form-control" id="dateout" name="dateout" readonly="true" />
                </div>
                <div class='col-sm-4'>
                  <label for="dateout">Durasi:</label>
                  <input type='text' class="form-control-plaintext" id="dateout" name="durasi" value="<?php echo $res['lama_kegiatan'] ?>" readonly="true" />
                </div>
                 <div class='col-sm-2'>
                  <!-- <label for="datein">Status:</label>
                  <input type="text" readonly class="form-control-plaintext text-warning" id="status" value="Available"> -->
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <label for="datein">Min.</label>
                <input type='text' id="minval" value="30" class="form-control-plaintext text-primary" name="minorang"/>
              </div>
              <div class="col-sm-8">
                <label for="datein">Jumlah Orang:</label>
                <input type='range' min="<?php echo $res['minkapasitas'] ?>" id="get" step="1" onchange="fetch()" class="form-control" name="jmlorang"/>
              </div>
              <div class="col-sm-2">
                <label for="datein">Max.</label>
                <input type='text' id="maxval" value="<?php echo $res['kapasitas'] ?>" class="form-control-plaintext text-primary" name="maxorang"/>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-8">
                <input type="text" id="put" class="form-control text-center" name="jumlahorg" value="30" readonly="true">
              </div>
              <div class="col-sm-2">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <label for="datein">Harga Program per-orang</label>
                <input type='text' class="form-control-plaintext text-success" name="" readonly="true" value="<?php echo $hasil_rupiah ?>" style="font-size: 1.5rem;"/>
              </div>
              <div class="col-sm-12">
                <input type='text' class="form-control-plaintext text-success" name="hargasatuan" readonly="true" value="<?php echo $res['harga'] ?>" style="font-size: 1.5rem;" hidden/>
              </div>
            </div>
            <button type="submit" class="btn btn-info pull-right">Pesan</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">Pusat Bantuan</h4>
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

  var maxVal = document.getElementById("maxval").value;
  document.getElementById("get").max = maxVal;

  function fetch(){
    var get = document.getElementById("get").value;
    document.getElementById("put").value = get;
  }

   $(function(){
       $('#datetimepicker1').datepicker({
        modal: true,
        // minDate: nextDay,
        format: 'yyyy-mm-dd'
       });

       $('#datetimepicker2').datepicker({
        modal: true,
        format: 'yyyy-mm-dd'
       });

       $("#datetimepicker1").on("change",function(){
        var selected = $(this).val();
        var jumlahhari = parseInt($('input[name="lama"]').val());

        var date = new Date(selected);

        var newdate = new Date(date);

        newdate.setDate(newdate.getDate() + (jumlahhari-1));

        var dd = ((newdate.getDate()) < 10 ? '0' : '') + (newdate.getDate());
        var mm = ((newdate.getMonth() + 1) < 10 ? '0' : '') + (newdate.getMonth() + 1);
        var y = newdate.getFullYear();
        var someFormattedDate = y + '-' + mm + '-' + dd;
        $('input[name="dateout"]').val(someFormattedDate);
       });

       // $('input[name="dateout"]').val("Good Fish");
   });
</script>

</body>
</html>
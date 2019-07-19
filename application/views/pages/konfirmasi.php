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
  $program=$program->row_array();
  $orang=$_GET['jmlorang'];
  $hsatuan=$_GET['hargasatuan'];
  $total=$orang*$hsatuan;
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





 <div class="container">
  <div class="content">
          <form action="<?php echo base_url('booking/set_pemesanan'); ?>" method="post">
    <div class="row">
      <div class="col-md-12">
        <h2>PEMBAYARAN</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4><b>Detail Pemesanan</b></h4>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">ID Program:</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext text-success" id="staticEmail" name="idprogram" value="<?php echo $_GET['idprogram'] ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Program:</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext text-success" id="staticEmail" value="<?php echo $_GET['namaprogram'] ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Paket:</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext text-success" id="staticEmail" value="<?php echo $_GET['namapaket'] ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateout">Untuk tgl.</label>
                  <input type='text' class="form-control text-center" id="dateout" name="datein" value="<?php echo $_GET['datein'] ?>" readonly="true" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateout">Sampai</label>
                  <input type='text' class="form-control text-center" id="dateout" name="dateout" value="<?php echo $_GET['dateout'] ?>" readonly="true" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateout">Durasi</label>
                  <input type='text' class="form-control text-center" id="dateout" value="<?php echo $_GET['durasi'] ?>" readonly="true" />
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Atas Nama:</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext text-success" id="staticEmail" value="Nama Pelanggan">
                  </div>
                </div>
              </div>
            </div> -->
            <hr>
            <div class="row">
              <div class="col-md-12">
                <h4>Fasilitas yang didapat</h4>
              </div>
            </div>
            <div class="row">
              
            </div>
          </div>
          </form>
        </div>
        </div>
        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <h4><b>Metode Pembayaran</b></h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <p class="card-category">Kami menyediakan metode pembayaran menggunakan bank transfer.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <p class="card-category">Nama Bank</p>
                </div>
                <div class="col-md-10">
                  <p class="card-category text-success">MANDIRI</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <p class="card-category">No. Rek</p>
                </div>
                <div class="col-md-10">
                  <p class="card-category text-success">12908xxxxxxxxx</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <p class="card-category">A/N</p>
                </div>
                <div class="col-md-10">
                  <p class="card-category text-success">BUMI MANDIRI</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="card-category">Pastikan nomor rekening yang dituju adalah benar dan sesuai dengan data yang tertera diatas. jika mengalami kesulitan, segera <a href="" class="text-success"><b>hubungi kami</b></a> atau lihat <a href="" class="text-success"><b>Prosedur Pembayaran</b></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Bayar</button>
            <button type="submit" class="btn btn pull-right">Batal</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header card-header-tabs card-header-success">
            <h4 class="card-title">Rincian Biaya</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">
            <h5 class="text-success text-center">Agro & Outbound I</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dateout">Harga per-orang:</label>
                  <input type='text' class="form-control-plaintext text-right" id="hsatuan"value="Rp <?php echo $program['harga'] ?>" readonly="true" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dateout">Jumlah Peserta:</label>
                  <input type='text' class="form-control-plaintext text-right" id="jpeserta" name="jmlorang" value="<?php echo $_GET['jmlorang'] ?>" readonly="true" />
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dateout">Jumlah Tagihan:</label>
                  <input type='text' class="form-control-plaintext text-right text-success" id="total" value="<?php echo $total ?>" readonly="true" style="font-weight: bold; font-size: 1.2rem;" />
                  <input type='text' class="form-control-plaintext text-right text-success" id="total" name="tagihan" value="<?php echo $total ?>" readonly="true" style="font-weight: bold; font-size: 1.2rem;" hidden/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>







<footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  UBSI
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            <a href="https://www.creative-tim.com" target="_blank">BUMI MANDIRI</a>
          </div>
        </div>
      </footer>





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
  // $(function(){
  //   var hsatuan = document.getElementById("hsatuan").value;
  //   var jpeserta = document.getElementById("jpeserta").value;
  //   var total = hsatuan * jpeserta;
  //   document.getElementById("total").value = total;
  // }
</script>

</body>
</html>
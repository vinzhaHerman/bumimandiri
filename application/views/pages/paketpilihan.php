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
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
	<link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
</head>
<body>


<?php 
  $res=$res->row_array();
?>


	<div class="container">
		<h2 style="text-align: center;" class="mb-3">FORM PEMESANAN</h2>
		<div class="card mb-3">
  			<div class="card-body">
          <form action="<?php echo base_url('booking/set_pemesanan'); ?>" method="post">
  				<input type='text' class="form-control" id='datetimepicker1' name="idprogram" value="<?php echo $res['id'] ?>" hidden/>
    			<h3 class="card-title">Untuk tanggal:</h3>
    			<div class="container">
    				<div class="row">
        				<div class='col-sm-2'>
            				<input type='text' class="form-control" id='datetimepicker1' name="datein" value="<?php echo $_POST['datein']?>" readonly/>
        				</div>
                <div class='col-sm-1'>
                    <div class="text-center">sampai</div>
                </div>
                <div class='col-sm-2'>
                    <input type='text' class="form-control" id='datetimepicker1' name="datein" value="<?php echo $_POST['dateout']?>" readonly/>
                </div>
    				</div>
				</div>
  			</div>
  			<div class="card mb-3">
        <div class="card-header card-header-primary">
          <div class="form-group row">
              <a for="staticEmail" class="col-sm-2 col-form-label text" style="font-size: 28px;"><b>Program:</b></a>
              <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext text-success" id="staticEmail" name="namaprogram" value="<?php echo $res['nama_program'] ?>"  style="font-size: 28px;">
              </div>
          </div>
          <div class="form-group row">
              <a for="staticEmail" class="col-sm-2 col-form-label text"><b>Atas nama:</b></a>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="atasnama" style="color: white;">
              </div>
          </div>
        </div>
  			<div class="card-body">
          <div class="row">
            <div class="col-sm-3"><img style="max-width: 250px; height: auto;" src="<?php echo base_url();?>assets/img/people.jpg" alt=""></div>
            <div class="col-sm-8">
              <h3 class="card-title text-info"></h3>
              <p class="card-text"><?php echo $res['fasilitas'] ?><br>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
    			
          <button type="submit" class="btn btn-primary pull-right">Pilih Paket</button>
    			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    			<div class="collapse" id="collapsedContent1">
  					<div class="card card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  					</div>
				</div>
  			</div>
		</div>
    </form>
		</div>
	</div>




	<!-- JQuery  -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<!-- Plugin for the momentJs  -->
 	<script src="<?php echo base_url();?>/assets/js/plugins/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  	<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>


<script type="text/javascript">
   $(function () {
       $('#datetimepicker4').datetimepicker({
       	format: ''
       });
   });
</script>

</body>
</html>
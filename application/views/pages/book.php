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





	<div class="container">
		<h2 style="text-align: center;" class="mb-3">FORM PEMESANAN</h2>
		<div class="card mb-3">
  			<div class="card-body">
    			<h3 class="card-title">Pilih Tanggal Reservasi</h3>
    			<div class="container">
    				<div class="row">
        				<div class='col-sm-6'>
            				<input type='text' class="form-control" id='datetimepicker4' />
        				</div>
    				</div>
				</div>
				<button type="submit" class="btn">BATAL</button>
				<button type="submit" class="btn btn-success">CARI</button>
  			</div>
		</div>
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
   $(function () {
       $('#datetimepicker4').datepicker({
       	
       });
   });
</script>

</body>
</html>
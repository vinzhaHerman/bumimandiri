<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" 
	integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" 
	crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/book.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>





	<div class="header"></div>





	<div class="main-container">
		




		<div class="container">
			<h1 class="main-title"><b>FORM PEMESANAN</b></h1>
			<div class="row">
				<label for="initDate" class="labels">Untuk tanggal:</label>
				<input id="initDate" type="text" class="datepicker" placeholder="pilih tanggal pemesanan anda.">
				<button type="submit" class="x-space y-button">CARI</button>
				<button type="submit" class="x-space n-button">BATAL</button>
			</div>
			<div class="row">
				<div class="labels">Pilih paket:</div>
				<div class="item-container">
					<div class="item-centering">
					<div class="item imgs"></div>
					<div class="item desc">
						<div class="para item-name labels"><b>PAKET SEKOLAH</b></div>
						<div class=" para item-desc">Item Desc....</div>
						<div class="button-group">
							<button class="x-space y-button">PILIH</button>
							<button class="x-space n-button exp-button">DETAIL</button>
						</div>
					</div>
					</div>
				</div>

				<div class="collapsible">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>





				<div class="item-container">
					<div class="item-centering">
					<div class="item imgs"></div>
					<div class="item desc">
						<div class="para item-name labels"><b>PAKET SEKOLAH</b></div>
						<div class=" para item-desc">Item Desc....</div>
						<div class="button-group">
							<button class="x-space y-button">PILIH</button>
							<button class="x-space n-button exp-button">DETAIL</button>
						</div>
					</div>
					</div>
				</div>

				<div class="collapsible">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>





				<div class="item-container">
					<div class="item-centering">
					<div class="item imgs"></div>
					<div class="item desc">
						<div class="para item-name labels"><b>PAKET SEKOLAH</b></div>
						<div class=" para item-desc">Item Desc....</div>
						<div class="button-group">
							<button class="x-space y-button">PILIH</button>
							<button class="x-space n-button exp-button">DETAIL</button>
						</div>
					</div>
					</div>
				</div>

				<div class="collapsible">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>





	</div>

<script>
	// $(document).ready(function(){
 //    $('.datepicker').datepicker();
 //  	});
// var today = new Date().getDate();

var nextDay = new Date(new Date().getTime()+(7*24*60*60*1000));

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems,{
    	format:'dd-mm-yyyy',
    	minDate:nextDay
    });
  });



	$('.exp-button').click(function(){
    $('.collapsible').slideToggle('fast');
	});
</script>

</body>
</html>
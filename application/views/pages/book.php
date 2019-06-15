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
			<h1 class="main-title">FORM <b>PEMESANAN</b></h1>
			<div class="row">
				<label for="initDate" class="labels">Untuk tanggal:</label>
				<input id="initDate" type="text" class="datepicker" placeholder="pilih tanggal pemesanan anda.">
				<button type="submit" class="y-button">CARI</button>
			</div>
			<!-- <div class="row">
				<div class="item-container">
					<div class="item imgs"></div>
					<div class="item desc">
						<div class="item-name"></div>
						<div class="item-desc"></div>
						
					</div>
				</div>
			</div> -->
		</div>





	</div>

<script>
	$(document).ready(function(){
    $('.datepicker').datepicker();
  	});
</script>

</body>
</html>
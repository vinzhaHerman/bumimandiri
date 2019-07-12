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
	<link href="<?php echo base_url();?>/assets/css/material-dashboard.css" rel="stylesheet" />
</head>
<body>










    <div class="row">
      <div class="col-6 col-md-2">
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
      </div>
      <div class="col-12 col-md-10">
    <div class="container-fluid">
		  <h2 style="text-align: center;" class="mb-3">PILIH PROGRAM KEGIATAN</h2>
        <?php foreach ($res->result() as $post): ?>
  		  <div class="card mb-3">
          <form action="<?php  echo base_url("Booking/paket_detail/").$post->id;?>" method="post" enctype="multipart/form-data">
            <div class="card-header card-header-info">
            <h3 class="card-title"><b><?php echo $post->nama_program ?></b></h3>
            <p class="card-category">Lama Kegiatan: <b><?php echo $post->lama_kegiatan ?></b></p>
            </div>
  			  <div class="card-body">
            <div class="row">
              <div class="col-sm-3"><img style="max-width: 250px; height: auto;" src="<?php echo base_url();?>assets/img/people.jpg" alt=""></div>
              <div class="col-sm-8">
                <h3 class="card-title text-info"></h3>
                <p class="card-text"><?php echo $post->fasilitas ?><br>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!-- <input type='text' class="form-control" id='datetimepicker1' name="datein" value="<?php echo $_POST['datein']?>" hidden/>
                <input type='text' class="form-control" id='datetimepicker1' name="dateout" value="<?php echo $_POST['dateout']?>" hidden/> -->
              </div>
            </div>
    			
            <button type="submit" class="btn btn-success pull-right">Pilih Paket</button>
    			  <button class="btn btn-secondary pull-right" type="button" data-toggle="collapse" data-target="#collapsedContent1" aria-expanded="false" aria-controls="collapsedContent1">Deail</button>
    			  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    			  <div class="collapse" id="collapsedContent1">
  					<div class="card card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  					</div>
				    </div>
  			 </div>
         </form>
		    </div>
        <?php endforeach; ?>
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

</body>
</html>
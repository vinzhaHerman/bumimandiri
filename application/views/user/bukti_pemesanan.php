<!DOCTYPE html>
<html>
<head>
    <title>Bukti Pembayaran</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>





<style type="text/css">

/**{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}*/





    .kotak{
      width: 900px;
      height: 480px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .pala{
      width: 100%;
      height: 20%;
      /*background-image: url('header.png');*/
      background-size: cover;
    }
    .atas{
      width: 100%;
    }
    .bawah{
      width: 100%;
    }
    .kaki{
      width: 100%;
      height: 18%;
      /*background-image: url('footer.png');*/
      background-size: cover;
    }
    .isi{
      width: 100%;
      height: 62%;
      position: relative;
      background-color: white;
    }
    .bungkus{
      width: 95%;
      height: auto;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .gede{
      font-size: 1.5rem;
    }
</style>


<?php $res=$res->row_array();
  $date = date('d-M-Y');
?>


<div class="kotak">
    <div class="pala">
      <img src="<?php echo base_url();?>/assets/img/header.png" class="atas">
    </div>
    <div class="isi">
      <div class="bungkus">
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label class="bmd-label-floating">Kode Reservasi</label>
              <p class="text-info gede"><b><?php echo $res['kode_reservasi']; ?></b></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group pull-right">
              <label class="bmd-label-floating">Tanggal Cetak</label>
              <p class="text-info"><?php echo $date; ?></p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Nama Program:</label>
              <p class="text-info"><b><?php echo $res['nama_program']; ?></b></p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label class="bmd-label-floating">Untuk Tanggal:</label>
              <p class="text-info"><?php echo $res['tgl_masuk']; ?></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group pull-right">
              <label class="bmd-label-floating">Sampai:</label>
              <p class="text-info"><?php echo $res['tgl_keluar']; ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Atas Nama</label>
              <p class="text-info"><?php echo $res['nama_depan']; ?> <?php echo $res['nama_belakang']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="kaki">
      <img src="<?php echo base_url();?>/assets/img/footer.png" class="bawah">
    </div>
</div>




<script type="text/javascript">
 window.print();
</script>
</body>
</html>
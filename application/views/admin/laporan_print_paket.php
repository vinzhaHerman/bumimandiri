<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <style type="text/css">
 .table-data{
   width: 100%;
   border-collapse: collapse;
  }

  .table-data tr th,
  .table-data tr td{
   border:1px solid black;
   font-size: 10pt;
  }
 </style>

 <h3>Laporan Data Buku Perputakaan Online</h3>
 <br/>
 <table class="table-data">
  <thead>
   <tr>
    <th>No</th>
    <th>Nama Paket</th>
    <th>Deskripsi</th>
   </tr>
  </thead>
  <tbody>
   <?php
   $no = 1;
   foreach($paket as $b){
   ?>
   <tr>
     <td><?php echo $no++; ?></td>
     <td><?php echo $b->nama_paket; ?></td>
     <td><?php echo $b->deskripsi; ?></td>
   </tr>
   <?php
  }
  ?>
 </tbody>
</table>

<script type="text/javascript">
 window.print();
</script>

</body>
</html>

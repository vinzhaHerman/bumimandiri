
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>





<!--   Core JS Files   -->
<script src="<?php echo base_url();?>/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo base_url();?>/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?php echo base_url();?>/assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <!-- <script src="/assets/js/plugins/jquery.bootstrap-wizard.js"></script> -->

  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-selectpicker.js" ></script>

  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <!-- <script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script> -->

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/sc-2.0.0/datatables.min.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-html5-1.5.6/b-print-1.5.6/r-2.2.2/datatables.min.js"></script>

  

  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <!-- <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script> -->

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo base_url();?>/assets/js/plugins/jasny-bootstrap.min.js"></script>

  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo base_url();?>/assets/js/plugins/fullcalendar.min.js"></script>

  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <!-- <script src="/assets/js/plugins/jquery-jvectormap.js"></script> -->

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url();?>/assets/js/plugins/nouislider.min.js" ></script>

  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- Library for adding dinamically elements -->
  <script src="<?php echo base_url();?>/assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Chartist JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url();?>/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, https://gijgo.com/datepicker/example/material-design -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<!-- Tiny MCE -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>



<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
    "order": [[ 0, 'desc' ]]
    });
  });
</script>

<script type="text/javascript">
  var nextDay = new Date(new Date().getTime()+(7*24*60*60*1000));
  var today = new Date();
   $(function(){
       // $('#datetimepicker1').datepicker({
       //   minDate:nextDay
       // });
       $('#datetimepicker1').datepicker({
        modal: true,
        maxDate: today,
        format: 'yyyy-mm-dd'
       });

       $('#datetimepicker2').datepicker({
        modal: true,
        maxDate: today,
        format: 'yyyy-mm-dd'
       });
   });
</script>

<script>
  $(document).ready( function () {
    $('#laporan').DataTable({
    dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
  });
</script>



</body>

</html>
<!-- jQuery -->
<script src="/vendor/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/vendor/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/vendor/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/vendor/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/vendor/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/vendor/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/vendor/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/vendor/plugins/moment/moment.min.js"></script>
<script src="/vendor/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/vendor/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/dist/js/adminlte.js"></script>

<script src="/vendor/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
  $(function () {
    $("#myTable").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
    });
  });
</script>
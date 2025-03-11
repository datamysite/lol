<!-- jQuery -->
<script src="{{URL::to('/public')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::to('/public')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('/public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{URL::to('/public')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{URL::to('/public')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{URL::to('/public')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::to('/public')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{URL::to('/public')}}/plugins/moment/moment.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::to('/public')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{URL::to('/public')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{URL::to('/public')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('/public')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('/public')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('/public')}}/dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="{{URL::to('/public')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="{{URL::to('/public')}}/dist/js/main.js"></script>
<script type="text/javascript">
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
  });
</script>
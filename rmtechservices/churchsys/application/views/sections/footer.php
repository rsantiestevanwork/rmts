</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.0 -->
<script src="<?= base_url()?>assets/adminlte/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url()?>assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/adminlte/dist/js/demo.js"></script>
<!-- page script -->
<!-- bootstrap datepicker -->
<script src="<?= base_url()?>assets/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
	/*
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    */
  });
  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  });

</script>
</body>
</html>

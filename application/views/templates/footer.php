  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://adminlte.io"></a>Handover</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url();?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url();?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url();?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url();?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url();?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?= base_url();?>/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="<?= base_url();?>/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url();?>/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/dist/js/demo.js"></script>
<!-- Page specific script -->

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url();?>/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url();?>/dist/js/pages/dashboard3.js"></script>
<script>
  $(function () {
    $("#viewDataTable").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": true,
      "paging": true,
      "sScrollX": '100%',
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#viewDataTable_wrapper .col-md-6:eq(0)');

      //Date picker
    $('#datepicker').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
    })

    $('#datepickerEdit').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
    })
    bsCustomFileInput.init();
    //dialog image
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });

    $(".preload").fadeOut(2000, function() {
        $(".content").fadeIn(1000);        
    });


  });
</script>
</body>
</html>

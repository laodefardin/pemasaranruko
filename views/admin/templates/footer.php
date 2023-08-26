    <!-- Main Footer -->
    <footer class="main-footer text-sm">
      <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">
          <?= $konf['nama_perusahaan'] ?></a>.</strong> All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <!-- <b>Version</b> 3.2.0 -->
      </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../assets/dist/js/adminlte.js"></script>

    <script src="../../assets/plugins/select2/js/select2.full.min.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../assets/dist/js/pages/dashboard3.js"></script>
    <script src="../../assets/js/sweetalert/sweetalert2.all.min.js"></script>
    <script src="../../assets/js/myscript.js"></script>

    <script src="../../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../assets/dist/js/jquery.fancybox.min.js"></script>

    <!-- Summernote -->
    <script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        bsCustomFileInput.init();
      });
    </script>

    <!-- Fungsi untuk cetak -->
    <script type="text/javascript">
      function cetak() {
        window.open("./cetak/cetak.php", "_blank");
      }
    </script>
    <script>
      $(function () {
        //Add text editor
        $('#compose-textarea').summernote()
      })
      //Initialize Select2 Elements
      $('.select2').select2()
    </script>
    <script>
      $(function () {
        //Add text editor
        $('#compose2-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose3-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose4-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose5-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose6-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose7-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose8-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose9-textarea').summernote()
      })
    </script>
        <script>
      $(function () {
        //Add text editor
        $('#compose10-textarea').summernote()
      })
    </script>

    <script>
      $(function () {
        $('#myTable').DataTable({
          "sDom": 'lrtip',
          "paging": true,
          "responsive": true,
          "autoWidth": false,
          "autoWidth": false,
          "info": false,
          "ordering": true,
          "lengthChange": false,
        });
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
          "pageLength": 10,
        });
        $("#example2").DataTable({
          "responsive": true,
          "autoWidth": false,
          "pageLength": 20,
        });
        $("#example3").DataTable({
          // "responsive": true,
          // "autoWidth": false,
          "pageLength": 10,
          "scrollX": true,
        });
        $('#example20').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
    </body>

    </html>

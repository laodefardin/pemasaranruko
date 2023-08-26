   <!-- Main Footer -->
   <div class="footer bg-navy">
     <div class="link">
       <div class="container clearfix">
         <div class="col-lg-5 text-center link-logo">
           <a href="#">
             <img src="./assets/image/sistem/logo-footer.png">
           </a>
         </div>
         <div class="link-menu">
           <ul style="font-size: 14px;">
             <li><a href="./profil-perusahaan" style="color: #fff;">Profil Perusahaan</a></li>
             <li><a href="./properti" style="color: #fff;">Properti Baru</a></li>
             <li><a href="./informasi-geoekonomi" style="color: #fff;">Informasi Geoekonomi</a></li>
             <li><a href="./destinasi-wisata" style="color: #fff;">Destinasi Wisata</a></li>
           </ul>
         </div>
       </div>
     </div>
     <div class="copyright">
       <div class="container clearfix text-center">
         <div class="copyright-text">© <?= date('Y'); ?>
         <?php 
       include "app/config/koneksi.php";
       $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
       $data = mysqli_fetch_assoc($query);
       ?>
         - <?= $data['nama_perusahaan'] ?></div>
       
       </div>
     </div>
   </div>

   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->

   <!-- jQuery -->
   <script src="assets/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="assets/dist/js/adminlte.min.js"></script>
   <script src="assets/dist/js/jquery.fancybox.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="assets/dist/js/demo.js"></script>
   <script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
   <script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
   <script>
     // BS-Stepper Init
     document.addEventListener('DOMContentLoaded', function () {
       window.stepper = new Stepper(document.querySelector('.bs-stepper'))
     })
   </script>
   <script type="text/javascript">
     $(document).ready(function () {
       bsCustomFileInput.init();
     });
   </script>
   </body>

   </html>

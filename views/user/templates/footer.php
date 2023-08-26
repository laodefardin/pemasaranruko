   <!-- Main Footer -->
   <div class="footer bg-navy">
     <div class="link">
       <div class="container clearfix">
         <div class="link-logo">
           <a href="https://www.properti123.com">
             <img src="../..//assets/image/sistem/logo-footer.png">
           </a>
         </div>
         <!-- <div class="link-social">
           <a class="social-facebook" href="https://facebook.com/properti123com">
             <img src="https://www.properti123.com/img/icon/facebook-light.svg">
           </a>
           <a class="social-twitter" href="https://twitter.com/properti123com">
             <img src="https://www.properti123.com/img/icon/twitter-light.svg">
           </a>
           <a class="social-instagram" href="https://instagram.com/properti123com">
             <img src="https://www.properti123.com/img/icon/instagram-light.svg">
           </a>
         </div> -->
         <div class="link-menu">
           <ul style="font-size: 14px;">
             <li><a href="../../profil-perusahaan" style="color: #fff;">Profil Perusahaan</a></li>
             <li><a href="../../properti" style="color: #fff;">Properti Baru</a></li>
             <li><a href="../../informasi-geoekonomi" style="color: #fff;">Informasi Geoekonomi</a></li>
             <li><a href="../../destinasi-wisata" style="color: #fff;">Destinasi Wisata</a></li>
           </ul>
         </div>
       </div>
     </div>
     <div class="copyright">
       <div class="container clearfix text-center">
         <div class="copyright-text">© <?= date('Y'); ?>
         <?php 
       include "../../app/config/koneksi.php";
       $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
       $data = mysqli_fetch_assoc($query);
       ?>
         - <?= $data['nama_perusahaan'] ?></div>
         <!-- <div class="copyright-link">
           <ul>
             <li><a href="">Tentang Kami</a></li>
             <li><a href="">Ketentuan Layanan</a></li>
             <li><a href="">Persyaratan Pembelian</a></li>
             <li><a href="">Privasi</a></li>
             <li><a href="https://www.properti123.com/hubungi-kami">Hubungi Kami</a></li>
           </ul>
         </div> -->
       </div>
     </div>
   </div>

   <!-- <footer class="main-footer bg-navy">
     <div class="container">
       
       <div class="float-right d-none d-sm-inline">
       
       </div>
       <centr>
         &copy; Copyright <?= date('Y'); ?>
         <?php 
       include "app/config/koneksi.php";
       $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
       $data = mysqli_fetch_assoc($query);
       ?>
         <?= $data['nama_perusahaan'] ?>
       </centr>
     </div>
   </footer> -->

   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->

   <!-- jQuery -->
   <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../assets/dist/js/adminlte.js"></script>

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

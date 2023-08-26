 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white border-bottom-0"
   style="background-color: var(--primary-500,#2951a3);">
   <div class="container">
     <!-- <a href="index" class="navbar-brand" style="margin-right: 187px;"> -->
     <a href="index" class="navbar-brand" style="">
       <!-- <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> -->
       <span class="brand-text font-weight-light"><b style="color: white;"><?= $data['nama_perusahaan'] ?></b></span>
     </a>

     <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
       aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse order-1 order-md-3 ml-auto" id="navbarCollapse">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a href="index" class="nav-link">Home</a>
         </li>
         <li class="nav-item">
           <a href="profil-perusahaan" class="nav-link">Profil Perusahaan</a>
         </li>
         <li class="nav-item">
           <a href="informasi-geoekonomi" class="nav-link">Informasi Geoekonomi</a>
         </li>
         <li class="nav-item">
           <a href="destinasi-wisata" class="nav-link">Destinasi Wisata</a>
         </li>
         <!-- <li class="nav-item">
              <a href="kontak" class="nav-link">Hubungi Kami</a>
            </li> -->
       </ul>

       <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

         <?php
          if (isset($_SESSION["level"])) {
          $level = $_SESSION["level"];
          } else {
          // Default level jika "level" tidak terdefinisi dalam sesi
          $level = "Guest";
          }

          if ($level  == 'Administrator') {
          ?>
         <li class="nav-item">
           <a href="./views/admin/index">
             <div class="btn-default btn-sm" style="margin-top: 5px;padding: 1px 8px 1px 8px;border-radius: 3px;">
               <i class="fa fa-sign-in"></i> Hai, Admin
             </div>
           </a>
         </li>
         <?php } elseif ($level == 'User') { ?>
         <li class="nav-item dropdown user-menu">
           <a style="color: #000;border-radius: 3px;" href="#" class="nav-link dropdown-toggle btn-default btn-sm"
             data-toggle="dropdown">
             <span class=""><i class="fa fa-user"></i> Akun - <?= $_SESSION['username'] ?></span>
           </a>

           <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <!-- User image -->
             <li class="user-footer" style="font-weight: 700;font-size: 16px;color: #0d1a35;">
               <p>Akun</p>
             </li>
             <br>
             <li class="user-header"
               style="background-color:white;height: 0px;text-align: left;display: -webkit-flex;display: flex;align-items: center;-webkit-align-items: center;-webkit-box-align: center;-ms-flex-align: center;gap: 16px;margin-bottom: 45px;">
               <img src="./assets/image/sistem/admin2.png" class="img-circle float-left" alt="User Image"
                 style="height: 70px; width: 70px;">
               <p>
                 <a href="./views/user/profile" style="color: #2951a3;font-weight: 700;"><?= $_SESSION['nama'] ?></a>
                 <small>Member since <?= date('F Y', strtotime($_SESSION['tanggal'])) ?></small>
               </p>

             </li>
             <!-- Menu Body -->
             <li class="user-body" style="border-bottom: 1px solid #dee2e6;">
               <div class="row">
                 <div class="col-6 text-center">
                   <a href="./views/user/pembelian">Pembelian</a>
                 </div>
                 <div class="col-6 text-center">
                   <a href="./views/user/profile">Profile</a>
                 </div>
               </div>
               <!-- /.row -->
             </li>
             <!-- Menu Footer-->
             <li class="user-footer">
               <a href="./logout" class="btn float-right"> <i class="fa fa-sign-in"></i> Sign out</a>
             </li>
           </ul>
         </li>

         <?php } else { ?>
         <li class="nav-item">
           <a href="auth-signin">
             <div class="btn-default btn-sm" style="margin-top: 5px;padding: 1px 8px 1px 8px;border-radius: 3px;">
               <i class="fa fa-sign-in"></i> Masuk/Daftar
             </div>
           </a>
         </li>
         <?php } ?>

       </ul>


     </div>
   </div>
 </nav>
 <!-- /.navbar -->
 <div class="content-wrapper">
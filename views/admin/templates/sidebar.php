    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-dark-navy" style=" background-color:  #2951a3;">
      <!-- Brand Logo -->
      <a href="index" class="brand-link bg-navy bg-light bg-white">
        <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>Dashboard</strong>Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 mb-3 d-flex">
          <div class="image">
          <?php
      $query = $koneksi->query("SELECT * FROM tb_pengguna WHERE id = '$id' ");
      foreach ($query as $data):
      ?>
            <?php
        $foto = $data['foto'];
        if ($foto==='' OR $foto === null){?>
            <img class="user-image img-circle elevation-2" src="../../assets/image/sistem/admin2.png" alt="User Image">
            <?php } else { ?>
            <img class="user-image img-circle elevation-2" src="../../assets/image/foto_admin/<?= $data['foto']; ?>"
              alt="User Image">
            <?php }?>
          </div>
          <div class="info">
          <!-- <a href="index" class="d-block"><?= $data['nama']; ?></a> -->
          <a href="index" class="d-block"><?= $data['level']; ?><p>
          </div>
        </div>
        <?php endforeach; mysqli_free_result($query);?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index" class="nav-link  <?php if($title == 'Dashboard Admin') echo 'active'?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="profil-perusahaan" class="nav-link <?php if($title == 'Profil Perusahaan') echo 'active' ?>">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Profil Perusahaan
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="" class="nav-link <?php if($title == 'Data Peserta Didik' OR $title == 'Informasi Data Siswa' OR $title == 'Upload Photo Peserta Didik' OR $title == 'Informasi Data Orangtua/Wali' OR $title == 'Tambah Data Siswa' OR $title == 'Data Peserta Didik Yang Belum diverifikasi') echo 'active'?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./data-properti" class="nav-link <?php if($title == 'Data Properti' OR $title == 'Data Galery Properti' OR $title == 'Upload Photo Galery' OR $title == 'Edit Data Properti' OR $title == 'Tambah Data Properti') echo 'active'?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Properti</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-geoekonomi" class="nav-link <?php if($title == 'Data GeoEkonomi' OR $title == 'Tambah Informasi Geoekonomi' OR $title == 'Edit Informasi Geoekonomi') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Geoekonomi</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="data-destinasi-wisata" class="nav-link <?php if($title == 'Edit Informasi Destinasi Wisata' OR $title == 'Tambah Informasi Destinasi Wisata' OR $title == 'Data Destinasi Wisata') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Destinasi Wisata</p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="./data-pengguna" class="nav-link <?php if($title == 'Data Pengguna') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pengguna</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-pembelian" class="nav-link <?php if($title == 'Data Pembelian Pelanggan' OR $title == 'Tambah Data Pembelian' OR $title == 'Edit Data Pembelian') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pembelian</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-pesan" class="nav-link <?php if($title == 'Data Kotak Pesan') echo 'active' ?>">
                  <i class="nav-icon far fa-envelope"></i>
                    <p>Kotak Pesan</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-open">
              <a href="" class="nav-link <?php if($title == 'Konfigurasi Pendaftaran' OR $title == 'Konfigurasi Aplikasi' or $title == 'Konfigurasi Informasi Pendaftaran' OR $title == 'Konfigurasi Informasi User' OR $title == 'Edit Informasi User' OR $title == 'Tambah Informasi User' OR $title == 'Galery Sekolah' OR $title == 'Tambah Galery Sekolah') echo 'active'?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                Data Aplikasi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./konfigurasi-aplikasi" class="nav-link <?php if($title == 'Konfigurasi Aplikasi') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Konfigurasi Aplikasi</p>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a href="setting-pengguna" class="nav-link <?php if($title == 'Setting Pengguna') echo 'active' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Pengguna
                </p>
              </a>
            </li>
            <li class="" style="border-bottom: 1px solid #aaaaaa;"></li>
            <li class="nav-item">
              <a href="../../logout" class="nav-link <?php if($title == 'Setting Pengguna') echo 'active' ?>">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
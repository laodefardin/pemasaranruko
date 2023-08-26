<?php
$title = 'Dashboard Admin';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?php echo ucfirst($title); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?php echo ucfirst($title); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="alert alert-dismissible text-center" style=" background-color:  #2951a3; color: #fff">
            <h5> Selamat Datang di Di Dashboard Admin <?= $data['nama_perusahaan'] ?></h5>
          </div>
        </div>

        <div class="col-lg-3  col-6">
                <!-- small box -->
                <div class="small-box bg-lightblue">
                    <div class="inner">
                        <?php
              $sql = "SELECT count(id_listing) as a FROM tb_properti";
              $query = mysqli_query($koneksi, $sql);
              $data = mysqli_fetch_assoc($query);
              ?>
                        <h3><?= $data['a']; ?></h3>
                        <p>Jumlah Data Properti</p>
                    </div>
                    <a href="data-properti" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3  col-6">
                <!-- small box -->
                <div class="small-box bg-navy">
                    <div class="inner">
                        <?php
              $sql = "SELECT count(id) as a FROM tb_geoekonomi";
              $query = mysqli_query($koneksi, $sql);
              $data = mysqli_fetch_assoc($query);
              ?>
                        <h3><?= $data['a']; ?></h3>
                        <p>Jumlah Data Geoekonomi</p>
                    </div>
                    <a href="data-geoekonomi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3  col-6">
                <!-- small box -->
                <div class="small-box bg-lightblue">
                    <div class="inner">
                        <?php
              $sql = "SELECT count(id_beli) as a FROM tb_pembelian";
              $query = mysqli_query($koneksi, $sql);
              $data = mysqli_fetch_assoc($query);
              ?>
                        <h3><?= $data['a']; ?></h3>
                        <p>Jumlah Data Pembelian</p>
                    </div>
                    <a href="data-geoekonomi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3  col-6">
                <!-- small box -->
                <div class="small-box bg-navy">
                    <div class="inner">
                        <?php
              $sql = "SELECT count(id_pesan) as a FROM tb_pesan";
              $query = mysqli_query($koneksi, $sql);
              $data = mysqli_fetch_assoc($query);
              ?>
                        <h3><?= $data['a']; ?></h3>
                        <p>Jumlah Data Kotak Pesan</p>
                    </div>
                    <a href="data-pesan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- <div class="col-lg-3  col-6">
                
                <div class="small-box bg-lightblue">
                    <div class="inner">
                        <?php
              $sql = "SELECT count(id) as a FROM tb_pengguna WHERE level = 'User'";
              $query = mysqli_query($koneksi, $sql);
              $data = mysqli_fetch_assoc($query);
              ?>
                        <h3><?= $data['a']; ?></h3>
                        <p>Jumlah User</p>
                    </div>
                    <a href="data-pengguna" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>
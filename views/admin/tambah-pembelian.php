<?php
$title = "Tambah Data Pembelian";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
?>

<?php
  //menampilkan pesan jika ada pesan
  if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
  $pesan = $_SESSION['pesan']; ?>

<div id="flash-data" data-flashdata="<?= $_SESSION['notif'];?>" data-type="<?= $_SESSION['status']; ?>"
  data-message="<?= $_SESSION['pesan']; ?>">
</div>
<?php }//mengatur session pesan menjadi kosong
  $_SESSION['pesan'] = '';
  unset($_SESSION['pesan']);
  unset($_SESSION['status']);
  ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home </a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Silahkan Isi dan Cek Data dengan baik dan benar sebelum menyimpan
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid col-sm-8">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!-- <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Online Store Visitors</h3>
                <a href="javascript:void(0);">View Report</a>
              </div>
            </div> -->
            <div class="card-body">
              <form id="myForm" action="../../app/controller/proses-data-pembelian.php" method="POST"
                enctype="multipart/form-data">
                <div class="container-fluid col-sm-10">
                  <!-- your steps content here -->
                  <div id="data-siswa" class="content" role="tabpanel" aria-labelledby="data-siswa-trigger">
                    <div class="text-center mb-lg-4">
                      <strong>
                        <h5>Masukan informasi Pembelian Properti</h6>
                      </strong>
                      <hr>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_pengguna">Pilih Pelanggan: <span class="text-danger">*</span></label>
                          <select name="id_pengguna" class="form-control" style="width: 100%;" required>
                            <option value="">Pilih Data Pelanggan Terlebih Dahulu</option>
                            <?php
                            $query = $koneksi->query("SELECT * FROM tb_pengguna WHERE level = 'User' ");
                            while ($row = mysqli_fetch_array($query)){ ?>
                            <option id="id_pengguna" value="<?= $row['id']; ?>">
                              <?= $row['nama']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="id_listing">Pilih Id Listing : <span class="text-danger">*</span></label>
                          <select name="id_listing" class="form-control" style="width: 100%;" required>
                            <option value="">Pilih Data Id Listing Properti Terlebih Dahulu</option>
                            <?php
                            $query = $koneksi->query("SELECT * FROM tb_properti ");
                            while ($row = mysqli_fetch_array($query)){ ?>
                            <option id="id_listing" value="<?= $row['id_listing']; ?>">
                              <?= $row['id_listing'].' - '.$row['judul']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tanggal">Tanggal Pembelian <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" name="tanggal" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="status">Status <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" value="Lunas" name="status" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="keterangan" id="" cols="30" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                      <a href="data-pembelian" class="btn btn-secondary">Cancel</a>
                      <input type="submit" name="tambah" value="Create new Data" class="btn btn-success float-right" id="submitButton">
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
        document.getElementById("myForm").addEventListener("submit", function (event) {
            // Menonaktifkan tombol "Tambah" saat formulir dikirim
            document.getElementById("submitButton").disabled = true;

            // Validasi formulir secara manual
            if (!document.getElementById("myForm").checkValidity()) {
                event.preventDefault(); // Mencegah pengiriman formulir
            }
        });
    </script>
<?php
include "templates/footer.php";
?>
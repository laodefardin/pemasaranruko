<?php
$title = "Tambah Data Properti";
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

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Silahkan Isi dan Cek Data dengan baik dan benar sebelum menyimpan
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
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
              <form id="myForm" action="../../app/controller/proses-data-addproperti.php" method="POST"
                enctype="multipart/form-data">
                <div class="container-fluid col-sm-10">
                  <!-- your steps content here -->
                  <div id="data-siswa" class="content" role="tabpanel" aria-labelledby="data-siswa-trigger">
                    <div class="text-center mb-lg-4">
                      <strong>
                        <h5>Masukan informasi Properti</h6>
                      </strong>
                      <hr>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="judul">Judul Properti <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="judul" value=""
                            placeholder="Contoh: Alfa Property Ruko Sultan Abdurrahman Kota Pontianak" required>
                        </div>
                        <div class="form-group">
                          <label for="dekskripsi">Detail Deskripsi Properti <span class="text-danger">*</span></label>
                          <textarea class="form-control" name="dekskripsi" id="" cols="30" rows="3" required></textarea>
                        </div>
                        <!-- <div class="form-group">
                          <label for="lokasi">Alamat Lokasi <span class="text-danger">*</span></label>
                          <textarea class="form-control" name="lokasi" id="" cols="30" rows="3" required></textarea>
                          <small class="form-text text-muted">alamat lokasi properti
                            (Contoh: Jl. Abdurrahman Wahid No. 1 depan alfamart).</small>
                        </div> -->
                        <div class="form-group">
                          <label for="lokasiterdekat">Lokasi Terdekat <span class="text-danger">*</span></label>
                          <textarea class="form-control" name="lokasiterdekat" id="" cols="30" rows="2"
                            placeholder="Contoh: Pusat Kota, Bandara, Stasiun Kereta, Mall, dll" required></textarea>
                        </div>
                        <div class="form-group">
                          <label for="kabkota">Masukkan Kabupaten, kota dan Provinsi lokasi properti <span
                              class="text-danger">*</span></label>
                          <input type="text" class="form-control" value="" name="kabkota" required>
                          <small class="form-text text-muted">alamat Kabupaten, kota dan Provinsi lokasi properti
                            (Contoh: Pontianak Kota, Kalimantan Barat).</small>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="kondisibangunan">Kondisi Bangunan <span class="text-danger">*</span></label>
                              <select name="kondisibangunan" class="form-control" required>
                                <option value="baru">Baru</option>
                                <option value="bekas">Bekas</option>
                                <option value="renovasi">Renovasi</option>
                                <option value="rusak">Rusak</option>
                                <option value="lainnya">Lainnya</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="pasokanairpam">Apakah Ada Pasokan Air Pam? <span
                                  class="text-danger">*</span></label>
                              <select name="pasokanairpam" class="form-control" required>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="statussertifikat">Status Sertifikat <span class="text-danger">*</span></label>
                              <select name="statussertifikat" class="form-control" required>
                                <option value="Sertifikat Hak Milik (SHM)">Sertifikat Hak Milik (SHM)</option>
                                <option value="Hak Guna Bangunan (HGB)">Hak Guna Bangunan (HGB)</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="lainnya">Lainnya</option>
                              </select>
                              <small class="form-text text-muted">Masukkan status Sertifikat Kepemilikan
                                properti</small>
                            </div>
                            <div class="form-group">
                              <label for="pasokanairtanah">Apakah Ada Pasokan Air Tanah? <span
                                  class="text-danger">*</span></label>
                              <select name="pasokanairtanah" class="form-control" required>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                              </select>
                            </div>
                          </div>
                        </div>



                      </div>

                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="hargajual">Harga Jual <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="hargajual" value="Rp " required>
                              <small class="form-text text-muted">Masukkan harga jual properti Contoh: Rp 68.71 Juta
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="luasbangunan">Luas Bangunan <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" value="" name="luasbangunan" required>
                              <small class="form-text text-muted">Masukkan luas Bangunan contoh:
                                614<sup>m2</sup></small>
                            </div>
                            <div class="form-group">
                              <label for="arahmenghadap">Pilih Arah Menghadap: <span
                                  class="text-danger">*</span></label>
                              <select name="arahmenghadap" class="form-control" required>
                                <option value="utara">Utara</option>
                                <option value="selatan">Selatan</option>
                                <option value="barat">Barat</option>
                                <option value="timur">Timur</option>
                                <option value="utara-timur">Utara Timur</option>
                                <option value="utara-barat">Utara Barat</option>
                                <option value="selatan-timur">Selatan Timur</option>
                                <option value="selatan-barat">Selatan Barat</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="jumlahlantai">Jumlah Lantai<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jumlahlantai" value="" required>
                            </div>
                            <div class="form-group">
                              <label for="jalurmobil">Jumlah Jalur Mobil<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jalurmobil" value="" required>
                            </div>
                            <div class="form-group">
                              <label for="jmlkamartidur">Jumlah Kamar Tidur <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" value="" name="jmlkamartidur" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="hargasewa">Harga Sewa<small class="form-text text-muted"></small></label>
                              <input type="text" class="form-control" name="hargasewa" value="Rp " required>
                              <small class="form-text text-muted">Opsional Jika
                                Properti dapat disewa, Masukkan harga sewa perbulan jika properti bisa di
                                sewa Contoh: Rp 68.71 Juta/Bulan </small>
                            </div>
                            <div class="form-group">
                              <label for="luastanah">Luas Tanah <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" value="" name="luastanah" required>
                              <small class="form-text text-muted">Masukkan Luas Tanah contoh: 360<sup>m2</sup></small>
                            </div>
                            <div class="form-group">
                              <label for="jmlkamarmandi">Jumlah Kamar Mandi<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jmlkamarmandi" value="" required>
                            </div>
                            <div class="form-group">
                              <label for="jmlgarasi">Jumlah Garasi <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jmlgarasi" value="" required>
                            </div>
                            <div class="form-group">
                              <label for="interior">Pilih Interior <span class="text-danger">*</span></label>
                              <select name="interior" class="form-control" required>
                                <option value="minimalis">Minimalis</option>
                                <option value="klasik">Klasik</option>
                                <option value="modern">Modern</option>
                                <option value="vintage">Vintage</option>
                                <option value="industrial">Industrial</option>
                                <option value="skandinavia">Skandinavia</option>
                                <option value="eclectic">Eclectic</option>
                                <option value="lainnya">Lainnya</option>
                              </select>
                              <small class="form-text text-muted">Masukkan status Sertifikat Kepemilikan
                                properti</small>
                            </div>
                            <div class="form-group">
                              <label for="dayalistrik">Daya Listrik <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" placeholder="Masukkan daya listrik dalam watt"
                                value="" name="dayalistrik" required>
                              <small class="form-text text-muted">Masukkan daya listrik properti contoh: 10600</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
          <a href="data-properti" class="btn btn-secondary">Cancel</a>
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
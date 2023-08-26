<?php
$title = "Edit Data Properti";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
$id = $_GET['idlisting'];
$query = $koneksi->query("SELECT * FROM tb_properti WHERE id_listing = $id ");
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
            Silahkan edit Data dengan baik dan benar sebelum menyimpan
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
            <?php
            foreach ($query as $data): ?>
              <form action="../../app/controller/proses-data-updateproperti.php" method="POST"
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
                          <input type="text" value='<?= $id ?>' name="idlisting" hidden>
                          <label for="judul">Judul Properti <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>"
                            placeholder="Contoh: Alfa Property Ruko Sultan Abdurrahman Kota Pontianak" required>
                        </div>
                        <div class="form-group">
                          <label for="dekskripsi">Detail Deskripsi Properti <span class="text-danger">*</span></label>
                          <textarea class="form-control" name="dekskripsi" id="" cols="30" rows="3" required><?= $data['dekskripsi'] ?></textarea>
                        </div>
                        <!-- <div class="form-group">
                          <label for="lokasi">Alamat Lokasi <span class="text-danger">*</span></label>
                          <textarea class="form-control" name="lokasi" id="" cols="30" rows="3" required><?= $data['lokasi'] ?></textarea>
                          <small class="form-text text-muted">alamat lokasi properti
                            (Contoh: Jl. Abdurrahman Wahid No. 1 depan alfamart).</small>
                        </div> -->
                        <div class="form-group">
                          <label for="lokasiterdekat">Lokasi Terdekat <span class="text-danger">*</span></label>
                          <textarea class="form-control" name="lokasiterdekat" id="" cols="30" rows="2"
                            placeholder="Contoh: Pusat Kota, Bandara, Stasiun Kereta, Mall, dll" required><?= $data['lokasiterdekat'] ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="kabkota">Masukkan Kabupaten, kota dan Provinsi lokasi properti <span
                              class="text-danger">*</span></label>
                          <input type="text" class="form-control" value="<?= $data['kabkota'] ?>" name="kabkota" required>
                          <small class="form-text text-muted">alamat Kabupaten, kota dan Provinsi lokasi properti
                            (Contoh: Pontianak Kota, Kalimantan Barat).</small>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="kondisibangunan">Kondisi Bangunan <span class="text-danger">*</span></label>
                              <select name="kondisibangunan" class="form-control" required>
                                <option value="Baru"<?php if ($data['kondisibangunan'] == 'Baru') { echo 'selected'; } ?>>Baru</option>
                                <option value="Bekas"<?php if ($data['kondisibangunan'] == 'Bekas') { echo 'selected'; } ?>>Bekas</option>
                                <option value="Renovasi"<?php if ($data['kondisibangunan'] == 'Renovasi') { echo 'selected'; } ?>>Renovasi</option>
                                <option value="Rusak"<?php if ($data['kondisibangunan'] == 'Rusak') { echo 'selected'; } ?>>Rusak</option>
                                <option value="lainnya"<?php if ($data['kondisibangunan'] == 'lainnya') { echo 'selected'; } ?>>Lainnya</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="pasokanairpam">Apakah Ada Pasokan Air Pam? <span
                                  class="text-danger">*</span></label>
                              <select name="pasokanairpam" class="form-control" required>
                              <option value="Ya"<?php if ($data['pasokanairpam'] == 'Ya') { echo 'selected'; } ?>>Ya</option>
                                <option value="Tidak"<?php if ($data['pasokanairpam'] == 'Tidak') { echo 'selected'; } ?>>Tidak</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="statussertifikat">Status Sertifikat <span class="text-danger">*</span></label>
                              <select name="statussertifikat" class="form-control" required>
                                <option value="Sertifikat Hak Milik (SHM)"<?php if ($data['statussertifikat'] == 'Sertifikat Hak Milik (SHM)') { echo 'selected'; } ?>>Sertifikat Hak Milik (SHM)</option>
                                <option value="Hak Guna Bangunan (HGB)"<?php if ($data['statussertifikat'] == 'Hak Guna Bangunan (HGB)') { echo 'selected'; } ?>>Hak Guna Bangunan (HGB)</option>
                                <option value="Hak Pakai"<?php if ($data['statussertifikat'] == 'Hak Pakai') { echo 'selected'; } ?>>Hak Pakai</option>
                                <option value="lainnya"<?php if ($data['statussertifikat'] == 'lainnya') { echo 'selected'; } ?>>Lainnya</option>
                              </select>
                              <small class="form-text text-muted">Masukkan status Sertifikat Kepemilikan
                                properti</small>
                            </div>
                            <div class="form-group">
                              <label for="pasokanairtanah">Apakah Ada Pasokan Air Tanah? <span
                                  class="text-danger">*</span></label>
                              <select name="pasokanairtanah" class="form-control" required>
                                <option value="Ya"<?php if ($data['pasokanairtanah'] == 'Ya') { echo 'selected'; } ?>>Ya</option>
                                <option value="Tidak"<?php if ($data['pasokanairtanah'] == 'Tidak') { echo 'selected'; } ?>>Tidak</option>
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
                              <input type="text" class="form-control" name="hargajual" value="<?= $data['hargajual'] ?>" required>
                              <small class="form-text text-muted">Masukkan harga jual properti Contoh: Rp 68.71 Juta
                              </small>
                            </div>
                            <div class="form-group">
                              <label for="luasbangunan">Luas Bangunan <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" value="<?= $data['luasbangunan'] ?>" name="luasbangunan" required>
                              <small class="form-text text-muted">Masukkan luas Bangunan contoh:
                                614<sup>m2</sup></small>
                            </div>
                            <div class="form-group">
                              <label for="arahmenghadap">Pilih Arah Menghadap: <span
                                  class="text-danger">*</span></label>
                              <select name="arahmenghadap" class="form-control" required>
                                <option value="Utara"<?php if ($data['arahmenghadap'] == 'Utara') { echo 'selected'; } ?>>Utara</option>
                                <option value="Selatan"<?php if ($data['arahmenghadap'] == 'Selatan') { echo 'selected'; } ?>>Selatan</option>
                                <option value="Barat"<?php if ($data['arahmenghadap'] == 'Barat') { echo 'selected'; } ?>>Barat</option>
                                <option value="Timur"<?php if ($data['arahmenghadap'] == 'Timur') { echo 'selected'; } ?>>Timur</option>
                                <option value="Utara Timur"<?php if ($data['arahmenghadap'] == 'Utara Timur') { echo 'selected'; } ?>>Utara Timur</option>
                                <option value="Utara Barat"<?php if ($data['arahmenghadap'] == 'Utara Barat') { echo 'selected'; } ?>>Utara Barat</option>
                                <option value="Selatan Timur"<?php if ($data['arahmenghadap'] == 'Selatan Timur') { echo 'selected'; } ?>>Selatan Timur</option>
                                <option value="Selatan Barat"<?php if ($data['arahmenghadap'] == 'Selatan Barat') { echo 'selected'; } ?>>Selatan Barat</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="jumlahlantai">Jumlah Lantai<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jumlahlantai" value="<?= $data['jumlahlantai'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="jalurmobil">Jumlah Jalur Mobil<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jalurmobil" value="<?= $data['jalurmobil'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="jmlkamartidur">Jumlah Kamar Tidur <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" value="<?= $data['jmlkamartidur'] ?>" name="jmlkamartidur" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="hargasewa">Harga Sewa<small class="form-text text-muted"></small></label>
                              <input type="text" class="form-control" name="hargasewa" value="<?= $data['hargasewa'] ?>" required>
                              <small class="form-text text-muted">Opsional Jika
                                Properti dapat disewa, Masukkan harga sewa perbulan jika properti bisa di
                                sewa Contoh: Rp 68.71 Juta/Bulan </small>
                            </div>
                            <div class="form-group">
                              <label for="luastanah">Luas Tanah <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" value="<?= $data['luastanah'] ?>" name="luastanah" required>
                              <small class="form-text text-muted">Masukkan Luas Tanah contoh: 360<sup>m2</sup></small>
                            </div>
                            <div class="form-group">
                              <label for="jmlkamarmandi">Jumlah Kamar Mandi<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jmlkamarmandi" value="<?= $data['jmlkamarmandi'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="jmlgarasi">Jumlah Garasi <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="jmlgarasi" value="<?= $data['jmlgarasi'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="interior">Pilih Interior <span class="text-danger">*</span></label>
                              <select name="interior" class="form-control" required>
                                <option value="Minimalis" <?php if ($data['interior'] == 'Minimalis') { echo 'selected'; } ?> >Minimalis</option>
                                <option value="Klasik"<?php if ($data['interior'] == 'Klasik') { echo 'selected'; } ?>>Klasik</option>
                                <option value="Modern"<?php if ($data['interior'] == 'Modern') { echo 'selected'; } ?>>Modern</option>
                                <option value="Vintage"<?php if ($data['interior'] == 'Vintage') { echo 'selected'; } ?>>Vintage</option>
                                <option value="Industrial"<?php if ($data['interior'] == 'Industrial') { echo 'selected'; } ?>>Industrial</option>
                                <option value="Skandinavia"<?php if ($data['interior'] == 'Skandinavia') { echo 'selected'; } ?>>Skandinavia</option>
                                <option value="Eclectic"<?php if ($data['interior'] == 'Eclectic') { echo 'selected'; } ?>>Eclectic</option>
                                <option value="Lainnya"<?php if ($data['interior'] == 'Lainnya') { echo 'selected'; } ?>>Lainnya</option>
                                <option value="-"<?php if ($data['interior'] == '-') { echo 'selected'; } ?>>-</option>
                              </select>
                              <small class="form-text text-muted">Masukkan status Sertifikat Kepemilikan
                                properti</small>
                            </div>
                            <div class="form-group">
                              <label for="dayalistrik">Daya Listrik <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" placeholder="Masukkan daya listrik dalam watt"
                                value="<?= $data['dayalistrik'] ?>" name="dayalistrik" required>
                              <small class="form-text text-muted">Masukkan daya listrik properti contoh: 10600</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
          <a href="data-properti" class="btn btn-secondary">Cancel</a>
          <!-- <button type="submit" class="btn btn-success float-right" name="update"><i class="nav-icon fas fa-save"> Simpan</i></button> -->
          <input type="submit" name="update" value="SimpanData" class="btn btn-success float-right">
        </div>
                  </div>
                </div>
              </form>
              <?php
            endforeach;
            mysqli_free_result($query);
            ?>

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

<?php
include "templates/footer.php";
?>
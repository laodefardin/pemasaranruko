<?php
$title = 'Profil Perusahaan';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
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

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Default box -->

      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <?php
            foreach ($query as $data): ?>
              <form action="../../app/controller/proses-profilperusahaan" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Nama Perusahaan</label>
                  <textarea id="compose-textarea" name="namaperusahaan" class="form-control" style="height: 600px"
                    required>
                  <?= $data['profil_perusahaan'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Bidang Usaha</label>
                  <textarea id="compose2-textarea" name="bidangusaha" class="form-control" style="height: 600px"
                    required>
                  <?= $data['bidangusaha'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Alamat Kantor</label>
                  <textarea id="compose3-textarea" name="alamatkantor" class="form-control" style="height: 600px"
                    required>
                  <?= $data['alamatkantor'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Kontak</label>
                  <textarea id="compose4-textarea" name="kontak" class="form-control" style="height: 600px" required>
                  <?= $data['kontak'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Visi Misi</label>
                  <textarea id="compose5-textarea" name="visimisi" class="form-control" style="height: 600px" required>
                  <?= $data['visimisi'] ?>
                    </textarea>
                </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-5">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label for="">Nilai Perusahaan</label>
                <textarea id="compose6-textarea" name="nilaiperusahaan" class="form-control" style="height: 600px"
                  required>
                  <?= $data['nilaiperusahaan'] ?>
                    </textarea>
              </div>
              <div class="form-group">
                <label for="">Sejarah Perusahaan</label>
                <textarea id="compose7-textarea" name="sejarah" class="form-control" style="height: 600px" required>
                  <?= $data['sejarah'] ?>
                    </textarea>
              </div>
              <div class="form-group">
                <label for="">Struktur Perusahaan</label>
                <textarea id="compose8-textarea" name="strukturorga" class="form-control" style="height: 600px"
                  required>
                  <?= $data['strukturorga'] ?>
                    </textarea>
              </div>
              <div class="form-group">
                <label for="">Sertifikasi Perusahaan</label>
                <textarea id="compose9-textarea" name="sertifikasi" class="form-control" style="height: 600px" required>
                  <?= $data['sertifikasi'] ?>
                    </textarea>
              </div>
              <div class="form-group">
                <label for="">Motto Perusahaan</label>
                <textarea id="compose10-textarea" name="motto" class="form-control" style="height: 600px" required>
                  <?= $data['motto'] ?>
                    </textarea>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>

        <div class="col-lg-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Upload Thumbnail Gambar</h3>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <?php 
                if ($data['logo'] === null OR $data['logo'] === ''){ ?>

                  <?php }else{ ?>
                  <a href="../../assets/image/sistem/<?= $data['logo'] ?>" data-fancybox="gal">
                    <img src="../../assets/image/sistem/<?= $data['logo'] ?>" alt="Image" class="img-fluid"></a>
                  <?php } ?>
                  <p></p>
                  <div class="form-group">
                    <div class="form-group">
                      <div class="custom-file">
                        <input class="custom-file-input" id="customFile" type="file" name="foto"
                          value="<?= $data['logo'] ?>">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                      <small class="form-text text-muted">Upload Gambar Thumbnail usahakan memiliki ukuran yang memiliki
                        kualitas yang baik agar tidak pecah</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
            endforeach;
            mysqli_free_result($query);
            ?>
          </div>
          <!-- /.card-body -->
        </div>

        <div class="col-12 mb-5">
          <button type="button" class="btn btn-secondary btn-sm" onclick="self.history.back()"> Batal</button>
          <button type="submit" name="tambah" class="btn btn-success btn-sm float-left mr-3"><i class="fas fa-plus"></i>
            Simpan Data</button>
        </div>
        </form>

      </div>
      <!-- /.card -->

    </div>
</div>
</section>

<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>
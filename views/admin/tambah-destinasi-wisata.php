<?php
$title = 'Tambah Informasi Destinasi Wisata';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
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
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Buat Informasi Destinasi Wisata</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="../../app/controller/proses-data-adddestinasiwisata" method="post" enctype="multipart/form-data">
                <input type="text" name="penulis" value="<?= $_SESSION['username'] ?>" hidden>
                <div class="form-group">
                  <input class="form-control" name="judul" placeholder="Judul:" required>
                </div>
                <!-- <div class="form-group">
                <input class="form-control" placeholder="Kategori:">
              </div> -->
                <div class="form-group">
                  <textarea id="compose-textarea" name="isi_informasi" class="form-control" style="height: 300px" required>

                    </textarea>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="float-right">
                <button type="button" class="btn btn-danger btn-sm" onclick="self.history.back()"> Batal</button>
                <button type="submit" name="tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</button>
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Upload Thumbnail Gambar</h3>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-group">
                      <div class="custom-file">
                        <input class="custom-file-input" id="customFile" type="file" name="foto" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                      <small class="form-text text-muted">Upload Gambar Thumbnail usahakan memiliki ukuran yang memiliki
                        kualitas yang baik agar tidak pecah</small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- &nbsp; &nbsp;<input class="btn btn-primary btn-sm" name="tambah" type="submit" value="Tambah">
                &nbsp;
                <input class="btn btn-danger btn-sm" id="reset" type="reset" value="Batal"
                  onclick="self.history.back()"> -->
            </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
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
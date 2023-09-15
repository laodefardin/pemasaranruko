<?php
$title = "Upload Photo Galery";
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
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
        <div class="col-lg-6">
          <div class="card">
            <!-- <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Online Store Visitors</h3>
                <a href="javascript:void(0);">View Report</a>
              </div>
            </div> -->
            <div class="card-body">
            <form id="myForm" action="../../app/controller/proses-upload-photo.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                    <input type="text" value="<?= $_GET['idlisting']; ?>" name="idlisting" hidden>

                        <div class="custom-file">
                          <input class="custom-file-input" id="customFile" type="file" name="foto" required>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <small class="form-text text-muted">Upload Gambar Galery usahakan memiliki ukuran yang sama pada gambar yang di upload sebelumnya.</small>
                      </div>                      
                    </div>
                  </div>
                </div>
                &nbsp; &nbsp;
                <input class="btn btn-primary btn-sm" name="tambah" type="submit" value="Tambah" id="submitButton">
                &nbsp;
                <input class="btn btn-danger btn-sm" id="reset" type="reset" value="Cencel"
                  onclick="self.history.back()">
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
            // Menonaktifkan tombol "Submit" saat formulir dikirim
            document.getElementById("submitButton").disabled = true;
        });
    </script>

<?php
include "templates/footer.php";
?>
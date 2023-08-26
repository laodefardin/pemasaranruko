<?php
$title = "Konfigurasi Aplikasi";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
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

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-warning">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Konfigurasi untuk aplikasi
          </div>

        </div>
      </div>
    </div>
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
              <div class="col-md-12">
                <form action="../../app/controller/proses-konfigurasi-aplikasi.php" method="post"
                  enctype="multipart/form-data">
                  <?php foreach ($query as $data) : ?>
                  <div class="card mb-3">
                    <div class="card-header">
                      General
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                          <tbody>
                            <!-- <tr>
                              <input type="text" value="<?=$title?>" name="title" hidden>
                              <td>Nama Aplikasi</td>
                              <td>
                                <input class="form-control" type="text" name="nama_website" id="nama_website"
                                  value="<?= $data['nama_website'] ?>">
                              </td>
                            </tr> -->
                            <tr>
                              <td>Nama Perusahaan</td>
                              <td>
                                <input class="form-control" type="text" name="nama_perusahaan" id="nama_perusahaan"
                                  value="<?= $data['nama_perusahaan'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Email Perusahaan</td>
                              <td>
                                <textarea class="form-control" name="email"
                                  id="email"><?= $data['email'] ?></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>No Handphone Perusahaan</td>
                              <td>
                              <input class="form-control" type="number" name="no_hp" id="no_hp"
                                  value="<?= $data['no_hp'] ?>">
                              </td>
                            </tr>
                            <!-- <tr>
                              <td>Logo Perusahaan</td>
                              <td>
                                <div class="form-group">
                                  <div class="custom-file">
                                    <input class="custom-file-input" id="customFile" type="file" name="foto">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                                </div>
                              </td>
                            </tr> -->
                            <!-- <tr>
                              <td>Logo Perusahaan - Footer</td>
                              <td>
                                <div class="form-group">
                                <img class="profile-user-img img-fluid img-retangle" src="../../assets/image/sistem/<?= $data['foto']?>" alt="User profile picture">
                                <br>
                                  <div class="custom-file">
                                    <input class="custom-file-input" id="customFile" type="file" name="logofooter">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                                </div>
                              </td>
                            </tr> -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
                  <?php endforeach; mysqli_free_result($query);?>
                </form>

              </div>
            </div>
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
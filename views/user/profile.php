<?php
$title = 'Profile';
include "templates/header.php";
include "templates/menu.php";
// include "app/config/koneksi.php";
// $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
// $data = mysqli_fetch_assoc($query);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container mt-4">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index">Beranda</a></li>
          <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>

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
<div class="content">
  <div class="container">
    <div class="col-md-8">
      <div class="card card-primary" style="font-size: 15px;border: 1px solid #cdcdcd;">
        <?php 
       include "../../app/config/koneksi.php";
       $id = $_SESSION['id'];
       $query = $koneksi->query("SELECT * FROM tb_pengguna WHERE id = '$id' ");
       $data = mysqli_fetch_assoc($query);
       ?>
        <form class="form-horizontal" action="../../app/controller/proses-profile.php" method="post"
          enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group row">
              <input type="text" name="id" value="<?= $id ?>" hidden>
              <label for="nama" class="col-sm-3 col-form-label">NAMA</label>
              <div class="col-sm-9">
                <input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
                  value="<?= $data['nama'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <input type="text" name="id" value="<?= $id ?>" hidden>
              <label for="username" class="col-sm-3 col-form-label">USERNAME</label>
              <div class="col-sm-9">
                <input type="username" class="form-control" id="nama" name="username" placeholder="Masukkan Username"
                  value="<?= $data['username'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">EMAIL</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                  value="<?= $data['email'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="nohp" class="col-sm-3 col-form-label">TELEPHONE</label>
              <div class="col-sm-9">
                <input type="nohp" class="form-control" id="nohp" name="nohp" placeholder="Masukkan Telephone / HandPhone"
                  value="<?= $data['nohp'] ?>">
              </div>
            </div>
            <hr>
            <p>Jika ingin mengubah password Anda ketik yang baru. Jika tidak biarkan kosong.</p>
            <?php
                //menampilkan pesan jika ada pesan
                if (isset($_SESSION['pesannotif']) && $_SESSION['pesannotif'] <> '') {
                    echo $pesan = $_SESSION['pesannotif'];
                    
                }
                //mengatur session pesan menjadi kosong
                $_SESSION['pesannotif'] = '';
                ?>
            <div class="form-group row">
              <label for="newpassword" class="col-sm-3 col-form-label">KATA SANDI</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Masukkan Kata Sandi">
              </div>
            </div>
            <div class="form-group row">
              <label for="passwordrepeat" class="col-sm-3 col-form-label">ULANG KATA SANDI</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="passwordrepeat" id="passwordrepeat" placeholder="Ulangi Kata Sandi">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <center><button type="submit" class="btn btn-primary text-center">SIMPAN PROFIL</button></center>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>


  </div>
</div>
</div>

<?php
include "templates/footer.php";
?>
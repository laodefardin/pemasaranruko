<?php
session_start();
include "../config/koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];

$newpassword = $_POST['newpassword'];
$passwordrepeat = $_POST['passwordrepeat'];

// cek dulu ke database dengan query select
$query = $koneksi->query("SELECT * FROM tb_pengguna WHERE id = '$id' ");

// Cek apakah kolom newpassword terisi
if (!empty($newpassword)) {
  // Pastikan newpassword dan repeatpassword sesuai
  if ($newpassword === $passwordrepeat) {
      // Jalankan proses ubah password
// ubah password baru ke hassing
$password_sha1 = md5(sha1(md5($newpassword)));
$update = $koneksi->query("UPDATE tb_pengguna SET password='$password_sha1', nama='$nama', username='$username', email='$email', nohp='$nohp' WHERE id = '$id' ");
$_SESSION['pesan'] = 'Data Profile Berhasil Di Update';
$_SESSION['status'] = 'success';
echo "<script> document.location.href='../../views/user/profile';</script>";
die();
  } else {
    $_SESSION['pesannotif'] = "
    <div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
    <h5><i class=\"icon fas fa-ban\"></i> Alert!</h5>
    Kata Sandi dan Ulang Kata sandi yang dimasukkan tidak sama, mohon pastikan kata sandi yang di input benar. 
  </div>";
  echo "<script> document.location.href='../../views/user/profile';</script>";
  die();
  }
} else {
  $update = $koneksi->query("UPDATE tb_pengguna SET username='$username', nama='$nama', email='$email', nohp='$nohp' WHERE id = '$id' ");
  $_SESSION['pesan'] = 'Data Profile Berhasil Di Update';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/user/profile';</script>";
  die();
}
?>
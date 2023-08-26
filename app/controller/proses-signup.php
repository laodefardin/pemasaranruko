<?php
session_start();
include "../config/koneksi.php";

$currentDate = date('Y-m-d H:i:s');

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];

$newpassword = $_POST['newpassword'];
$passwordrepeat = $_POST['repeatpassword'];


// Query untuk memeriksa apakah username sudah ada
$sql = "SELECT username FROM tb_pengguna WHERE username = '$username'";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
  // Username sudah ada, tampilkan pesan
  $_SESSION['pesannotif'] = "
  <div class='alert alert-danger alert-dismissible'>
  Username sudah terdaftar. Silakan login atau masukkan username lain 
</div>";
echo "<script> document.location.href='../../auth-signup';</script>";
} else {

  // Pastikan newpassword dan repeatpassword sesuai
if ($newpassword === $passwordrepeat) {
  // Jalankan proses ubah password
// ubah password baru ke hassing
$password_sha1 = md5(sha1(md5($newpassword)));

if (strpos($nohp, "08") === 0) {
  $formattedNumber = "62" . substr($nohp, 1); 
  
  $tambah  = $koneksi->query("INSERT INTO tb_pengguna (username, nama, email, nohp, password, level, foto, tanggal) VALUES
('$username','$nama','$email','$formattedNumber','$password_sha1','User','','$currentDate')
");

$_SESSION['pesan'] = 'Data Profile Berhasil Di Update';
$_SESSION['status'] = 'success';

echo '<script>alert("Akun berhasil dibuat, Silahkan login.");</script>';

echo '<script>window.location.href = "../../auth-signin";</script>';
die();

} else {
  $formattedNumber = $nohp;

  $tambah  = $koneksi->query("INSERT INTO tb_pengguna (username, nama, email, nohp, password, level, foto, tanggal) VALUES
('$username','$nama','$email','$formattedNumber','$password_sha1','User','','$currentDate')
");

$_SESSION['pesan'] = 'Data Profile Berhasil Di Update';
$_SESSION['status'] = 'success';
echo '<script>alert("Akun berhasil dibuat, Silahkan login.");</script>';
echo '<script>window.location.href = "../../auth-signin";</script>';
die();

}

} else {
$_SESSION['pesannotif'] = "
<div class='alert alert-danger alert-dismissible'>
Kata Sandi dan Ulang Kata sandi yang dimasukkan tidak sama, mohon pastikan kata sandi yang di input benar. 
</div>";
echo "<script> document.location.href='../../auth-signup';</script>";
die();
}

}

?>
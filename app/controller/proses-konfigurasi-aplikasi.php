<?php
include "../config/koneksi.php";
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start(); 

  $nama_perusahaan = $_POST['nama_perusahaan'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];

  $update = "UPDATE tb_konfigurasi SET nama_perusahaan='$nama_perusahaan', email='$email', no_hp='$no_hp'";
  $sql = mysqli_query($koneksi, $update);
  $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/konfigurasi-aplikasi';</script>";
  die(); 
?>
<?php
session_start();
if (isset($_POST['update'])){
  // Mengatur zona waktu sesuai dengan lokasi Anda
  date_default_timezone_set('Asia/Makassar');
  // Mendapatkan tanggal sekarang
  $currentDate = date('Y-m-d H:i:s');
  
  include "../config/koneksi.php";

  $idlisting = mysqli_real_escape_string($koneksi, trim($_POST['idlisting']));

  $judul = mysqli_real_escape_string($koneksi, trim($_POST['judul']));
  $dekskripsi = mysqli_real_escape_string($koneksi, trim($_POST['dekskripsi']));
  // $lokasi = mysqli_real_escape_string($koneksi, trim($_POST['lokasi']));
  $lokasiterdekat = mysqli_real_escape_string($koneksi, trim($_POST['lokasiterdekat']));
  $kabkota = mysqli_real_escape_string($koneksi, trim($_POST['kabkota']));
  $kondisibangunan = mysqli_real_escape_string($koneksi, trim($_POST['kondisibangunan']));
  $statussertifikat = mysqli_real_escape_string($koneksi, trim($_POST['statussertifikat']));
  $hargajual = mysqli_real_escape_string($koneksi, trim($_POST['hargajual']));
  $luasbangunan = mysqli_real_escape_string($koneksi, trim($_POST['luasbangunan']));
  $arahmenghadap = mysqli_real_escape_string($koneksi, trim($_POST['arahmenghadap']));
  $jumlahlantai = mysqli_real_escape_string($koneksi, trim($_POST['jumlahlantai']));
  $jalurmobil = mysqli_real_escape_string($koneksi, trim($_POST['jalurmobil']));
  $pasokanairpam = mysqli_real_escape_string($koneksi, trim($_POST['pasokanairpam']));
  $jmlkamartidur = mysqli_real_escape_string($koneksi, trim($_POST['jmlkamartidur'])); 
  $hargasewa = mysqli_real_escape_string($koneksi, trim($_POST['hargasewa']));
  $luastanah = mysqli_real_escape_string($koneksi, trim($_POST['luastanah']));
  $jmlkamarmandi = mysqli_real_escape_string($koneksi, trim($_POST['jmlkamarmandi']));
  $jmlgarasi = mysqli_real_escape_string($koneksi, trim($_POST['jmlgarasi']));
  $pasokanairtanah = mysqli_real_escape_string($koneksi, trim($_POST['pasokanairtanah']));
  $interior = mysqli_real_escape_string($koneksi, trim($_POST['interior']));
  $dayalistrik = mysqli_real_escape_string($koneksi, trim($_POST['dayalistrik']));

  $slug = trim($judul); // Menghapus spasi di awal dan akhir
$slug = strtolower($slug); // Mengubah semua huruf menjadi huruf kecil
$slug = preg_replace('/[^a-z0-9-]/', '-', $slug); // Menghapus karakter non-alfanumerik, kecuali tanda hubung
$slug = preg_replace('/-+/', '-', $slug); // Menghapus tanda hubung berulang

 $update = "UPDATE tb_properti SET  slug='$slug',
 judul = '$judul', dekskripsi = '$dekskripsi', lokasiterdekat='$lokasiterdekat', kabkota='$kabkota', kondisibangunan='$kondisibangunan', statussertifikat='$statussertifikat', hargajual='$hargajual', luasbangunan='$luasbangunan', arahmenghadap='$arahmenghadap', jumlahlantai='$jumlahlantai', jalurmobil='$jalurmobil', pasokanairpam='$pasokanairpam', jmlkamartidur='$jmlkamartidur', hargasewa='$hargasewa', luastanah='$luastanah', jmlkamarmandi='$jmlkamarmandi', jmlgarasi='$jmlgarasi', pasokanairtanah='$pasokanairtanah', interior='$interior', dayalistrik='$dayalistrik', tgl_ubah='$currentDate'
WHERE id_listing = '$idlisting'";
  
      $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
      $_SESSION['pesan'] = 'Data Properti Berhasil Diupdate';
      $_SESSION['status'] = 'success';
      echo "<script> document.location.href='../../views/admin/data-properti-edit?idlisting=$idlisting';</script>";
      die();
    }
?>
<?php
session_start();
if (isset($_POST['tambah'])){
  // Mengatur zona waktu sesuai dengan lokasi Anda
  date_default_timezone_set('Asia/Makassar');
  // Mendapatkan tanggal sekarang
  $currentDate = date('Y-m-d H:i:s');
  
  include "../config/koneksi.php";

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
  
  $idListing = mt_rand(10000, 99999);


$slug = trim($judul); // Menghapus spasi di awal dan akhir
$slug = strtolower($slug); // Mengubah semua huruf menjadi huruf kecil
$slug = preg_replace('/[^a-z0-9-]/', '-', $slug); // Menghapus karakter non-alfanumerik, kecuali tanda hubung
$slug = preg_replace('/-+/', '-', $slug); // Menghapus tanda hubung berulang


  $query = 'INSERT INTO tb_properti (
    id_listing, slug, judul, dekskripsi, lokasiterdekat, kabkota, kondisibangunan, statussertifikat, hargajual, luasbangunan, arahmenghadap, jumlahlantai, jalurmobil, pasokanairpam, jmlkamartidur, hargasewa, luastanah, jmlkamarmandi, jmlgarasi, pasokanairtanah, interior, dayalistrik, tgl_buat, tgl_ubah, statusproperti)
    VALUES (
      "'.$idListing.'", 
      "'.$slug.'", 
      "'.$judul.'", 
      "'.$dekskripsi.'", 
      "'.$lokasiterdekat.'", 
      "'.$kabkota.'", 
      "'.$kondisibangunan.'", 
      "'.$statussertifikat.'",
      "'.$hargajual.'", 
      "'.$luasbangunan.'", 
      "'.$arahmenghadap.'", 
      "'.$jumlahlantai.'", 
      "'.$jalurmobil.'", 
      "'.$pasokanairpam.'", 
      "'.$jmlkamartidur.'", 
      "'.$hargasewa.'", 
      "'.$luastanah.'", 
      "'.$jmlkamarmandi.'", 
      "'.$jmlgarasi.'", 
      "'.$pasokanairtanah.'", 
      "'.$interior.'", 
      "'.$dayalistrik.'", 
      "'.$currentDate.'", 
      "'.$currentDate.'",
      "0")';
  
      $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      $_SESSION['pesan'] = 'Data Properti Berhasil Ditambahkan';
      $_SESSION['status'] = 'success';
      echo "<script> document.location.href='../../views/admin/data-properti';</script>";
      die();

      // Tampilkan pesan alert
      // echo '<script>alert("Selamat anda berhasil registrasi. Silahkan Login dan Melakukan Cetak Bukti Registrasi");</script>';
      // echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
    }
?>
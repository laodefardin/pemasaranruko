<?php
include("app/config/koneksi.php");
//buat koneksi ke mysql dari file config.php
if (isset($_POST["submit"])) {
  // form telah disubmit, proses data
  // ambil nilai form
$email = htmlentities(strip_tags(trim($_POST["email"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));
// include("koneksi.php");
session_start();
//filter dengan mysqli_real_escape_string
$email = $koneksi->escape_string($email);
$password = $koneksi->escape_string($password);

//generate hashing
$password_sha1 = md5(sha1(md5($password)));
  // $password_sha1 = sha1($password);

// cek apakah username dan password ada di tabel 
  $query = "SELECT * FROM tb_pengguna WHERE email = '$email' AND password = '$password_sha1'";
$result = $koneksi->query($query);
$row = $result->num_rows;
  $sql = $koneksi->query("SELECT * FROM tb_pengguna WHERE email = '$email'");
$akun = $sql->fetch_assoc();

  if ($row > 0 ){ // jika data ada
    $akun = $result->fetch_assoc();
     // bebaskan memory 
    mysqli_free_result($result);
    
      // tutup koneksi dengan database MySQL
    mysqli_close($koneksi);

    $_SESSION["id"] = $akun["id"];
    $_SESSION["username"] = $akun["username"];
    $_SESSION["email"] = $akun["email"];
    $_SESSION["nama"] = $akun["nama"];
    $_SESSION['nohp'] = $akun['nohp'];
    $_SESSION["level"] = $akun["level"];
    $_SESSION['foto'] = $akun['foto'];
    $_SESSION['tanggal'] = $akun['tanggal'];

    $level = $akun["level"];
    if($level == 'Administrator'){
      echo "<script> document.location.href='views/admin/index'; </script>";
    }else{
      echo "<script> document.location.href='./index'; </script>";
    }
}else{
    $_SESSION['pesan'] = '<div class="alert alert-danger">
    Username/Password Tidak ditemukan</div>';
}
}
else{
  $email = "";
  $password = "";
}

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Selamat Datang Dashboard <?= $data['nama_perusahaan']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description"
    content="DashboardKit is modern yet powerful Bootstrap 5 Admin Template comes with thousands of UI components & 180+ pages." />
  <meta name="keywords"
    content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template" />
  <meta name="author" content="DashboardKit" />

  <link rel="icon" href="assets/icon.png" type="image/x-icon" />

  <!-- font css -->
  <link rel="stylesheet" href="./assets/login/css/css/tabler-icons.min.css">
  <link rel="stylesheet" href="./assets/login/css/feather.css">
  <link rel="stylesheet" href="./assets/login/css/fontawesome.css">
  <link rel="stylesheet" href="./assets/login/css/material.css">

  <!-- vendor css -->
  <link rel="stylesheet" href="./assets/login/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="./assets/login/css/style-preset.css">

  <style>
    .auth-wrapper.auth-v3 {
      background: linear-gradient(to right, #2951a3 50%, var(--bs-body-bg) 0);
    }
  </style>

</head>
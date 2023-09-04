<?php
// Mengatur zona waktu sesuai dengan lokasi Anda

include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id_geoekonomi = $_GET['id_geoekonomi'];
$id = $_GET['id'];
$judul = $_GET['judul'];
$hapus = "DELETE FROM tb_galery_geoekonomi WHERE id_galery_geoekonomi   = '$id'";

$query = $koneksi->query("SELECT * FROM tb_galery_geoekonomi WHERE id_galery_geoekonomi = '$id' ");
$data = mysqli_fetch_array($query);
    $lokasi = $data['foto'];
    $hapus_gbr = "../../assets/image/foto_galery/".$lokasi;
    unlink($hapus_gbr);


$koneksi->query($delproperti);
$koneksi->query($hapus);
$_SESSION['pesan'] = 'Data Berhasil Di Hapus';
$_SESSION['status'] = 'success';
echo "<script> document.location.href='../../views/admin/upload-galery-geoekonomi?id=$id_geoekonomi&judul=$judul';</script>";
die();
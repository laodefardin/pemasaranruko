<?php
// Mengatur zona waktu sesuai dengan lokasi Anda

include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['id'];

$hapus = "DELETE FROM tb_geoekonomi WHERE id  = '$id'";

$query = $koneksi->query("SELECT * FROM tb_geoekonomi WHERE id = '$id' ");
$data = mysqli_fetch_array($query);
    $lokasi = $data['foto'];
    $hapus_gbr = "../../assets/image/foto_geoekonomi/".$lokasi;
    unlink($hapus_gbr);

$koneksi->query($hapus);

$_SESSION['pesan'] = 'Data Berhasil Di Hapus';
$_SESSION['status'] = 'success';
echo "<script> document.location.href='../../views/admin/data-geoekonomi';</script>";
die();
<?php
session_start();
include "../config/koneksi.php";

$id_pengguna = $_POST['id_pengguna'];
$id_listing = $_POST['id_listing'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];

$tambah = $koneksi->query(
"INSERT INTO tb_pembelian (id_listing, id_pelanggan, status, keterangan, tanggal_pembelian) 
VALUES 
(
  '$id_listing', '$id_pengguna', '$status', '$keterangan', '$tanggal' )
");

$query = "UPDATE tb_properti SET statusproperti='1' WHERE id_listing = $id_listing ";
$proses = $koneksi->query($query);    

  $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/data-pembelian';</script>";
  die();
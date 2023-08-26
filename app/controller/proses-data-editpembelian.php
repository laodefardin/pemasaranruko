<?php
session_start();
include "../config/koneksi.php";

$id = $_POST['id'];
$id_pengguna = $_POST['id_pengguna'];
$id_listing = $_POST['id_listing'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE tb_pembelian SET id_listing='$id_listing', id_pelanggan='$id_pengguna', tanggal_pembelian='$tanggal', status='$status', keterangan='$keterangan' WHERE id_beli = $id ";
$proses = $koneksi->query($query);

$ubah = "UPDATE tb_properti SET statusproperti='1' WHERE id_listing = $id_listing ";
$proses = $koneksi->query($ubah);    

  $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/data-pembelian';</script>";
  die();
?>
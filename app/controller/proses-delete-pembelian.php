<?php
// Mengatur zona waktu sesuai dengan lokasi Anda

include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['id'];
$idlisting = $_GET['idlisting'];

$hapus = "DELETE FROM tb_pembelian WHERE id_beli = '$id'";

$query = "UPDATE tb_properti SET statusproperti='0' WHERE id_listing = $idlisting ";
$proses = $koneksi->query($query);    

$koneksi->query($hapus);

$_SESSION['pesan'] = 'Data Berhasil Di Hapus';
$_SESSION['status'] = 'success';
echo "<script> document.location.href='../../views/admin/data-pembelian';</script>";
die();
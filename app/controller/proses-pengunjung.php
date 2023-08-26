<?php
session_start();
include "../config/koneksi.php";

$currentDate = date('Y-m-d H:i:s');

$id_user = $_POST['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$tambah = $koneksi->query(
"INSERT INTO tb_pesan (id_user, nama, nohp, email, pesan, tanggal_pesan) 
VALUES 
(
  '$id_user', '$nama', '$nohp', '$email', '$pesan', '$currentDate' )
");

$_SESSION['pesannotif'] = "
<div class='alert bg-success disabled color-palette'>
                    <p id='msg-text'><strong>Selamat!</strong> Pesan Anda telah berhasil dikirim. Pastikan data
                      informasi
                      yg
                      Anda berikan benar dan valid, karena sewaktu-waktu Pengembang kami akan menghubungi Anda</p>
                  </div>";
echo "    <script>
window.onload = function() {
    window.history.back();
};
</script>";
die();
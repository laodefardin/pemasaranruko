<?php 
session_start();
//hapus session

unset($_SESSION["username"]);
unset($_SESSION["id"]);
unset($_SESSION["email"]);
unset($_SESSION["nama"]);
unset($_SESSION["level"]);
unset($_SESSION["foto"]);
unset($_SESSION["tanggal"]);

// redirek ke halaman login
header('location:index');
?>
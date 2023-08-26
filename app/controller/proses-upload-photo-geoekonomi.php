
<?php
include "../config/koneksi.php";
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start(); 
 
        $id = $_POST['id'];
        $judul = $_POST['judul'];
    
        $img = $_FILES['foto']['name'];
        $gambar_baru = date('dYHiS').$img;
    
        move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/image/foto_galery/'.$gambar_baru);

        $query_user = "INSERT INTO tb_galery_geoekonomi(id, foto) VALUES ('$id','$gambar_baru')";  
        $sql = mysqli_query($koneksi, $query_user) or die(mysqli_error($koneksi));
    
        $_SESSION['pesan'] = 'Photo Berhasil Di Update';
        $_SESSION['status'] = 'success';
        echo "<script> document.location.href='../../views/admin/upload-galery-geoekonomi?id=$id&judul=$judul';</script>";
        die();
    ?>
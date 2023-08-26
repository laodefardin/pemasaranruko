<?php
include "../config/koneksi.php";
session_start(); 
            if (isset($_POST['tambah'])){
            $profil_perusahaan = $_POST['profil_perusahaan'];

            $img = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $tgl=date('d-m-Y');

            $gambar_baru = date('dYHiS').$img;
            $path = "../../assets/image/sistem/".$gambar_baru;

                if (empty($img)){
                    echo $query = "UPDATE tb_konfigurasi SET profil_perusahaan = '$profil_perusahaan' WHERE id = 1 ";
    
                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/profil-perusahaan';</script>";
                        die();
                    }
                }else{
                    if(move_uploaded_file($tmp, $path)){
                      $query = "UPDATE tb_konfigurasi SET profil_perusahaan='$profil_perusahaan', logo='$gambar_baru' WHERE id = 1 ";

                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/profil-perusahaan';</script>";
                        die();
                    }
                    }
                }
            }
            ?>
<?php
include "../config/koneksi.php";
session_start(); 
            if (isset($_POST['tambah'])){
            $namaperusahaan = $_POST['namaperusahaan'];
            $bidangusaha = $_POST['bidangusaha'];
            $alamatkantor = $_POST['alamatkantor'];
            $kontak = $_POST['kontak'];
            $visimisi = $_POST['visimisi'];
            $sejarah = $_POST['sejarah'];
            $nilaiperusahaan = $_POST['nilaiperusahaan'];
            $strukturorga = $_POST['strukturorga'];
            $sertifikasi = $_POST['sertifikasi'];
            $motto = $_POST['motto'];

            $img = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $tgl=date('d-m-Y');

            $gambar_baru = date('dYHiS').$img;
            $path = "../../assets/image/sistem/".$gambar_baru;

                if (empty($img)){
                    $query = "UPDATE tb_konfigurasi SET profil_perusahaan = '$namaperusahaan', bidangusaha= '$bidangusaha', alamatkantor='$alamatkantor', kontak='$kontak', visimisi='$visimisi', nilaiperusahaan='$nilaiperusahaan', sejarah='$sejarah', strukturorga='$strukturorga', sertifikasi='$sertifikasi', motto='$motto'  WHERE id = 1 ";
    
                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/profil-perusahaan';</script>";
                        die();
                    }
                }else{
                    if(move_uploaded_file($tmp, $path)){
                      $query = "UPDATE tb_konfigurasi SET profil_perusahaan = '$namaperusahaan', bidangusaha= '$bidangusaha', alamatkantor='$alamatkantor', kontak='$kontak', visimisi='$visimisi', nilaiperusahaan='$nilaiperusahaan', sejarah='$sejarah', strukturorga='$strukturorga', sertifikasi='$sertifikasi', motto='$motto', logo='$gambar_baru' WHERE id = 1 ";

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
<?php
include "../config/koneksi.php";
session_start(); 
            if (isset($_POST['tambah'])){
            $id = $_POST['id'];
            $currentDate = date('Y-m-d H:i:s');
            $judul= $_POST['judul'];
			$isi_informasi= $_POST['isi_informasi'];
            $penulis = $_POST['penulis'];

            $img = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $tgl=date('d-m-Y');

            $gambar_baru = date('dYHiS').$img;
            $path = "../../assets/image/foto_geoekonomi/".$gambar_baru;

            $slug = trim($judul); // Menghapus spasi di awal dan akhir
$slug = strtolower($slug); // Mengubah semua huruf menjadi huruf kecil
$slug = preg_replace('/[^a-z0-9-]/', '-', $slug); // Menghapus karakter non-alfanumerik, kecuali tanda hubung
$slug = preg_replace('/-+/', '-', $slug); // Menghapus tanda hubung berulang

                if (empty($img)){
                    $query = "UPDATE tb_geoekonomi SET slug='$slug', judul='$judul', penulis='$penulis', isi_informasi='$isi_informasi' WHERE id = $id ";
    
                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/data-geoekonomi';</script>";
                        die();
                    }
                }else{
                    if(move_uploaded_file($tmp, $path)){
                      $query = "UPDATE tb_geoekonomi SET slug='$slug', judul='$judul', penulis='$penulis', isi_informasi='$isi_informasi', foto='$gambar_baru' WHERE id = $id ";

                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/data-geoekonomi';</script>";
                        die();
                    }
                    }
                }
            }
            ?>
<?php
session_start();
include "../config/koneksi.php";
            if (isset($_POST['tambah'])){
            $currentDate = date('Y-m-d H:i:s');
            $judul= $_POST['judul'];
			$isi_informasi= $_POST['isi_informasi'];
            $penulis = $_POST['penulis'];

            $img = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $tgl=date('d-m-Y');

            $gambar_baru = date('dYHiS').$img;
            $path = "../../assets/image/foto_destinasiwisata/".$gambar_baru;

            $slug = trim($judul); // Menghapus spasi di awal dan akhir
$slug = strtolower($slug); // Mengubah semua huruf menjadi huruf kecil
$slug = preg_replace('/[^a-z0-9-]/', '-', $slug); // Menghapus karakter non-alfanumerik, kecuali tanda hubung
$slug = preg_replace('/-+/', '-', $slug); // Menghapus tanda hubung berulang

                if (empty($img)){
                    $query = "INSERT INTO tb_destinasiwisata (slug, judul, penulis, isi_informasi, foto, tanggal) values('$slug','$judul','$penulis','$isi_informasi','','$currentDate')";
    
                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/data-destinasi-wisata';</script>";
                        die();
                    }
                }else{
                    if(move_uploaded_file($tmp, $path)){
                    $query = "INSERT INTO tb_destinasiwisata (slug, judul, penulis, isi_informasi, foto, tanggal) values('$slug','$judul','$penulis','$isi_informasi','$gambar_baru','$currentDate')";    
                    $proses = $koneksi->query($query);    
                    if ($proses){
                        $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
                        $_SESSION['status'] = 'success';
                        echo "<script> document.location.href='../../views/admin/data-destinasi-wisata';</script>";
                        die();
                    }
                    }
                }
            }
            ?>
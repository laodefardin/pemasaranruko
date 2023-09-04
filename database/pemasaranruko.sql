-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2023 at 02:34 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemasaranruko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_destinasiwisata`
--

CREATE TABLE `tb_destinasiwisata` (
  `id` int NOT NULL,
  `slug` varchar(500) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi_informasi` text NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_destinasiwisata`
--

INSERT INTO `tb_destinasiwisata` (`id`, `slug`, `judul`, `penulis`, `isi_informasi`, `foto`, `tanggal`) VALUES
(28, 'puncak-lima-jari', 'Puncak Lima Jari', 'admin', '<p>Destinasi wisata ini menjadi hits karena memiliki tampilan yang instagrammable sehingga cocok buat pengunjung yang suka berfoto.</p><p><span style=\"font-size: 1rem;\">Puncak Lima Jari adalah sebuah kawasan wisata bukit di mana Moms bisa menikmati pemandangan indah dan merasakan suasana yang asri dari atas ketinggian.</span><br></p><p><span style=\"font-size: 1rem;\">Ada banyak tempat foto yang sengaja dibuat oleh pihak pengelola.</span><br></p><p><span style=\"font-size: 1rem;\">Tempat foto ini terletak di gardu pandang sehingga memiliki latar belakang pemandangan hijaunya pepohonan dan birunya langit.</span><br></p><p><span style=\"font-size: 1rem;\"><b>Lokasi</b>: Desa Pattimpa, Ponre, Kabupaten Bone, Sulawesi Selatan 92772</span><br></p>', '1520231506th96b41f11a57495b33bbfb0fafedd4e01.jpg', '2023-08-06 15:06:52'),
(29, 'air-terjun-ladenring', 'Air Terjun Ladenring', 'admin', '<p>Air Terjun Ladenring merupakan salah satu tempat wisata di Bone yang juga sangat hits karena memiliki daya tarik unik dan eksotis.</p><p><span style=\"font-size: 1rem;\">Air terjun ini memiliki tiga buah aliran air yang mengalir ke bawah dan satu di antaranya terbilang cukup besar dan deras debit airnya.</span><br></p><p><span style=\"font-size: 1rem;\">Tempat wisata di Bone ini cocok untuk Moms yang ingin melepas penat dengan menikmati asrinya suasana alam.</span><br></p><p><span style=\"font-size: 1rem;\"><b>Lokasi</b>: Desa Barugae, Kecamatan Lamuru, Kabupaten Bone, Sulawesi Selatan 92763</span><br></p>', '1520231507th1520230850thw 1.webp', '2023-08-06 15:06:52'),
(31, 'pelabuhan-bajoe', 'Pelabuhan Bajoe', 'admin', '<p>Pelabuhan Bajoe pastinya Moms sudah tahu kalau tempat wisata di Bone ini sangatlah terkenal karena tampilan fotonya sering muncul di iklan televisi.</p><p><span style=\"font-size: 1rem;\">Pelabuhan Bajoe merupakan sebuah pelabuhan yang juga berfungsi sebagai destinasi wisata hits untuk didatangi.</span><br></p><p><span style=\"font-size: 1rem;\">Kebanyakan pengunjung datang untuk menikmati pemandangan matahari terbit hingga matahari terbenam.</span><br></p><p><span style=\"font-size: 1rem;\"><b>Lokasi</b>: Bajoe, Kelurahan Bajoe Kecamatan Tanete Riattang Timur, Kabupaten Bone, Sulawesi Selatan</span><br></p>', '1520231508th1520230902thw3.png', '2023-08-06 15:06:52'),
(32, 'puncak-goa-kelling', 'Puncak Goa Kelling', 'admin', '<p>Puncak Goa Kelling yang sangat cocok untuk menjadi tempat wisata di Bone dengan tampilan sangat eksotis.</p><p><span style=\"font-size: 1rem;\">Untuk masuk ke dalam goa, Moms harus melalui terowongan yang cukup panjang.</span><br></p><p><span style=\"font-size: 1rem;\">Nantinya saat Moms sudah sampai di puncak, akan ada pemandangan yang berbeda karena pemandangannya yang sangat asri.</span><br></p><p><span style=\"font-size: 1rem;\">Selain itu, di sini juga ada banyak spot yang cocok untuk berfoto karena tampilannya yang instagrammable.</span><br></p><p><span style=\"font-size: 1rem;\">Ada pemandangan hamparan sawah, laut, hingga pegunungan yang bisa Moms jadikan background saat berfoto.</span><br></p><p><span style=\"font-size: 1rem;\"><b>Lokasi</b>: Dusun Kelling, Ajang Pulu, Kanco, Cina, Kabupaten Bone, Sulawesi Selatan 92771</span><br></p>', '1520231509th1520230859thw3.webp', '2023-08-06 15:06:52'),
(33, 'goa-mampu', 'Goa Mampu', 'admin', '<p>Goa Mampu menjadi tempat wisata di Bone yang juga hits karena tampilannya yang sangat eksotis dan cantik.</p><p><span style=\"font-size: 1rem;\">Goa ini memiliki langit-langit goa dengan bentuk yang berbeda-beda.</span><br></p><p><span style=\"font-size: 1rem;\">Oleh pihak pengelola, bagian dalam goa diberi lampu warna-warni sehingga tampilannya menjadi lebih cantik.</span><br></p><p><span style=\"font-size: 1rem;\">Berhubung punya tampilan yang indah, tak heran kalau Goa Mampu juga menjadi wisata instagrammable.</span><br></p><p><span style=\"font-size: 1rem;\"><b>Lokasi</b>: Desa Cabbeng, Kecamatan Dua Boccoe, Kabupaten Bone, Sulawesi Selatan 92753</span><br></p>', '1520231509th1520230905thw4.webp', '2023-08-06 15:06:52'),
(34, 'salo-merunge', 'Salo Merunge', 'admin', '<p>Destinasi liburan ini merupakan sebuah wisata sungai yang memiliki keunikan tersendiri.</p><p><span style=\"font-size: 1rem;\">Berbeda dengan sungai kebanyakan, Salo Merunge ini memiliki warna air yang kebiruan sehingga tampilannya mirip dengan pemandangan air laut.</span><br></p><p><span style=\"font-size: 1rem;\">Ditambah lagi, di antara sungai ini ada dua bukit yang berada di sebelah kanan dan kirinya.</span><br></p><p><span style=\"font-size: 1rem;\">Jadi ketika Moms melihatnya akan ada pemandangan asri yang indah.</span><br></p><p><span style=\"font-size: 1rem;\">Moms bisa berenang, bermain air, memancing, hingga berfoto-foto di dekat sungai ini.</span><br></p><p><span style=\"font-size: 1rem;\"><b>Lokasi</b>: Dusun Lawere, Desa Ureng, Kecamatan Palakka, Kabupaten Bone, Sulawesi Selatan</span><br></p>', '1520231510th1520230909thw5.jpg', '2023-08-06 15:06:52'),
(40, 'tanjung-palette', 'Tanjung Palette', 'admin', '                  Tanjung Palette yang merupakan tempat wisata di Bone yang merupakan gabungan dari wisata alam dengan wisata air. Di sini ada kolam renang besar atau waterpark di mana para pengunjung bisa bermain air sambil berenang. Dan di dekat waterpark tersebut ada sebuah pantai yang di pinggirannya terdapat sebuah gazebo. di kawasan tanjung Pallette juga memiliki jembatan yang menjorok ke laut, pengunjung tinggal memilih tempat untuk bersantai dengan ditemani hembusan angin yang sepoi-sepoi. Apalagi menyaksikan matahari yang terbenam, sungguh pemandangan yang luar biasa.<div><br></div><div>Tanjung Pallette berada sekitar 12 kilometer dari pusat kota. Tepatnya di Kelurahan Palette, Kecamatan Tanete Riattang Timur.</div>                    ', '1520231529th0620231506th86698-tanjung-pallette.jpg', '2023-08-15 15:29:58'),
(41, 'pantai-tete-tonra', 'Pantai Tete Tonra', 'admin', '<div>Destinasi wisata pantai ini memiliki pemandangan laut yang sangat indah.</div><div><span style=\"font-size: 1rem;\">Daya tarik dari Pantai Tete Tonra adalah adanya pulau kecil yang berada di dekatnya.</span><br></div><div><span style=\"font-size: 1rem;\">Selain itu, bagian bibir pantai sangatlah luas sehingga Moms bisa sepuasnya bermain pasir atau melakukan kegiatan olahraga pantai seperti voli pantai.</span><br></div><div><span style=\"font-size: 1rem;\">Ditambah lagi, tempat ini ternyata juga sering digunakan oleh prajurit TNI setempat sebagai lokasi berlatih.</span><br></div><div><span style=\"font-size: 1rem;\">Jadi, jangan heran kalau pada saat datang berwisata ke sini Moms melihat barak atau penginapan yang dihuni oleh prajurit TNI.</span><br></div><div><br></div><div><b>Lokasi</b>: Desa Bone Puteh, Kecamatan Tonra, Kabupaten Bone, Sulawesi Selatan</div>\r\n                    ', '1520231531th1520230854thw2.webp', '2023-08-15 15:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id` int NOT NULL,
  `id_listing` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galery`
--

INSERT INTO `tb_galery` (`id`, `id_listing`, `foto`) VALUES
(30, '', '0420231606thScreenshot 2023-06-19 114756.png'),
(53, '123', '1820231341thruko 2.webp'),
(54, '123', '1820231341thWhatsApp Image 2023-07-25 at 22.46.18.jpeg'),
(55, '29090', '1820231342thruko 2.webp'),
(56, '29090', '1820231342thWhatsApp Image 2023-07-25 at 22.46.18.jpeg'),
(57, '94452', '1820231345thruko 2.webp'),
(58, '94452', '1820231345thWhatsApp Image 2023-07-25 at 22.46.18.jpeg'),
(59, '94453', '1820231348thruko 2.webp'),
(60, '94453', '1820231348thWhatsApp Image 2023-07-25 at 22.46.18.jpeg'),
(61, '94454', '1820231430thRuko-1-Lantai.jpg'),
(62, '94455', '1820231430thRuko-1-Lantai.jpg'),
(63, '94456', '1820231431thRuko-1-Lantai.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery_geoekonomi`
--

CREATE TABLE `tb_galery_geoekonomi` (
  `id_galery_geoekonomi` int NOT NULL,
  `id` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galery_geoekonomi`
--

INSERT INTO `tb_galery_geoekonomi` (`id_galery_geoekonomi`, `id`, `foto`) VALUES
(2, '1', '2620230958thruko-minimalis-tokban.jpg'),
(4, '27', '2620231337thair terjun.jpeg'),
(5, '27', '2620231337thgoa mampu.jpeg'),
(6, '27', '2620231337thpalette.jpeg'),
(7, '14', '2820230415thair terjun.jpeg'),
(10, '14', '2820230416thss virtual box 1.png'),
(11, '14', '2820230416thss virtual box 1.png'),
(12, '14', '2820230416thss virtual box 1.png'),
(13, '14', '2820230416thss virtual box 1.png'),
(14, '15', '2820230416thpalette.jpeg'),
(15, '15', '2820230417thpalette.jpeg'),
(16, '15', '2820230417thgoa mampu.jpeg'),
(19, '17', '0420230204thWhatsApp Image 2023-08-21 at 10.13.21.jpg'),
(22, '20', '0420230210thWhatsApp Image 2023-08-21 at 13.37.45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_geoekonomi`
--

CREATE TABLE `tb_geoekonomi` (
  `id` int NOT NULL,
  `slug` varchar(500) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi_informasi` text NOT NULL,
  `foto` varchar(1500) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_geoekonomi`
--

INSERT INTO `tb_geoekonomi` (`id`, `slug`, `judul`, `penulis`, `isi_informasi`, `foto`, `tanggal`) VALUES
(4, 'informasi-jumlah-penduduk-di-daerah-bone', 'Informasi jumlah penduduk di daerah Bone', 'admin', '                  <p>Berdasarkan data Badan Pusat Statistik Kabupaten Bone, jumlah penduduk Kabupaten Bone Tahun 2021 adalah 801.775 jiwa, terdiri atas 391.682 lakiâ€laki dan 410.093 perempuan. Dengan luas wilayah Kabupaten Bone sekitar 4.559 km2 persegi, rataâ€rata tingkat kepadatan penduduk Kabupaten Bone adalah 175,87 jiwa per km2..[17]</p><p>Kabupaten Bone tergolong kabupaten yang besar dan luas di Sulawesi Selatan. Rata-rata jumlah penduduk per km2 adalah 175,87 jiwa. Terkait dengan perannya sebagai pusat pemerintahan, pendidikan, dan fasilitas publik lain, maka mayoritas penduduk tinggal terpusat di ibu kota kabupaten. Kepadatan penduduknya mencapai 1.111,78 jiwa per km2.</p><p>Keberadaan penduduk dalam jumlah yang besar,sering kali dianggap sebagai pemicu masalah-masalah kependudukan seperti kemiskinan dan pengangguran. Namun, dalam tinjauan demografi, penting untuk melihat struktur umur penduduk. Penduduk usia produktif yang besar dan berkualitas dapat berperan positif dalam pembangunan ekonomi. </p>                    ', '1620230259th0620231506th86698-tanjung-pallette.jpg', '2023-08-04 17:26:42'),
(12, 'informasi-tingkat-pertumbuhan-ekonomi', 'Informasi tingkat pertumbuhan ekonomi', 'admin', '                  <p><span style=\"font-size: 1rem;\">Kabupaten Bone tergolong kabupaten yang besar dan luas di Sulawesi Selatan. Rata-rata jumlah penduduk per km2 adalah 175,87 jiwa. Terkait dengan perannya sebagai pusat pemerintahan, pendidikan, dan fasilitas publik lain, maka mayoritas penduduk tinggal terpusat di ibu kota kabupaten. Kepadatan penduduknya mencapai 1.111,78 jiwa per km2.</span><br></p><p>Keberadaan penduduk dalam jumlah yang besar,sering kali dianggap sebagai pemicu masalah-masalah kependudukan seperti kemiskinan dan pengangguran. Namun, dalam tinjauan demografi, penting untuk melihat struktur umur penduduk. Penduduk usia produktif yang besar dan berkualitas dapat berperan positif dalam pembangunan ekonomi.&nbsp;</p>                    ', '1520231451th1520230844thbone.jpg', '2023-08-04 17:26:42'),
(13, 'informasi-jumlah-dan-jenis-usaha-yang-ada-di-kabupaten-bone', 'Informasi jumlah dan jenis usaha yang ada di kabupaten Bone', 'admin', '                  <p>Kondisi perekonomian&nbsp; daerah Bone sangat tergantung pada potensi sumber daya alam dan sumber daya manusia yang dimiliki, serta kemampuan daerah itu untuk mengembangkan segala potensi dari sumber daya tersebut. Dalam upaya mengembangkan potensi yang dimiliki, berbagai kebijakan, langkah dan strategi telah dilakukan oleh pemerintah khususnya pemerintah Kabupaten Bone dengan tujuan meningkatkan laju pembangunan perekonomian.&nbsp;</p><p>Pada tahun 2021 Kategori perdagangan sektor perdagangan besar dan eceran di Kabupaten Bone merupakan mempunyai konstribusi sebesar 11,68 persen terhadap Indikator Ekonomi Kabupaten Bone 2021 32 pembentukan PDRB Kabupaten Bone dengan NTB sebesar Rp 4.598,1 milyar,- dan laju pertumbuhan sebesar 2,1.</p>                    ', '1520231451th1520230845thbone 3.webp', '2023-08-04 17:26:42'),
(14, 'informasi-tingkat-pendapatan-penduduk', 'Informasi tingkat pendapatan penduduk ', 'admin', '                                    <p>Berdasarkan data Badan Pusat Statistik Kabupaten Bone, jumlah penduduk Kabupaten Bone Tahun 2021 adalah 801.775 jiwa, terdiri atas 391.682 lakiâ€laki dan 410.093 perempuan. Dengan luas wilayah Kabupaten Bone sekitar 4.559 km2 persegi, rataâ€rata tingkat kepadatan penduduk Kabupaten Bone adalah 175,87 jiwa per km2..[17]</p><p>Kabupaten Bone tergolong kabupaten yang besar dan luas di Sulawesi Selatan. Rata-rata jumlah penduduk per km2 adalah 175,87 jiwa. Terkait dengan perannya sebagai pusat pemerintahan, pendidikan, dan fasilitas publik lain, maka mayoritas penduduk tinggal terpusat di ibu kota kabupaten. Kepadatan penduduknya mencapai 1.111,78 jiwa per km2.</p><p>Keberadaan penduduk dalam jumlah yang besar,sering kali dianggap sebagai pemicu masalah-masalah kependudukan seperti kemiskinan dan pengangguran. Namun, dalam tinjauan demografi, penting untuk melihat struktur umur penduduk. Penduduk usia produktif yang besar dan berkualitas dapat berperan positif dalam pembangunan ekonomi. </p>                                        ', '1520231453th132.jpg', '2023-08-04 17:26:42'),
(15, 'informasi-akses-jalan-ke-tempat-usaha', 'Informasi akses jalan ke tempat usaha', 'admin', '                  <p><span source=\"\" sans=\"\" pro\";\"=\"\" style=\"color: rgb(50, 50, 51);\">Dari data bulan Agustus 2019, infrastruktur jalan yang menjadi kewenangan Pemerintah Kabupaten Bone, panjangnya tahun 2019 mencapai 1.999, 51 kilometer. Jika ditotal dengan jalan desa, mencapai 2.481 kilometer. Dari total panjang jalan tersebut, 54 persen dalam kondisi baik dan rusak ringan. Sisanya, rusak berat.</span></p><p><font color=\"#323233\" face=\"Open Sans, Helvetica, Arial\">Khusus&nbsp;</font><span source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 1rem;\"=\"\" style=\"color: rgb(50, 50, 51);\">infrastruktur jalan ke daerah usaha sudah teraspal sepenuhnya , dimana akses jalan yang mendudkung ini memungkin banyak pengendara yang melintasi daerah tersebut sehingga memberikan keuntungan bagi pemilik usaha di daerah tersebut</span></p><p><span open=\"\" sans\",=\"\" helvetica,=\"\" arial;\"=\"\" style=\"color: rgb(50, 50, 51);\"><br></span></p>                    ', '1520231454th1520230846thbone 2.jpg', '2023-08-04 17:26:42'),
(27, 'informasi-destinasi-wisata', 'Informasi Destinasi Wisata ', 'admin', '<p data-block-key=\"5odg3\" style=\"\">Bone adalah salah satu daerah yang berada di Sulawesi Selatan.</p><p data-block-key=\"9tv5b\" style=\"\">Daerah ini memiliki banyak sekali destinasi wisata yang menarik untuk didatangi para wisatawan, terutama dari segi wisata alamnya.</p><p data-block-key=\"65mub\" style=\"\">Wisata alam di Bone meliputi wisata bukit, wisata air terjun, wisata pantai, hingga wisata pantai.</p><p data-block-key=\"6rb1r\" style=\"\">Wisata alam selalu menyajikan pemandangan yang sangat indah sehingga cocok untuk merilekskan diri dan melepas penat saat liburan.</p>\r\n                    ', '2620231334thpuncak lima jari.jpeg', '2023-08-26 13:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konfigurasi`
--

CREATE TABLE `tb_konfigurasi` (
  `id` int NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `profil_perusahaan` text NOT NULL,
  `bidangusaha` text NOT NULL,
  `alamatkantor` text NOT NULL,
  `kontak` text NOT NULL,
  `visimisi` text NOT NULL,
  `nilaiperusahaan` text NOT NULL,
  `sejarah` text NOT NULL,
  `strukturorga` text NOT NULL,
  `sertifikasi` text NOT NULL,
  `motto` text NOT NULL,
  `logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konfigurasi`
--

INSERT INTO `tb_konfigurasi` (`id`, `nama_perusahaan`, `email`, `no_hp`, `profil_perusahaan`, `bidangusaha`, `alamatkantor`, `kontak`, `visimisi`, `nilaiperusahaan`, `sejarah`, `strukturorga`, `sertifikasi`, `motto`, `logo`) VALUES
(1, 'PT. Timbun Perdana Abadi', 'pt.timbunperdanaabadi@gmail.com', '620823934489809', '                                                                                                                                              <div><b>Profil Perusahaan PT. Timbun Perdana Abadi</b></div><div><br></div><div><b>Nama Perusahaan: </b>PT. Timbun Perdana Abadi</div><div><br></div>                                                                                                                                                                ', '                                                                                          <div><b>Bidang Usaha: </b>Pemasaran dan penjualan Ruko</div><div><br></div>                                                                                                                  ', '                                                                                          <div><b>Alamat Kantor Pusat:</b></div><div><div>Jl. Pramuka</div><div>Kabupaten Bone, Provinsi Sulawesi Selatan</div></div><div><br></div>                                                                                                    ', '                                                                                          <div><b>Kontak:</b></div><div><div>Telepon: (0812) 4520 7650</div><div>Email: info@timbunperdanaabadi.com</div><div>Website: timbunperdanaabadi.com</div></div><div><br></div>                                                                                                    ', '                                                                                          <div><div><b>Visi:</b></div><div>Menjadi mitra terpercaya dalam menyediakan berbagai ruko yang berkualitas untuk mewujudkan pembangunan yang berkelanjutan dan terkemuka di Indonesia.</div><div><br></div><div><b>Misi:</b></div><div>Menyediakan Ruko berkualitas tinggi sesuai dengan kebutuhan pasar.</div><div>Memberikan pelayanan terbaik kepada pelanggan melalui pendekatan yang personal dan responsif.</div><div>Mendorong pertumbuhan dan pengembangan karyawan melalui pelatihan dan pengembangan berkelanjutan.</div><div>Berkontribusi positif terhadap masyarakat dan lingkungan dengan menjalankan praktik bisnis yang bertanggung jawab sosial dan lingkungan.</div></div>                                                                                                    ', '                                                                                          <div><b>Nilai-Nilai Perusahaan:</b></div><div><div>Nilai-Nilai Perusahaan:</div><div>Kualitas: Menyediakan Property Ruko berkualitas terbaik untuk kepuasan pelanggan.</div><div>Integritas: Berkomitmen untuk menjalankan bisnis dengan etika dan integritas tinggi.</div><div>Inovasi: Mengembangkan solusi kreatif dan inovatif untuk memenuhi kebutuhan para pembeli.</div><div>Pelayanan Pelanggan: Memberikan pelayanan yang ramah, responsif, dan memenuhi harapan pelanggan.</div><div>Keberlanjutan: Menjunjung tinggi tanggung jawab sosial dan lingkungan dalam setiap aspek operasional.</div></div><div><b><br></b></div>                                                                                                    ', '                                                                                          <div><div><b>Sejarah Singkat:</b></div><div>PT. Timbun Perdana Abadi didirikan pada tahun 2022 dengan visi untuk menjadi pmitra terpercaya dalam menyediakan berbagai ruko yang berkualitas untuk mewujudkan pembangunan yang berkelanjutan dan terkemuka di Indonesia.Â </div></div><div><br></div>                                                                                                    ', '                                                                                          <div><div><b>Struktur Organisasi:</b></div><div>Direktur Utama: Andi Fadly</div><div>Admin: Mohammad Yusuf S.H</div></div>                                                                                                    ', '                                                                                          <div><b>Sertifikasi:</b></div><div><span style=\"font-size: 1rem;\">ISO 9001:2015 - Sistem Manajemen Mutu</span><br></div><div>ISO 14001:2015 - Sistem Manajemen Lingkungan</div><div><br></div>                                                                                                    ', '                                                                                          <div><b>Motto:</b></div><div>\"Bangun Bersama, Berkarya Abadi.\"</div><div><br></div>                                                                                                    ', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_beli` int NOT NULL,
  `id_listing` int NOT NULL,
  `id_pelanggan` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_pembelian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `email`, `nama`, `nohp`, `password`, `level`, `foto`, `tanggal`) VALUES
(1, 'admin', 'admin@gmail.com', 'PT. Timbun Perdana Abadi', '', '66b65567cedbc743bda3417fb813b9ba', 'Administrator', '', '2023-08-04 17:26:42'),
(2, 'risma', 'user@gmail.com', 'Rismayanti', '6282346925023', 'e51d009346f4f02ddb4b6622474c205d', 'User', '', '2023-08-16 07:24:08'),
(4, 'kia', 'saskia.yusuf06@gmail.com', 'saskia', '6282384631571', 'dcf0b0e55a1252ee7c9146473c880e60', 'User', '', '2023-08-18 14:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `id_user`, `nama`, `nohp`, `email`, `pesan`, `tanggal_pesan`) VALUES
(25, '2', 'Rismayanti', '6282346925023', 'user@gmail.com', 'Saya tertarik dengan properti ini. Mohon hubungi saya. Terima kasih. http://127.0.0.1/pemasaranruko/properti?idlisting=29090&s=alfa-property-ruko-sultan-abdurrahman-kota-pontianak', '2023-08-16 07:24:44'),
(26, '4', 'saskia', '6282384631571', 'saskia.yusuf06@gmail.com', 'Saya tertarik dengan properti ini. Mohon hubungi saya. Terima kasih. http://pemasaranruko.transtipo.com/properti?idlisting=123&s=property-ruko-2-lantai-timbun-perdana-abadi-kabupaten-bone', '2023-08-21 07:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_properti`
--

CREATE TABLE `tb_properti` (
  `id_listing` int NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `dekskripsi` text NOT NULL,
  `lokasiterdekat` text NOT NULL,
  `kabkota` varchar(200) NOT NULL,
  `kondisibangunan` varchar(100) NOT NULL,
  `statussertifikat` varchar(50) NOT NULL,
  `hargajual` varchar(100) NOT NULL,
  `luasbangunan` varchar(50) NOT NULL,
  `arahmenghadap` varchar(50) NOT NULL,
  `jumlahlantai` varchar(50) NOT NULL,
  `jalurmobil` varchar(50) NOT NULL,
  `pasokanairpam` varchar(30) NOT NULL,
  `jmlkamartidur` varchar(40) NOT NULL,
  `hargasewa` varchar(100) NOT NULL,
  `luastanah` varchar(100) NOT NULL,
  `jmlkamarmandi` varchar(50) NOT NULL,
  `jmlgarasi` varchar(50) NOT NULL,
  `pasokanairtanah` varchar(50) NOT NULL,
  `interior` varchar(100) NOT NULL,
  `dayalistrik` varchar(50) NOT NULL,
  `tgl_buat` varchar(40) NOT NULL,
  `tgl_ubah` varchar(40) NOT NULL,
  `statusproperti` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_properti`
--

INSERT INTO `tb_properti` (`id_listing`, `slug`, `judul`, `dekskripsi`, `lokasiterdekat`, `kabkota`, `kondisibangunan`, `statussertifikat`, `hargajual`, `luasbangunan`, `arahmenghadap`, `jumlahlantai`, `jalurmobil`, `pasokanairpam`, `jmlkamartidur`, `hargasewa`, `luastanah`, `jmlkamarmandi`, `jmlgarasi`, `pasokanairtanah`, `interior`, `dayalistrik`, `tgl_buat`, `tgl_ubah`, `statusproperti`) VALUES
(123, 'property-ruko-2-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan  Luas Tanah 4,5 x 18,5m Luas Bangunan 8  x 37m x 2Lt , Ruangan 2 Kamar tidur, 3 Kamar Mandi PLN 2000w,  Air Bor Bawah Tanah Kawasan  Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 900 Juta Nego \r\n\r\nHubungi : (0812) 4520 7650\r\nAlamat Kantor : Jl. Pramuka, Kabupaten Bone \r\nEmail : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 900 Juta', '166,5', 'Selatan Barat', '2', '1', 'Tidak', '2', 'Rp 65 Juta', '84', '3', '0', 'Ya', 'Minimalis', '2000', '2023-08-03 20:43:33', '2023-08-18 22:42:27', 0),
(29090, 'property-ruko-2-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan Luas Tanah 4,5 x 18,5m Luas Bangunan 8 x 37m x 2Lt , Ruangan 2 Kamar tidur, 3 Kamar Mandi PLN 2000w, Air Bor Bawah Tanah Kawasan Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 900 Juta Nego Hubungi : (0812) 4520 7650 Alamat Kantor : Jl. Pramuka, Kabupaten Bone Email : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 900 Juta', '166,5', 'Selatan Barat', '2', '1', 'Tidak', '2', 'Rp 65 Juta', '84', '3', '0', 'Ya', 'Minimalis', '2000', '2023-08-03 20:43:33', '2023-08-18 22:42:56', 0),
(94452, 'property-ruko-2-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan Luas Tanah 4,5 x 18,5m Luas Bangunan 8 x 37m x 2Lt , Ruangan 2 Kamar tidur, 3 Kamar Mandi PLN 2000w, Air Bor Bawah Tanah Kawasan Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 900 Juta Nego Hubungi : (0812) 4520 7650 Alamat Kantor : Jl. Pramuka, Kabupaten Bone Email : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 900 Juta', '166,5', 'Selatan Barat', '2', '1', 'Tidak', '2', 'Rp 65 Juta', '84', '3', '0', 'Ya', 'Minimalis', '2000', '2023-08-03 20:43:33', '2023-08-18 22:43:07', 0),
(94453, 'property-ruko-2-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 2 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan Luas Tanah 4,5 x 18,5m Luas Bangunan 8 x 37m x 2Lt , Ruangan 2 Kamar tidur, 3 Kamar Mandi PLN 2000w, Air Bor Bawah Tanah Kawasan Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 900 Juta Nego Hubungi : (0812) 4520 7650 Alamat Kantor : Jl. Pramuka, Kabupaten Bone Email : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 900 Juta', '166,5', 'Selatan Barat', '2', '2', 'Tidak', '2', 'Rp 65 Juta', '84', '3', '0', 'Ya', 'Minimalis', '2000', '2023-08-03 20:43:33', '2023-08-18 22:43:22', 0),
(94454, 'property-ruko-1-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 1 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 1 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan Luas Tanah 4,5 x 18,5m Luas Bangunan 4,5 x 18,5m x 2Lt , Ruangan 1 Kamar tidur, 1 Kamar Mandi PLN 1500w, Air Bor Bawah Tanah Kawasan Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 450 Juta Nego \r\n\r\nHubungi : (0812) 4520 7650 \r\nAlamat Kantor : Jl. Pramuka, Kabupaten Bone\r\nEmail : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 450 Juta', '84', 'Selatan Barat', '1', '1', 'Tidak', '1', 'Rp 35 Juta', '84', '1', '0', 'Ya', 'Minimalis', '1500', '2023-08-03 20:43:33', '2023-08-18 22:36:16', 0),
(94455, 'property-ruko-1-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 1 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 1 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan Luas Tanah 4,5 x 18,5m Luas Bangunan 4,5 x 18,5m x 2Lt , Ruangan 1 Kamar tidur, 1 Kamar Mandi PLN 1500w, Air Bor Bawah Tanah Kawasan Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 450 Juta Nego Hubungi : (0812) 4520 7650 Alamat Kantor : Jl. Pramuka, Kabupaten Bone Email : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 450 Juta', '84', 'Selatan Barat', '1', '1', 'Tidak', '1', 'Rp 35 Juta', '84', '1', '0', 'Ya', 'Minimalis', '1500', '2023-08-03 20:43:33', '2023-08-18 22:40:48', 0),
(94456, 'property-ruko-1-lantai-timbun-perdana-abadi-kabupaten-bone', 'Property Ruko 1 Lantai Timbun Perdana Abadi Kabupaten Bone', 'Ruko 1 Lantai Timbun Perdana Abadi Kabupaten Bone, Provinsi Sulawesi Selatan Luas Tanah 4,5 x 18,5m Luas Bangunan 4,5 x 18,5m x 2Lt , Ruangan 1 Kamar tidur, 1 Kamar Mandi PLN 1500w, Air Bor Bawah Tanah Kawasan Kota, Untuk usaha Klinik, Restoran, Berbagai Usaha Harga Jual 450 Juta Nego Hubungi : (0812) 4520 7650 Alamat Kantor : Jl. Pramuka, Kabupaten Bone Email : timbunperdanaabadi@gmail.com', 'Dekat dari Pelabuhan Bajoe, Kantor Polisi, Indomaret', 'Kabupaten Bone, Sulawesi Selatan', 'Baru', 'Sertifikat Hak Milik (SHM)', 'Rp 450 Juta', '84', 'Selatan Barat', '1', '1', 'Tidak', '0', 'Rp 35 Juta', '84', '1', '0', 'Ya', 'Minimalis', '1500', '2023-08-03 20:43:33', '2023-08-18 22:41:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_destinasiwisata`
--
ALTER TABLE `tb_destinasiwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galery_geoekonomi`
--
ALTER TABLE `tb_galery_geoekonomi`
  ADD PRIMARY KEY (`id_galery_geoekonomi`);

--
-- Indexes for table `tb_geoekonomi`
--
ALTER TABLE `tb_geoekonomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_konfigurasi`
--
ALTER TABLE `tb_konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_properti`
--
ALTER TABLE `tb_properti`
  ADD PRIMARY KEY (`id_listing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_destinasiwisata`
--
ALTER TABLE `tb_destinasiwisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_galery_geoekonomi`
--
ALTER TABLE `tb_galery_geoekonomi`
  MODIFY `id_galery_geoekonomi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_geoekonomi`
--
ALTER TABLE `tb_geoekonomi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_konfigurasi`
--
ALTER TABLE `tb_konfigurasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_beli` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_properti`
--
ALTER TABLE `tb_properti`
  MODIFY `id_listing` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94466;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

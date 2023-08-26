<?php
include "app/config/koneksi.php";
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
?>
<!-- Content Header (Page header) -->

<?php
if (isset($_GET['idlisting'])){ ?>
<?php
$id = $_GET['idlisting'];
$query = $koneksi->query("SELECT * FROM tb_properti WHERE id_listing = '$id' ");
$data = mysqli_fetch_assoc($query);
?>
<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row no-padding mt-2">

      <div class="col-sm-12">
        <?php
        $galery = $koneksi->query("SELECT * FROM tb_galery WHERE id_listing = '$id' LIMIT 1");
          if ($galery && $galery->num_rows > 0) {
          $gal = mysqli_fetch_assoc($galery);
          if ($gal['foto'] === null OR $gal['foto'] === ''){ ?>
        <div class="text-white"
          style="background: url('./assets/image/sistem/image-not-found-904x283.jpg') center center; height: 350px;">
          <?php } else { ?>
          <div class="text-white"
            style="background: url('./assets/image/foto_galery/<?= $gal['foto'] ?>') center center; height: 350px;">
            <?php } } else { ?>
            <div class="text-white"
              style="background: url('./assets/image/sistem/image-not-found-904x283.jpg') center center; height: 350px;">
              <?php } ?>
              <div class="text-left"
                style=" height: auto; width: 100%; padding: 8px 16px; background: linear-gradient(180deg,transparent 0,#000); background-repeat: repeat-x; padding-top: 343px;">
              </div>
            </div>
          </div>

          <div class="row no-padding mt-2">
            <div class="col-lg-8">
              <div class="summary">
                <?php
                if ($data['hargajual'] !== null OR $data['hargajual'] == ''){ ?>
                <div class="category">RUKO DIJUAL</div>
                <?php }else{ ?>
                <div class="category">RUKO DISEWA</div>
                <?php } ?>
                <h3 class="title"><?= $data['judul'] ?></h3>
                <div class="address"><span><?= $data['kabkota'] ?></span></div>
                <div class="meta">
                  <div class="price">
                    <span class="total"><?= $data['hargajual'] ?></span>
                    <span class="per-month"><?= $data['hargasewa'] ?> / bulan</span>
                  </div>
                  <div class="spec">
                    <div class="area">
                      <span class="icon icon-area"></span>
                      <span><?= $data['luasbangunan'] ?>m<sup>2</sup></span>
                    </div>
                    <div class="bedroom">
                      <span class="icon icon-bedroom"></span>
                      <span><?= $data['jmlkamartidur'] ?></span>
                    </div>
                    <div class="bathroom">
                      <span class="icon icon-bathroom"></span>
                      <span><?= $data['jmlkamarmandi']?></span>
                    </div>
                    <div class="garage">
                      <span class="icon icon-garage"></span>
                      <span><?= $data['jmlgarasi']?></span>
                    </div>
                  </div>
                </div>
              </div>

              <?php
              if ($data['statusproperti'] == 0 ){
              }else{?>
              <div class="card bg-danger mt-4">
                <div class="card-body text-center" style="font-size: 16px;">
                  Mohon Maaf Properti ini <strong>Sudah Terjual</strong>
                </div>
              </div>
              <?php } ?>

              <div class="info wide">
                <div class="property-info">
                  <div class="row">
                    <div class="col-6">
                      <div class="item row">
                        <div class="col-6 type">Tipe Properti</div>
                        <div class="col-6 value"> <?php
                if ($data['hargajual'] !== null OR $data['hargajual'] == ''){
                  echo "RUKO JUAL";
                }else{
                  echo "RUKO SEWA";
                }
                ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Luas Bangunan</div>
                        <div class="col-6 value"><?= $data['luasbangunan'] ?>m<sup>2</sup></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Luas Tanah</div>
                        <div class="col-6 value"><?= $data['luastanah'] ?>m<sup>2</sup></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Kondisi Bangunan</div>
                        <div class="col-6 value"><?= $data['kondisibangunan'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Menghadap</div>
                        <div class="col-6 value"><?= $data['arahmenghadap'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Jumlah Lantai</div>
                        <div class="col-6 value"><?= $data['jumlahlantai'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Sertifikat</div>
                        <div class="col-6 value"><?= $data['statussertifikat'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">ID Listing</div>
                        <div class="col-6 value"><?= $data['id_listing'] ?></div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="item row">
                        <div class="col-6 type">Interior</div>
                        <div class="col-6 value"><?= $data['interior'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Kamar Tidur</div>
                        <div class="col-6 value"><?= $data['jmlkamartidur'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Kamar Mandi</div>
                        <div class="col-6 value"><?= $data['jmlkamarmandi'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Garasi</div>
                        <div class="col-6 value"><?= $data['jmlgarasi'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Listrik</div>
                        <div class="col-6 value"><?= $data['dayalistrik'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Air Pam</div>
                        <div class="col-6 value"><?= $data['pasokanairpam'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Air Tanah</div>
                        <div class="col-6 value"><?= $data['pasokanairtanah'] ?></div>
                      </div>
                      <div class="item row">
                        <div class="col-6 type">Jalur Mobil</div>
                        <div class="col-6 value"><?= $data['jalurmobil'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="about no-border">
                  <h3>Deskripsi</h3>
                  <p>
                    <?= $data['dekskripsi'] ?>
                  </p>
                </div>
                <hr>
                <div class="about no-border">
                  <h3>Lokasi Terdekat</h3>
                  <p>
                    <?= $data['lokasiterdekat'] ?>
                  </p>
                </div>
                <hr>
                <div class="about no-border">
                  <h3>Galery</h3>
                  <p>
                    <div class="col-md-12">
                      <div class="row">
                        <?php
                        $query1 = $koneksi->query("SELECT * FROM tb_galery WHERE id_listing = '$id' ");
                        if ($query1->num_rows > 0) {
                        $nomor_urut = 1;
                        foreach ($query1 as $gal): ?>
                        <div class="col-sm-4 col-md-3 mb-4 p-1">
                          <a href="./assets/image/foto_galery/<?= $gal['foto'] ?>" data-fancybox="gal">
                            <img src="./assets/image/foto_galery/<?= $gal['foto'] ?>" alt="Image" class="img-fluid"
                              style="border-radius: 10px;">
                          </a>
                        </div>
                        <?php endforeach; mysqli_free_result($query1);
                          } else {
                          echo '<blockquote>
                                <a class="text-md">Tidak ada foto yang tersedia.</a>
                                </blockquote>'; } ?>
                      </div>
                    </div>
                  </p>
                </div>
                <hr>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card card-primary" style="box-shadow: none;">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <?php
                  $query = $koneksi->query("SELECT * FROM tb_konfigurasi");$konf = mysqli_fetch_assoc($query);?>
                    <img class="profile-user-img img-fluid img-circle" src="./assets/image/sistem/<?= $konf['logo'] ?>"
                      alt="User profile picture" style="border: none;width: 250px;border-radius: unset;">
                  </div>

                  <h3 class="profile-username text-center">
                    <?php
                  echo $konf['nama_perusahaan'];
                  ?>
                  </h3>
                  <p class="text-muted text-center">Official Developer</p>
                </div>
                <hr>
                <div class="card-footer box-profile" style="background-color: #fff;">

                  <?php
                  if (!isset($_SESSION['level'])) {?>

                  <div class="alert" style="background-color: #2951a3; color:#fff;font-size: 15px; text-align: center;">
                    <p id="msg-text">Jika Anda merasa tertarik dengan ruko ini, jangan ragu untuk mendaftar dan
                      menghubungi tim pengembang kami untuk informasi lebih lanjut.</p>
                  </div>
                  <a href="auth-signup" type="submit" class="btn btn-primary btn-block"><b>Hubungi Kami</b></a>

                  <?php } elseif ($_SESSION['level'] == "User" || $_SESSION['level'] == "Administrator") {?>

                  <div class="alert" style="background-color: #2951a3; color:#fff;font-size: 15px; text-align: center;">
                    Jika Anda merasa tertarik dengan ruko ini, jangan ragu untuk Menghubungi Tim pengembang kami untuk
                    informasi lebih lanjut.</div>

                  <!-- <div class="alert bg-success disabled color-palette">
                    <p id="msg-text"><strong>Selamat!</strong> Pesan Anda telah berhasil dikirim. Pastikan data
                      informasi
                      yg
                      Anda berikan benar dan valid, karena sewaktu-waktu Pengembang kami akan menghubungi Anda</p>
                  </div> -->
                  <?php
                //menampilkan pesan jika ada pesan
                if (isset($_SESSION['pesannotif']) && $_SESSION['pesannotif'] <> '') {
                    echo $pesan = $_SESSION['pesannotif'];
                    
                }
                //mengatur session pesan menjadi kosong
                $_SESSION['pesannotif'] = '';
                ?>
                  <ul class="list-group list-group-unbordered mb-3">

                    <form class="form-horizontal" action="./app/controller/proses-pengunjung.php" method="post"
                      enctype="multipart/form-data">

                      <div class="form-group">
                        <input type="text" value="<?= $_SESSION['id']?>" name="id" hidden>
                        <input type="text" name="nama" class="form-control" placeholder="Nama"
                          value="<?= $_SESSION['nama']?>" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="nohp" class="form-control" placeholder="Nomor Telepon Genggam"
                          value="<?= $_SESSION['nohp']?>" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email"
                          value="<?= $_SESSION['email']?>" required>
                      </div>
                      <div class="form-group">
                        <textarea name="pesan" id="" cols="30" rows="4"
                          class="form-control">Saya tertarik dengan properti ini. Mohon hubungi saya. Terima kasih. <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";echo $url;?></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block"><b>Kabari Saya</b></button>


                      <?php // Ambil URL dari web
                        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        // URL WhatsApp
                        $wa_url = "https://wa.me/".$konf['no_hp']."?text=";
                        // Teks yang ingin Anda sertakan dalam pesan WhatsApp
                        $text = "Saya tertarik dengan *$data[judul]* " . "\n$url";
                        // Encode teks agar sesuai dengan format URL
                        $encoded_text = urlencode($text);
                        // Gabungkan URL WhatsApp dengan teks yang telah dienkripsi
                        $full_url = $wa_url . $encoded_text;
                        ?>


                      <a target="_blank" href="<?php echo $full_url; ?>" class="btn btn-success btn-block"><b><text
                            class="d-sm-none d-md-none d-lg-inline d-xl-inline"><img
                              src="assets/image/sistem/whatsapp.png" style="width:8%;" alt="" srcset=""></text>Whatsapp
                        </b></a>
                  </ul>
                  </form>
                  <?php } ?>

                </div>
                <!-- /.card-body -->
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>

<div class="news-header">
  <h1>Pilihan Properti Ruko Untuk Anda</h1>
</div>
<div class="content">
  <div class="container">
    <h4 class="mb-3 mt-4">Pilihan Ruko Untuk Anda
    </h4>
    <div class="row">
      <?php
      $page = (isset($_GET['page']))? $_GET['page'] : 1;
      $limit = 12;
      $limit_start = ($page - 1) * $limit;
      $sql = $koneksi->query("SELECT * FROM tb_properti ORDER BY tgl_buat DESC LIMIT ".$limit_start.",".$limit);
      $no = $limit_start + 1;
      while ($data = mysqli_fetch_array($sql)){?>
      <div class="col-md-3 col-sm-6">
        <div class="card card-widget widget-user position-relative">
          <!-- <div class="ribbon-wrapper ribbon-sm">
            <div class="ribbon bg-danger text-sm">
              Dijual
            </div>
          </div> -->
          <a href="properti?idlisting=<?=$data['id_listing']?>&s=<?= $data['slug']?>">
            <?php
            $id = $data['id_listing'];
            $galery = $koneksi->query("SELECT * FROM tb_galery WHERE id_listing = '$id' LIMIT 1");

            if ($galery && $galery->num_rows > 0) {
            $gal = mysqli_fetch_assoc($galery);
            if ($gal['foto'] == null OR $gal['foto'] == '') { ?>
            <div class="widget-user-header text-white"
              style="background: url('./assets/image/sistem/not-found-336x214.jpg') center center; height: 200px;">
              <?php } else { ?>
              <div class="widget-user-header text-white"
                style="background: url('./assets/image/foto_galery/<?= $gal['foto'] ?>') center center; height: 200px;">
                <?php } } else { ?>
                <div class="widget-user-header text-white"
                  style="background: url('./assets/image/sistem/not-found-336x214.jpg') center center; height: 200px;">
                  <?php } ?>
                  <div class="text-left"
                    style=" height: auto; width: 100%; padding: 8px 16px; background: linear-gradient(180deg,transparent 0,#000); margin-top: 145px; background-repeat: repeat-x; position: absolute; padding-top: 20px;font-weight:500; font-size: 18px;">
                    <?= $data['hargajual'] ?></div>
                </div>
          </a>
          <div class="card-footer" style="padding-top: 5px;padding-left: 15px;padding-right: 15px;">
            <div class="description">
              <span class="description font-weight-light">RUKO DIJUAL</span><br>
              <span class="title font-weight-normal">
                <a href="" style="color: #000;"> <?php
                  $num_char = 35;
                  $text = $data['judul'];
                  echo substr($text, 0, $num_char) . '...';
                  ?></span></a><br>
              <span class="location font-weight-light"><?= $data['kabkota'] ?></span>
            </div>
            <hr style="margin: 6px;">
            <div class="row">
              <div class="col-sm-6 border-right">
                <div class="description-block">
                  <h5 class="description-header"><?= $data['luasbangunan'] ?><sup>m2</sup></h5>
                  <span class="description">Luas Bangunan</span>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <div class="description-block">
                  <h5 class="description-header"><?= $data['luastanah'] ?><sup>m2</sup></h5>
                  <span class="description">Luas Tanah</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <?php $no++; } ?>
    </div>

    <ul class="list-pagination pagination" style="justify-content: center;">
      <?php
      if($page == 1){?>
      <li class="disabled"><a class="page-link" href="#">First</a></li>
      <li class="disabled"><a class="page-link" href="#">&laquo;</a></li>
      <?php }else{
        $link_prev = ($page > 1)? $page - 1 : 1;
      ?>
      <li><a class="page-link" href="./properti?page=1">First</a></li>
      <li><a class="page-link" href="./properti?page=<?= $link_prev; ?>">&laquo;</a></li>
      <?php } ?>
      <?php
      $sql12 = $koneksi->query("SELECT COUNT(*) AS jumlah FROM tb_properti");
      $get_jumlah = mysqli_fetch_array($sql12);

      $jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
      $jumlah_number = 3;
      $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
      $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

      for($i = $start_number; $i <= $end_number; $i++){
        $link_active = ($page == $i)? ' class="active"' : '';
      ?>
      <li <?=$link_active; ?>><a class="page-link" href="./properti?page=<?=$i;?>"><?=$i;?></a></li>
      <?php } ?>

      <?php
      if($page == $jumlah_page){?>
      <li class="disabled"><a class="page-link" href="#">&raquo;</a></li>
      <li class="disabled"><a class="page-link" href="#">Last</a></li>
      <?php }else{
        $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
      ?>
      <li><a class="page-link" href="./properti?page=<?= $link_next;?>">&raquo;</a></li>
      <li><a class="page-link" href="./properti?page=<?= $jumlah_page;?>">Last</a></li>
      <?php } ?>
    </ul>

  </div>
</div>

<?php } ?>


<?php include "views/templates_dashboard/footer.php";?>
<?php
include "app/config/koneksi.php";
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
?>
<!-- Content Header (Page header) -->

<style>
  * {
    outline: none;
    box-sizing: border-box;
    /* font-size: 14px; */
    /* color: #171717; */
    margin: 0;
    padding: 0;
  }
</style>
<?php
if (isset($_GET['id'])){ ?>
<?php
  $id = $_GET['id'];
  $query = $koneksi->query("SELECT * FROM tb_geoekonomi WHERE id = '$id' ");
  $data = mysqli_fetch_assoc($query);
  
  $dateTime = $data['tanggal'];
  $parts = explode(" ", $dateTime);
  $date = $parts[0];
  ?>
<div class="content">
  <div class="container">
    <div class="row no-padding mt-2">
      <div class="col-sm-12">
        <div class="text-white"
          style="background: url('./assets/image/foto_geoekonomi/<?= $data['foto'] ?>') center center; height: 450px;">
          <div class="text-left"
            style=" height: auto; width: 100%; padding: 8px 16px; background: linear-gradient(180deg,transparent 0,#00000080); background-repeat: repeat-x; padding-top: 443px;">
          </div>
        </div>

        <div class="row no-padding mt-2">
          <div class="col-lg-8">
            <div class="news-content" style="max-width: 1082px; margin: 34px auto 0;">
              <a class="news-back" href="./informasi-geoekonomi">Kembali</a>

              <h2 class="news-title"><?= $data['judul'] ?></h2>
              <span class="date"><?= tgl_indo($date)  ?> </span>
              <div class="text-md">
                <?= $data['isi_informasi'] ?>
              </div>


              <h2 class="news-title">Galery</h2>

              <p>
                <div class="col-md-12">
                  <div class="row">
                    <?php
                        $query1 = $koneksi->query("SELECT * FROM tb_galery_geoekonomi WHERE id = '$id' ");
                        if ($query1->num_rows > 0) {
                        $nomor_urut = 1;
                        foreach ($query1 as $gal): ?>
                    <div class="col-sm-6 col-md-4 mb-4 p-1">
                      <a href="./assets/image/foto_galery/<?= $gal['foto'] ?>" data-fancybox="gal">
                        <img src="./assets/image/foto_galery/<?= $gal['foto'] ?>" alt="Image" class="img-fluid"
                          style="border-radius: 4px;">
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
                <!-- <div class="alert" style="background-color: #2951a3; color:#fff;font-size: 15px; text-align: center;">
                  <p id="msg-text">Jika Anda merasa tertarik dengan ruko ini, jangan ragu untuk mendaftar dan
                    menghubungi tim pengembang kami untuk informasi lebih lanjut.</p>
                </div> -->
                <a href="properti" type="submit" class="btn btn-secondary btn-block"><b>Cek Ruko Terbaik Kami</b></a>

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

<div class="news-related news-list">
  <div class="container clearfix">
    <h2>Anda mungkin juga menyukai beberapa informasi geoekonomi ini</h2>
    <ul class="list-wrapper">
      <?php
        $sql = $koneksi->query("SELECT * FROM tb_geoekonomi ORDER BY RAND() LIMIT 2");
        while ($data = mysqli_fetch_array($sql)){ ?>
      <li class="list-item clearfix">
        <div class="thumbnail">
          <img src="./assets/image/foto_geoekonomi/<?= $data['foto'] ?>" style="height:100%;">
        </div>
        <div class="description">
          <a class="title"
            href="./informasi-geoekonomi?id=<?=$data['id']?>&s=<?= $data['slug']?>"><?= $data['judul'] ?></a>
          <span class="date">
            <?php
            $dateTime = $data['tanggal'];
            $parts = explode(" ", $dateTime);
            $date = $parts[0];
            ?>
            <?= tgl_indo($date)  ?> </span>
          <text class="excerpt">
            <?php
                  $num_char = 100;
                  $text = $data['isi_informasi'];
                  echo substr($text, 0, $num_char) . '...';
                  ?></text>
        </div>
      </li>
      <?php }?>
    </ul>
  </div>
</div>

</div>

<?php }else{ ?>
<div class="news-header">
  <h1>Informasi Geoekonomi</h1>
</div>
<div class="content">
  <div class="news-list container">
    <div class="list-header">
      <h2>Informasi Geoekonomi</h2>
    </div>
    <div class="list-body clearfix">
      <ul class="list-wrapper">
        <?php
        $page = (isset($_GET['page']))? $_GET['page'] : 1;
        $limit = 8;
        $limit_start = ($page - 1) * $limit;
        $sql = $koneksi->query("SELECT * FROM tb_geoekonomi ORDER BY tanggal DESC LIMIT ".$limit_start.",".$limit);
  
        $no = $limit_start + 1;
        while ($data = mysqli_fetch_array($sql)){
        ?>

        <div class="">
          <li class="list-item clearfix" style="height:144px;">
            <div class="thumbnail"><img src="./assets/image/foto_geoekonomi/<?= $data['foto'] ?>">
            </div>
            <div class="description">
              <a class="title"
                href="./informasi-geoekonomi?id=<?=$data['id']?>&s=<?= $data['slug']?>"><?= $data['judul'] ?></a>
              <span class="date">
                <?php
            $dateTime = $data['tanggal'];
            $parts = explode(" ", $dateTime);
            $date = $parts[0];
            ?>
                <?= tgl_indo($date)  ?> </span>
              <text class="excerpt">
                <?php
                  $num_char = 100;
                  $text = $data['isi_informasi'];
                  echo substr($text, 0, $num_char) . '...';
                  ?></text>
            </div>
          </li>
        </div>

        <?php $no++; }?>
      </ul>
    </div>

    <ul class="list-pagination pagination" style="justify-content: center;">
      <?php
      if($page == 1){?>
      <li class="disabled"><a class="page-link" href="#">First</a></li>
      <li class="disabled"><a class="page-link" href="#">&laquo;</a></li>
      <?php }else{
        $link_prev = ($page > 1)? $page - 1 : 1;
      ?>
      <li><a class="page-link" href="./informasi-geoekonomi?page=1">First</a></li>
      <li><a class="page-link" href="./informasi-geoekonomi?page=<?= $link_prev; ?>">&laquo;</a></li>
      <?php } ?>
      <?php
      $sql12 = $koneksi->query("SELECT COUNT(*) AS jumlah FROM tb_geoekonomi");
      $get_jumlah = mysqli_fetch_array($sql12);

      $jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
      $jumlah_number = 3;
      $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
      $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

      for($i = $start_number; $i <= $end_number; $i++){
        $link_active = ($page == $i)? ' class="active"' : '';
      ?>
      <li <?=$link_active; ?>><a class="page-link" href="./informasi-geoekonomi?page=<?=$i;?>"><?=$i;?></a></li>
      <?php } ?>

      <?php
      if($page == $jumlah_page){?>
      <li class="disabled"><a class="page-link" href="#">&raquo;</a></li>
      <li class="disabled"><a class="page-link" href="#">Last</a></li>
      <?php }else{
        $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
      ?>
      <li><a class="page-link" href="./informasi-geoekonomi?page=<?= $link_next;?>">&raquo;</a></li>
      <li><a class="page-link" href="./informasi-geoekonomi?page=<?= $jumlah_page;?>">Last</a></li>
      <?php } ?>
    </ul>
  </div>
</div>
<?php } ?>

<?php
include "views/templates_dashboard/footer.php";
?>
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
  <div class="row">
    <div class="container-fluid col-sm-12 col-md-5">
      <div class="news-content" style="max-width: 726px; margin: 80px auto 0;">
        <a class="news-back" href="./informasi-geoekonomi">Kembali</a>

        <h2 class="news-title"><?= $data['judul'] ?></h2>
        <span class="date"><?= tgl_indo($date)  ?> </span>

        <img class="img-fluid pad" src="./assets/image/foto_geoekonomi/<?= $data['foto'] ?>" alt="Photo">

        <div class="text-md">
          <?= $data['isi_informasi'] ?>
        </div>
        <div class="news-share" style="border:none;">
          <!-- <span class="share-text">Bagikan Berita ini :</span> -->
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
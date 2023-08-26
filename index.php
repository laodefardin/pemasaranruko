<?php
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell.php";
?>
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
<!-- Content Header (Page header) -->
<div class="content-header">

</div>

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
      <h4 class="">Pilihan Ruko Untuk Anda</h4>
      </div>
      <div class="col-sm-6">
        <ol class="float-sm-right">
        <a href="./properti" class="btn btn-xs btn-outline-primary float-right"> &nbsp; &nbsp; &nbsp; &nbsp;Lihat
        Semua&nbsp; &nbsp;
        &nbsp; &nbsp;<i class="fas fa-arrow-right"></i></a>
        </ol>
      </div>
    </div>

    
    <div class="row">
      <?php
      $query = $koneksi->query("SELECT * FROM tb_properti LIMIT 8");
      foreach ($query as $data): ?>

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
                <a href="" style="color: #000;">
                  <?php
                  $num_char = 35;
                  $text = $data['judul'];
                  echo substr($text, 0, $num_char) . '...';
                  ?>
              </span></a><br>
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
      <?php
      endforeach;
      mysqli_free_result($query);
      ?>

      <div class="news-list container">
        <h4 class="mb-2 mt-4">Informasi Geoekonomi</h4>
        <div class="list-body clearfix mb-lg-4" style="border: solid 1px #e8e8e8;">
          <ul>
            <?php
        $sql = $koneksi->query("SELECT * FROM tb_geoekonomi LIMIT 6");
        while ($data = mysqli_fetch_array($sql)){
        ?>
            <li class="list-box" style="height:144px;margin: 0px 0;border: solid 0px #e8e8e8;">
              <div class="thumbnail"><img src="./assets/image/foto_geoekonomi/<?= $data['foto'] ?>"
                  style="height: 100%;">
              </div>
              <div class="description">
                <a class="title"
                  href="./informasi-geoekonomi?id=<?=$data['id']?>&s=<?= $data['slug']?>"><?= $data['judul'] ?></a>
                <?php
              $dateTime = $data['tanggal'];
              $parts = explode(" ", $dateTime);
              $date = $parts[0];
              ?>
                <span class="date"><?=tgl_indo($date)  ?> </span>
                <text class="excerpt">
                  <?php
                  $num_char = 100;
                  $text = $data['isi_informasi'];
                  echo substr($text, 0, $num_char) . '...';
                  ?></text>
              </div>
            </li>
            <?php }?>
            <li class="list-more" style="text-align: center; padding: 14px 0; list-style: none;"><a class="button"
                href="./informasi-geoekonomi">Informasi GeoEkonomi Lainnya</a></li>
          </ul>
        </div>
      </div>


      <div class="news-list container" style="text-align: center; padding: 14px 0;padding-bottom: 70px;">
        <div class="list-header">
          <h2>Destinasi Wisata</h2>
          <!-- <small>Informasi destinasi wisata lainnya...</small> -->
        </div>
        <div class="row">
          <?php
          $sql = $koneksi->query("SELECT * FROM tb_destinasiwisata LIMIT 3");      
          while ($data = mysqli_fetch_array($sql)){?>
          <div class="col-md-4 col-sm-4">
            <div class="card card-widget widget-user position-relative">
              <a href="./destinasi-wisata?id=<?=$data['id']?>&s=<?= $data['slug']?>">
                <div class="widget-user-header text-white"
                  style="background: url('./assets/image/foto_destinasiwisata/<?= $data['foto'] ?>') center center; height: 240px;">
                  <div class="text-center"
                    style=" height: 100%; width: 100%; padding: 8px 16px; background: linear-gradient(182deg,transparent 0,#000000bd); background-repeat: repeat-x; position: absolute; padding-top: 138px;font-weight:500; font-size: 18px;">
                    <?= $data['judul'] ?></div>
                </div>
              </a>
            </div>
          </div>
          <?php } ?>
          <a style="text-align: center; padding: 1px 0;" class="float-right text-center"
            href="./destinasi-wisata">&nbsp; &nbsp; Informasi destinasi wisata lainnya...</a>
        </div>


      </div>
    </div>
  </div>
</div>

<?php
include "views/templates_dashboard/footer.php";
?>
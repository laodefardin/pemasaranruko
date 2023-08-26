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
  $query = $koneksi->query("SELECT * FROM tb_konfigurasi ");
  $data = mysqli_fetch_assoc($query);
  ?>
<div class="news-header">
  <h1>Profil Perusahaan</h1>
</div>
<div class="content">
  <div class="row">
    <div class="container-fluid col-sm-12 col-md-5">
      <div class="news-content" style="max-width: 926px; margin: 80px auto 0;">
        <h2 class="news-title">Profil Perusahaan <?= $data['nama_perusahaan'] ?></h2>
        <center>
          <img class="img-fluid" src="./assets/image/sistem/<?= $data['logo'] ?>" alt="Photo" style="width: 500px;">
        </center>
        <div class="text-md">
          <?= $data['profil_perusahaan'] ?>
        </div>
        <div class="news-share" style="border:none;">
          <!-- <span class="share-text">Bagikan Berita ini :</span> -->
        </div>
      </div>
    </div>
  </div>
</div>

</div>



<?php
include "views/templates_dashboard/footer.php";
?>
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
  <div class="container">
    <div class="card-body">
      <div class="row">
        <div class="col-5 col-sm-3">

          <div class="card-body p-0" style="font-size: 15px;">
            <div class="nav nav-pills flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
              aria-orientation="vertical">
              <a class="nav-link active" id="vert-tabs-profil1-tab" data-toggle="pill" href="#vert-tabs-profil1"
                role="tab" aria-controls="vert-tabs-profil1" aria-selected="true">Nama Perusahaan</a>
              <a class="nav-link" id="vert-tabs-profil2-tab" data-toggle="pill" href="#vert-tabs-profil2" role="tab"
                aria-controls="vert-tabs-profil2" aria-selected="false">Bidang Usaha</a>
              <a class="nav-link" id="vert-tabs-profil3-tab" data-toggle="pill" href="#vert-tabs-profil3" role="tab"
                aria-controls="vert-tabs-profil3" aria-selected="false">Alamat Kantor Pusat</a>
              <a class="nav-link" id="vert-tabs-profil4-tab" data-toggle="pill" href="#vert-tabs-profil4" role="tab"
                aria-controls="vert-tabs-profil4" aria-selected="false">Kontak</a>
              <a class="nav-link" id="vert-tabs-profil5-tab" data-toggle="pill" href="#vert-tabs-profil5" role="tab"
                aria-controls="vert-tabs-profil5" aria-selected="false">Visi dan misi</a>
              <a class="nav-link" id="vert-tabs-profil6-tab" data-toggle="pill" href="#vert-tabs-profil6" role="tab"
                aria-controls="vert-tabs-profil6" aria-selected="false">Nilai-Nilai Perusahaan</a>
              <a class="nav-link" id="vert-tabs-profil7-tab" data-toggle="pill" href="#vert-tabs-profil7" role="tab"
                aria-controls="vert-tabs-profil7" aria-selected="false">Sejarah Singkat</a>
              <a class="nav-link" id="vert-tabs-profil8-tab" data-toggle="pill" href="#vert-tabs-profil8" role="tab"
                aria-controls="vert-tabs-profil8" aria-selected="false">Struktur Organisasi</a>
              <a class="nav-link" id="vert-tabs-profil9-tab" data-toggle="pill" href="#vert-tabs-profil9" role="tab"
                aria-controls="vert-tabs-profil9" aria-selected="false">Sertifikasi</a>
              <a class="nav-link" id="vert-tabs-profil10-tab" data-toggle="pill" href="#vert-tabs-profil10" role="tab"
                aria-controls="vert-tabs-profil10" aria-selected="false">Motto</a>
            </div>
          </div>
        </div>
        <div class="col-7 col-sm-9">
          <div class="tab-content" id="vert-tabs-tabContent">
            <div class="tab-pane text-left fade show active" id="vert-tabs-profil1" role="tabpanel"
              aria-labelledby="vert-tabs-profil1-tab">
              <div class="news-content" style="max-width: 926px;">
                <h2 class="news-title">Profil Perusahaan <?= $data['nama_perusahaan'] ?></h2>
                <center>
                  <img class="img-fluid" src="./assets/image/sistem/<?= $data['logo'] ?>" alt="Photo"
                    style="width: 500px;">
                </center>
                <div class="text-md">
                  <?= $data['profil_perusahaan'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil2" role="tabpanel" aria-labelledby="vert-tabs-profil2-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['bidangusaha'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil3" role="tabpanel" aria-labelledby="vert-tabs-profil3-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['alamatkantor'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil4" role="tabpanel" aria-labelledby="vert-tabs-profil4-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['kontak'] ?>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="vert-tabs-profil5" role="tabpanel" aria-labelledby="vert-tabs-profil5-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['visimisi'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil6" role="tabpanel" aria-labelledby="vert-tabs-profil6-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['nilaiperusahaan'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil7" role="tabpanel" aria-labelledby="vert-tabs-profil7-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['sejarah'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil8" role="tabpanel" aria-labelledby="vert-tabs-profil8-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['strukturorga'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil9" role="tabpanel" aria-labelledby="vert-tabs-profil9-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['sertifikasi'] ?>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-profil10" role="tabpanel" aria-labelledby="vert-tabs-profil10-tab">
              <div class="news-content" style="max-width: 926px;">
                <div class="text-md">
                  <?= $data['motto'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

</div>



<?php
include "views/templates_dashboard/footer.php";
?>
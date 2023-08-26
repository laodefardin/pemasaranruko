<?php
$title = 'Data Galery Geoekonomi';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM tb_galery_geoekonomi WHERE id = $id ");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?php echo ucfirst($title); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?php echo ucfirst($title); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <?php
  //menampilkan pesan jika ada pesan
  if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
  $pesan = $_SESSION['pesan']; ?>

  <div id="flash-data" data-flashdata="<?= $_SESSION['notif'];?>" data-type="<?= $_SESSION['status']; ?>"
    data-message="<?= $_SESSION['pesan']; ?>">
  </div>
  <?php }//mengatur session pesan menjadi kosong
  $_SESSION['pesan'] = '';
  unset($_SESSION['pesan']);
  unset($_SESSION['status']);
  ?>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <!-- <div class="container-fluid col-sm-8"></div> -->
    <div class="container-fluid col-sm-8 card">
      <div class="card-header">
        <h3 class="card-title">Data Semua Galery GeoEkonomi : <?= $_GET['judul']; ?></h3>

        <div class="card-tools">
          <a href="data-geoekonomi" class="btn btn-sm btn-secondary pull-left"><i class="fas fa-arrow-left"></i>
            Kembali</a>
          <a href="upload-photo-geoekenomi?id=<?= $_GET['id']; ?>&judul=<?= $_GET['judul']; ?>"
            class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Galery</a>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <table id="example1" class="table table-striped">
          <thead>
            <tr>
              <th style="width: 20%">
                #
              </th>
              <th style="width: 15%">
                Foto
              </th>
              <th style="width: 30%">
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor_urut = 1;
            foreach ($query as $data): ?>
            <tr>
              <td>
                <?= $nomor_urut ?>
              </td>
              <td>
                <div class="card mb-2 bg-gradient-dark">
                  <a href="../../assets/image/foto_galery/<?= $data['foto'] ?>" data-fancybox="gal"><img
                      src="../../assets/image/foto_galery/<?= $data['foto'] ?>" alt="Image" class="img-fluid"></a>
              </td>
              <td class="project-actions text-right">
                <a class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title=""
                  data-original-title="Hapus"
                  href="../../app/controller/proses-delete-galerygeoekonomi?id=<?= $data['id_galery_geoekonomi']?>&judul=<?= $_GET['judul'] ?>">
                  <i class="fas fa-trash">
                  </i>
                  Delete
                </a>
              </td>
            </tr>
            <?php
            $nomor_urut++;
            endforeach;
            mysqli_free_result($query);
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>

  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>
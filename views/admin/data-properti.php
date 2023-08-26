<?php
$title = 'Data Properti';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_properti ORDER BY tgl_buat DESC");
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Semua Properti</h3>

        <div class="card-tools">
          <a href="tambah-properti" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah data</a>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <table id="example1" class="table table-striped">
          <thead>
            <tr>
              <th style="width: 1%">
                #
              </th>
              <th style="width: 18%">
                Id. Listing
              </th>
              <th style="width: 15%">
                Tipe Properti
              </th>
              <th style="width: 20%">
                Judul Properti
              </th>
              <th style="width: 10%" class="text-center">
                Harga Jual
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
                <a>
                  <?= $data['id_listing']; ?>
                </a>
                <br>
                <small>
                  <?= tgl_indo(date('d F Y, h:i:s A')); ?>
                </small>
              </td>
              <td>
                <?php
                if ($data['hargajual'] !== null OR $data['hargajual'] == ''){
                  echo "Ruko Jual";
                }else{
                  echo "Ruko Sewa";
                }
                ?>
              </td>
              <td>
                <?= $data['judul']; ?>
              </td>
              <td class="text-center">
                <?= $data['hargajual'] ?>
              </td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="upload-galery?idlisting=<?= $data['id_listing']; ?>">
                  <i class="fas fa-upload">
                  </i>
                  Galery Properti
                </a>
                <a class="btn btn-info btn-sm" href="data-properti-edit?idlisting=<?= $data['id_listing'] ?>">
                  <i class="fas fa-edit">
                  </i>
                  Edit
                </a>
                <a class="btn btn-warning btn-sm" target="_blank" href="../../properti?idlisting=<?=$data['id_listing']?>&s=<?= $data['slug']?>">
                  <i class="fas fa-eye">
                  </i>
                  View
                </a>
                <a class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-delete-dataproperti?id_listing=<?= $data['id_listing']?>">
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
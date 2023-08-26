<?php
$title = 'Data Kotak Pesan';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_pesan");
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
        <h3 class="card-title">Data Semua Kotak Pesan Pelanggan</h3>

        <!-- <div class="card-tools">
          <a href="tambah-geoekonomi" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah data</a>
        </div> -->
      </div>
      <div class="card-body" style="display: block;">
        <table id="example1" class="table table-striped">
          <thead>
            <tr>
            <th style="width: 1%">
                #
              </th>
              <th style="width: 15%">
                Nama Lengkap 
              </th>
              <th style="width: 10%" class="text-center">
                No Handphone
              </th>
              <th style="width: 10%">
                Email
              </th>
              <th style="width: 35%" class="text-center">
                Pesan
              </th>
              <th style="width: 10%" class="text-center">
                Tanggal Pesan
              </th>
              <th style="width: 10%">
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
              <td><strong> <?= $data['nama']; ?></strong>
              </td>
              <td>
                <a href="https://api.whatsapp.com/send?phone=<?= $data['nohp']; ?>" target="_blank" rel="noopener noreferrer">+<?= $data['nohp']; ?></a>
              </td>
              <td>
                <a href="mailto:<?= $data['email']; ?>"><?= $data['email']; ?></a>
              </td>
              <td>
                <?= $data['pesan']; ?>
              </td>
              <td class="text-center">
              <?= date("d F Y \p\u\k\u\l H:i:s", strtotime($data['tanggal_pesan'] )); ?>
              
              </td>
              <td class="project-actions text-right">
                <!-- <a class="btn btn-info btn-sm" href="data-geoekonomi-edit?id=<?= $data['id'] ?>">
                  <i class="fas fa-edit">
                  </i>
                  Edit
                </a> -->
                <!-- <a class="btn btn-warning btn-sm" target="_blank" href="../../informasi-geoekonomi?id=<?=$data['id']?>&s=<?= $data['slug']?>">
                  <i class="fas fa-eye">
                  </i>
                  View
                </a> -->
                <a class="btn btn-danger btn-xs tombol-hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-delete-pesan?id=<?= $data['id_pesan']?>">
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
      
    </div>
    <!-- /.card -->

  </section>

  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>
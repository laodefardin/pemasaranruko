<?php
$title = 'Pembelian';
include "templates/header.php";
include "templates/menu.php";
$query = $koneksi->query("SELECT * FROM tb_pembelian
JOIN tb_properti ON tb_pembelian.id_listing = tb_properti.id_listing 
JOIN tb_pengguna ON tb_pembelian.id_pelanggan = tb_pengguna.id");
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container mt-4">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Daftar Pembelian Properti Anda</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index">Beranda</a></li>
          <li class="breadcrumb-item active">Daftar Pembelian Properti Anda</li>
        </ol>
      </div>
    </div>
  </div>
</div>



<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pembelian Properti Anda</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID Listing</th>
                <th>Nama Properti</th>
                <th>Harga Beli</th>
                <th>Detail Properti</th>
                <th>Tanggal Pembelian</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
            $nomor_urut = 1;
            foreach ($query as $data): ?>
              <tr>
                <td> <a><?= $data['id_listing']; ?></a></td>
                <td><?= $data['judul']; ?></td>
                <td><?= $data['hargajual']; ?></td>
                <td><a href="../../properti?idlisting=<?=$data['id_listing']?>&s=<?= $data['slug']?>" target="_blank">Cek Detail Properti</a></td>
                <td><?= date("d F Y ", strtotime($data['tanggal_pembelian'] )); ?></td>
                <td><?= $data['status']; ?></td>
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
    </div>


  </div>
</div>
</div>

<?php
include "templates/footer.php";
?>
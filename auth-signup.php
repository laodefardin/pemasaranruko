<?php include 'views/templates_dashboard/auth-header.php'; session_start();?>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ auth-signup ] start -->
<div class="auth-wrapper auth-v3">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-stretch text-center">
        <div class="col-md-6 img-card-side">
          <img src="assets/login/auth-side1 (1).jpg" alt="" class="img-fluid">
          <div class="img-card-side-content">
            <img src="https://dashboardkit.io/bootstrap/assets/login/images/logo-dark.svg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <div class="">
            <?php
                //menampilkan pesan jika ada pesan
                if (isset($_SESSION['pesannotif']) && $_SESSION['pesannotif'] <> '') {
                    echo $pesan = $_SESSION['pesannotif'];
                    
                }
                //mengatur session pesan menjadi kosong
                $_SESSION['pesannotif'] = '';
                ?>
              <h4 class="mb-3 f-w-600">Create Account</h4>
            </div>
            <form class="form-horizontal" action="./app/controller/proses-signup.php" method="post"
              enctype="multipart/form-data">
              <div class="">
              <div class="input-group mb-3">
                  <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i data-feather="phone"></i></span>
                  <input type="number" name="nohp" class="form-control" placeholder="Masukkan Nomor HP. contoh: 6281234567890" required>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i data-feather="mail"></i></span>
                  <input type="email" name="email" class="form-control" placeholder="Email address" required>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i data-feather="lock"></i></span>
                  <input type="password" name="newpassword" class="form-control" placeholder="Masukkan Kata Sandi" required>
                </div>
                <div class="input-group mb-4">
                  <span class="input-group-text"><i data-feather="lock"></i></span>
                  <input type="password" name="repeatpassword" class="form-control" placeholder="Masukkan Ulang Kata Sandi" required>
                </div>
                <!-- <div class="form-group  mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      I accept the <a href="#!"> Term & condition</a>
                    </label>
                  </div>
                </div> -->
                <div class="">
                  <button class="btn btn-primary btn-block mt-2" name="submit" type="submit">Create Account</button>
                </div>
              </div>
            </form>
            <p class="mb-2 ">Sudah memiliki akun? <a href="auth-signin" class="f-w-400">Signin Disini</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signup ] end -->
<?php include 'views/templates_dashboard/auth-footer.php'; ?>

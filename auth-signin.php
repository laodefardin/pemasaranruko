<?php include 'views/templates_dashboard/auth-header.php'; ?>
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
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <div class="">
              <h4 class="mb-3 f-w-600">Welcome to <span class="text-primary1"
                  style="color: #2951a3;">Dashboard login<br> <?= $data['nama_perusahaan'] ?></span></h4>
              <p class="text-muted mb-4">Selamat datang, silahkan login <br>ke akun</p>
            </div>
            <div class="">
            <?php
                //menampilkan pesan jika ada pesan
                if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                    echo $pesan = $_SESSION['pesan'];
                    
                }
                //mengatur session pesan menjadi kosong
                $_SESSION['pesan'] = '';
                ?>
            <form action="" method="post">
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="mail"></i></span>
                <input type="email" class="form-control" placeholder="Email address" name='email' value="<?= $email ?>" required>
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text"><i data-feather="lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" value="<?= $password ?>" name="password" tabindex="2" required="">
              </div>
              <div class="form-group  my-2">
                <p class="mb-0 text-muted">Belum punya akun? <a href="auth-signup" class="f-w-400">Daftar disini</a>
                </p>
                <!-- <div class="float-end">
                  <a href="index" class="text-primary"><span style="color: #2951a3;">
                      << Kembali</span> </a> </div> <div class="float-end">
                        <a href="#!" class="text-primary"><span style="color: #2951a3;">Forgot Password?</span></a>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    Remember me
                  </label>
                </div> -->
              </div>
            </div>
            <div class="text-end">
              <a href="index" class="btn btn-light-primary mt-2">Cancel</a>
              <button  type="submit" name="submit" class="btn btn-primary mt-2">Sign up</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signup ] end -->
<?php include 'views/templates_dashboard/auth-footer.php'; ?>
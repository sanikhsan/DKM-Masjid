<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Dashboard Admin</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/font-awesome/css/all.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/perfectscroll/perfect-scrollbar.css')?>" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?= base_url('Admin/assets/css/main.min.css')?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/css/custom.css')?>" rel="stylesheet">

    </head>
    <body class="login-page">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="<?= base_url('Admin/assets/images/logo@2x.png') ?>" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Selamat datang di Panel Login</p>
                                <p>Silahkan Masuk terlebih dahulu untuk melanjutkan.</p>
                            </div>

                            <?php if(session()->getFlashdata('msg')):?>
                                <div class="alert alert-warning">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            <?php endif;?>

                            <form action="<?= base_url('admin/login/proses')?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput" name="email">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" name="password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Masuk</button>
                            </div>
                              </form>
                              <div class="authent-reg">
                                  <p>Dibangun menggunakan menggunakan CodeIgniter 4</p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="<?= base_url('Admin/assets/plugins/jquery/jquery-3.4.1.min.js') ?>"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="<?= base_url('Admin/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="<?= base_url('Admin/assets/plugins/perfectscroll/perfect-scrollbar.min.js') ?>"></script>
        <script src="<?= base_url('Admin/assets/js/main.min.js') ?>"></script>
    </body>
</html>
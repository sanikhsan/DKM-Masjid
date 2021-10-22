<!DOCTYPE html>
<html lang="id">
    <head>
        <?php $uri = service('uri'); ?>
        <?php $page = $uri->getSegment(1) ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $pengaturan['deskripsi_web'] ?>" />
        <meta name="keywords" content="<?= $pengaturan['keyword_web'] ?>" />
        <link rel="icon" href="<?= base_url('Landing/assets/images/favicon.png')?>" sizes="35x35" type="image/png">
        <title><?= $pengaturan['nama_web'] ?> | <?php if($page == null ) { echo 'Home';} else { echo ucfirst($page);} ?></title>

        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/all.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/flaticon.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/animate.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/jquery.fancybox.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/jquery.bootstrap-touchspin.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/perfect-scrollbar.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/slick.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/style.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/responsive.css')?>">
        <link rel="stylesheet" href="<?= base_url('Landing/assets/css/color.css')?>">
    </head>
    <body>
    <main>
        <div id="preloader">            
            <div class="preloader-inner">
                <i class="preloader-icon thm-clr flaticon-kaaba"></i>
            </div>
        </div>
        <!-- Page Loader -->
        <!-- Layouts Navigation Bar -->
        <?= $this->include('LandingPage/Layouts/navbar'); ?>

        <!-- Section Content -->
        <?= $this->renderSection('content'); ?>

        <!-- Layouts Footer -->
        <?= $this->include('LandingPage/Layouts/footer'); ?>

    <div class="bottom-bar dark-bg2 text-center w-100">
        <p class="mb-0"><a href="<?= base_url('/') ?>" title="Home"><?= $pengaturan['nama_web'] ?></p>
        <!-- </a> Design by <a href="#" title="Nauthemes" target="_blank">Nauthemes</a> -->
    </div><!-- Bottom Bar -->

    </main><!-- Main Wrapper -->

        <script src="<?= base_url('Landing/assets/js/jquery.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/popper.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/bootstrap.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/wow.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/counterup.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/jquery.fancybox.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/jquery.bootstrap-touchspin.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/perfect-scrollbar.min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/slick.min.js')?>"></script>
        <!-- <script src="Landing/assets/js/particles.min.js"></script>
        <script src="Landing/assets/js/particle-int.js"></script> -->
        <script src="<?= base_url('Landing/assets/js/musicplayer-min.js')?>"></script>
        <script src="<?= base_url('Landing/assets/js/custom-scripts.js')?>"></script>
    </body>	
</html>
<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">About Us</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-100 position-relative">
        <div class="container">
            <div class="about-wrap4 w-100">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
                        <div class="about-video position-relative w-100">
                            <img class="img-fluid w-100" src="<?=('Landing/assets/images/resources/about-img.jpg')?>" alt="About Image">
                            <a class="position-absolute spinner bg-color1" href="<?= $greet['tautan_youtube'] ?>" data-fancybox title=""><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-5">
                        <div class="about-inner4 w-100">
                            <?= $greet['content'] ?>
                        </div>
                    </div>
                </div>
            </div><!-- About Wrap 4 -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 gray-layer pb-250 opc85 position-relative">
        <div class="fixed-bg patern-bg back-blend-multiply gray-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></div>
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?=('Landing/assets/images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="thm-clr flaticon-rub-el-hizb"></i>
                    <h2 class="mb-0">Ketua DKM</h2>
                    <p class="mb-0">Adipiscing elit duis volutpat ligula nulla dapibus.</p>
                </div>
            </div><!-- Sec Title -->
            <div class="team-wrap res-row wide-sec2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="team-box text-center w-100">
                            <div class="team-img overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="<?=('Landing/assets/images/resources/team-img1-3.jpg')?>" alt="Team Image 3">
                                <div class="social-links2 text-center d-inline-flex position-absolute">
                                    <a class="facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="twitter" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="youtube" href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3 class="mb-0"><a href="scholar-detail.html" title="">M. Ebrahim</a></h3>
                                <span class="d-block thm-clr">Mufti</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="team-box text-center w-100">
                            <div class="team-img overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="<?=('Landing/assets/images/resources/team-img1-4.jpg')?>" alt="Team Image 4">
                                <div class="social-links2 text-center d-inline-flex position-absolute">
                                    <a class="facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="twitter" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="youtube" href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3 class="mb-0"><a href="scholar-detail.html" title="">Reza Hosseini</a></h3>
                                <span class="d-block thm-clr">Scholar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Team Wrap -->
            <div class="view-more mt-05 d-inline-block text-center w-100">
                <a class="thm-btn thm-bg" href="scholar-style1.html" title="">Semua Anggota<span></span><span></span><span></span><span></span></a>
            </div><!-- View More -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 position-relative">
        <div class="feat-wrap v1 text-center position-relative w-100">
            <div class="feat-caro">
                <div class="feat-item">
                    <div class="feat-img position-absolute" style="background-image: url(<?=('Landing/assets/images/resources/slide1.jpg')?>);"></div>
                    <div class="feat-cap-wrap position-absolute d-inline-block">
                        <div class="feat-cap d-inline-block">
                            <i class="d-inline-block flaticon-rub-el-hizb thm-clr"></i>
                            <h2 class="mb-0">Masjid Al-Ikhlas</h2>
                            <p class="mb-0">Desa Rambatan Kulon.</p>
                            <a class="thm-btn thm-bg" href="<?= base_url('tentang') ?>" title="">Tentang Masjid Al-Ikhlas<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-img position-absolute" style="background-image: url(<?=('Landing/assets/images/resources/slide1.jpg')?>);"></div>
                    <div class="feat-cap-wrap position-absolute d-inline-block">
                        <div class="feat-cap d-inline-block">
                            <i class="d-inline-block flaticon-rub-el-hizb thm-clr"></i>
                            <h2 class="mb-0">Masjid Al-Ikhlas</h2>
                            <p class="mb-0">Desa Rambatan Kulon.</p>
                            <a class="thm-btn thm-bg" href="<?= base_url('tentang') ?>" title="">Tentang Masjid Al-Ikhlas<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-img position-absolute" style="background-image: url(<?=('Landing/assets/images/resources/slide1.jpg')?>);"></div>
                    <div class="feat-cap-wrap position-absolute d-inline-block">
                        <div class="feat-cap d-inline-block">
                            <i class="d-inline-block flaticon-rub-el-hizb thm-clr"></i>
                            <h2 class="mb-0">Masjid Al-Ikhlas</h2>
                            <p class="mb-0">Desa Rambatan Kulon.</p>
                            <a class="thm-btn thm-bg" href="<?= base_url('tentang') ?>" title="">Tentang Masjid Al-Ikhlas<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Featured Area Wrap -->
    </div>
</section>
<section>
    <div class="w-100 thm-layer opc7 position-relative">
        <div class="fixed-bg patern-bg back-blend-multiply thm-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></div>
        <div class="container">
            <div class="plyr-cont-wrap w-100">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="plyr-wrp overlap155 w-100">
                            <h3 class="mb-0 text-center pat-bg thm-layer opc7 back-blend-multiply thm-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);">Audio Al-Qur'an</h3>
                            <div class="plyr-inner w-100">
                                <div class="plyr w-100">
                                    <ul class="playlist mb-0 list-unstyled">
                                        <li data-cover="<?=('Landing/assets/images/audio-cover.jpg')?>" data-artist="(Abd-ur Rahman)"><a href="<?=('Landing/assets/audio/surah-fateh.mp3')?>" title="">Surah Fath</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-8">
                        <div class="cont-info w-100">
                            <ul class="cont-info-list d-flex flex-wrap mb-0 list-unstyled w-100">
                                <li><span class="thm-bg"><i class="fas fa-phone-alt"></i></span>+<?= $pengaturan['telepon'] ?></li>
                                <li><span class="thm-bg"><i class="far fa-envelope"></i></span><a href="javascript:void(0);" title=""><?= $pengaturan['email'] ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Player & Contact Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-220 pb-80 position-relative">
        <img class="img-fluid sec-top-mckp position-absolute" src="<?= base_url('Landing/assets/images/sec-top-mckp.png')?>" alt="Sec Top Mockup">
        <div class="container">
            <div class="about-wrap text-center position-relative w-100">
                <div class="about-inner d-inline-block">
                    <img class="img-fluid" src="<?= base_url('Landing/assets/images/bism-img1.png')?>" alt="Bismillah Image">
                    <h2 class="mb-0">Selamat Datang di Website Masjid Al-Ikhlas</h2>
                    <p class="mb-0">Masjid ini bukan hanya untuk sholat, tetapi juga merupakan pusat komunitas untuk semua. Pusat ini berkomitmen untuk melestarikan identitas Islam, membangun dan mendukung komunitas Muslim yang layak, mempromosikan cara hidup Islam yang komprehensif berdasarkan Al-Qur'an dan Sunnah Nabi Muhammad.</p>
                    <a class="thm-btn thm-bg" href="<?= base_url('tentang') ?>" title="">Selengkapnya<span></span><span></span><span></span><span></span></a>
                </div>
            </div><!-- About Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 position-relative">
        <div class="time-course-wrap w-100">
            <div class="row mrg">
                <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                    <div class="time-wrap d-flex flex-wrap align-items-center justify-content-center thm-layer opc95 position-relative w-100">
                        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/time-bg.jpg')?>);"></div>
                        <div class="time-inner w-100">
                            <div class="sec-title w-100">
                                <div class="sec-title-inner d-inline-block">
                                    <h2 class="mb-0">Beribadah sebelum terlambat</h2>
                                    <?php
                                        $date = $jadwals[0]['updated_at'];
                                        $condate = date("d F Y", strtotime($date));
                                    ?>
                                    <p class="mb-0">Terakhir Diperbaharui : <?= $condate ?></p>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="time-list-wrap d-flex flex-wrap w-100">
                                <ul class="time-list mb-0 list-unstyled">
                                    <li>
                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                            <span><i class="flaticon-rub-el-hizb"></i><?= $jadwals[0]['nama'] ?></span>
                                            <span><?= $jadwals[0]['waktu'] ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                            <span><i class="flaticon-rub-el-hizb"></i><?= $jadwals[5]['nama'] ?></span>
                                            <span><?= $jadwals[5]['waktu'] ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                            <span><i class="flaticon-rub-el-hizb"></i><?= $jadwals[1]['nama'] ?></span>
                                            <span><?= $jadwals[1]['waktu'] ?></span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="time-list mb-0 list-unstyled">
                                    <li>
                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                            <span><i class="flaticon-rub-el-hizb"></i><?= $jadwals[2]['nama'] ?></span>
                                            <span><?= $jadwals[2]['waktu'] ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                            <span><i class="flaticon-rub-el-hizb"></i><?= $jadwals[3]['nama'] ?></span>
                                            <span><?= $jadwals[3]['waktu'] ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                            <span><i class="flaticon-rub-el-hizb"></i><?= $jadwals[4]['nama'] ?></span>
                                            <span><?= $jadwals[4]['waktu'] ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- Time Wrap -->
                </div>
            </div>
        </div><!-- Time & Course Wrap -->
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-80 position-relative">
        <img class="img-fluid sec-top-mckp position-absolute" src="<?= base_url('Landing/assets/images/sec-top-mckp2.png')?>" alt="Sec Top Mockup 2">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="thm-clr flaticon-rub-el-hizb"></i>
                    <h2 class="mb-0">Galeri Acara</h2>
                    <!-- <p class="mb-0">Adipiscing elit duis volutpat ligula nulla dapibus.</p> -->
                </div>
            </div><!-- Sec Title -->
            <div class="event-wrap res-row w-100">
                <div class="row">
                    <?php foreach($galleries as $gallery): ?>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="serv-box2 text-center position-relative w-100">
                            <div class="serv-img overflow-hidden position-relative w-100">
                                <a href="#" title=""><img class="img-fluid w-100 p-5" src="uploads/<?=$gallery['image']?>" alt="<?=$gallery['title']?>"></a>
                            </div>
                            <div class="serv-info w-100">
                                <h3 class="mb-0"><a href="#" title=""><?=$gallery['title']?></a></h3>
                                <span class="d-inline-block text-truncate w-100" >
                                    <p class="mb-0"><?=$gallery['content']?></p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="view-more d-inline-block text-center w-100">
                    <a class="thm-btn mini-btn thm-bg" href="<?= base_url('gallery') ?>" title="">Lihat Semua Gambar<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
            </div><!-- Events Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 black-layer pb-70 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/parallax-bg1.jpg')?>);"></div>
        <div class="container">
            <div class="sec-title v2 text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="flaticon-rub-el-hizb thm-clr"></i>
                    <h1 class="mb-0">Rukun Islam</h1>
                    <!-- <p class="mb-0">Duis aute irure dolor in reprehenit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> -->
                </div>
            </div><!-- Sec Title -->
            <div class="pillars-wrap w-100">
                <ul class="pillars-list text-center d-flex flex-wrap justify-content-center align-items-center mb-0 list-unstyled">
                    <li>
                        <div class="pillar-box position-relative w-100">
                            <span class="d-inline-block thm-clr position-relative"><span class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></span><i class="flaticon-quran-1"></i></span>
                            <h3 class="mb-0">Syahadat</h3>
                            <i class="d-block thm-clr">Membaca Syahadat</i>
                        </div>
                    </li>
                    <li>
                        <div class="pillar-box position-relative w-100">
                            <span class="d-inline-block thm-clr position-relative"><span class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></span><i class="flaticon-mosque-1"></i></span>
                            <h3 class="mb-0">Shalat</h3>
                            <i class="d-block thm-clr">Shalat 5 Waktu</i>
                        </div>
                    </li>
                    <li>
                        <div class="pillar-box position-relative w-100">
                            <span class="d-inline-block thm-clr position-relative"><span class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></span><i class="flaticon-star"></i></span>
                            <h3 class="mb-0">Puasa</h3>
                            <i class="d-block thm-clr">Berpuasa</i>
                        </div>
                    </li>
                    <li>
                        <div class="pillar-box position-relative w-100">
                            <span class="d-inline-block thm-clr position-relative"><span class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></span><i class="flaticon-gift-box"></i></span>
                            <h3 class="mb-0">Zakat</h3>
                            <i class="d-block thm-clr">Bersedekah</i>
                        </div>
                    </li>
                    <li>
                        <div class="pillar-box position-relative w-100">
                            <span class="d-inline-block thm-clr position-relative"><span class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg" style="background-image: url(<?=('Landing/assets/images/pattern-bg.jpg')?>);"></span><i class="flaticon-kaaba"></i></span>
                            <h3 class="mb-0">Haji</h3>
                            <i class="d-block thm-clr"> Haji bagi yang mampu</i>
                        </div>
                    </li>
                </ul>
            </div><!-- Pillars Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-235 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?= base_url('Landing/assets/images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="flaticon-rub-el-hizb thm-clr"></i>
                    <h2 class="mb-0">Berita dan Acara Terbaru</h2>
                    <!-- <p class="mb-0">Adipiscing elit duis volutpat ligula nulla dapibus.</p> -->
                </div>
            </div><!-- Sec Title -->
            <div class="blog-wrap res-row w-100">
                <div class="row">
                    <?php foreach ($newses as $news) : ?>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="post-box w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="/berita/<?= $news['slug']?>" title=""><img class="img-fluid w-100" src="/uploads/<?= $news['image'] ?>" alt="<?= $news['title'] ?>"></a>
                                </div>
                                <div class="post-info position-relative w-100">
                                    <a class="thm-bg" href="/berita/<?= $news['slug']?>" title=""><i class="fas fa-link"></i></a>
                                    <span class="post-date thm-clr">
                                        <?php
                                            $date = $news['created_at'];
                                            $condate = date("d F Y", strtotime($date));
                                        ?>
                                        <?= $condate ?>
                                    </span>
                                    <h3 class="mb-0"><a href="/berita/<?= $news['slug']?>" title=""><?= $news['title'] ?></a></h3>
                                    <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                        <li><i class="fas fa-user-alt"></i>By: <a href="javascript:void(0);" title=""><?= $users['username'] ?></a></li>
                                        <li><i class="fas fa-comment-alt"><a href="/berita/<?= $news['slug']?>"></i>Beri Komentar</li></a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div><!-- Blog Wrap -->
            <div class="view-more d-inline-block text-center w-100">
                <a class="thm-btn mini-btn thm-bg" href="<?= base_url('berita') ?>" title="">Lihat Semua Berita dan Acara<span></span><span></span><span></span><span></span></a>
            </div><!-- View More -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
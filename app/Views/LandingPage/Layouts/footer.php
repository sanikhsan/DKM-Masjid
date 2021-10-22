<footer>
    <div class="w-100 pt-100 dark-layer pb-50 opc85 position-relative">
        <div class="fixed-bg patern-bg back-blend-multiply dark-bg" style="background-image: url(<?= base_url('Landing/assets/images/pattern-bg.jpg')?>);"></div>
        <div class="container">
            <div class="footer-data w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-3">
                        <div class="widget w-100">
                            <div class="logo"><h1 class="mb-0"><a href="<?= base_url('/') ?>" title="Home"><img class="img-fluid" src="<?= base_url('Landing/assets/images/logo2.png')?>" alt="Logo" srcset="Landing/assets/images/retina-logo2.png"></a></h1></div>
                            <p class="mb-0"><?= $pengaturan['deskripsi_web'] ?>.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-9">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="widget w-100">
                                            <h4 class="widget-title">Informasi</h4>
                                            <ul class="mb-0 list-unstyled w-100">
                                                <li><a href="<?= base_url('berita') ?>" title="">Acara</a></li>
                                                <li><a href="<?= base_url('berita') ?>" title="">Berita</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="widget w-100">
                                            <h4 class="widget-title">Informasi Kontak</h4>
                                            <ul class="cont-info-list2 mb-0 list-unstyled w-100">
                                                <li><i class="thm-clr">Telepon:</i>+<?= $pengaturan['telepon'] ?></li>
                                                <li><i class="thm-clr">Email:</i><a href="javascript:void(0);" title=""><?= $pengaturan['email'] ?></a></li>
                                                <li><i class="thm-clr">Alamat:</i><?= $pengaturan['alamat'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-lg-5">
                                <h4 class="widget-title">Halaman</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="widget w-100">
                                            <ul class="mb-0 list-unstyled w-100">
                                                <li><a href="<?= base_url('berita') ?>" title="">Berita</a></li>
                                                <li><a href="<?= base_url('gallery') ?>" title="">Galeri</a></li>
                                                <li><a href="<?= base_url('anggota') ?>" title="">Kepengurusan</a></li>
                                                <li><a href="<?= base_url('tentang') ?>" title="">Tentang</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="widget w-100">
                                            <ul class="mb-0 list-unstyled w-100">
                                                <!-- <li><a href="<?= base_url('sambutan') ?>" title="">Sambutan</a></li> -->
                                                <!-- <li><a href="<?= base_url('komisi') ?>" title="">Komisi</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Footer Data -->
        </div>
    </div>
</footer><!-- Footer -->
<header class="stick style1 w-100">
    <div class="topbar bg-color1 d-flex flex-wrap justify-content-center w-100">
        <ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
            <li><i class="thm-clr flaticon-sun"></i><?= $jadwals[0]['nama'] ?>: <span class="thm-clr"><?= $jadwals[0]['waktu'] ?></span></li>
            <li><i class="thm-clr flaticon-moon"></i><?= $jadwals[3]['nama'] ?>: <span class="thm-clr"><?= $jadwals[3]['waktu'] ?></span></li>
        </ul>
        <div class="social-links d-inline-flex">
            <a href="<?= $pengaturan['twitter'] ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="<?= $pengaturan['facebook'] ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= $pengaturan['youtube'] ?>" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="<?= $pengaturan['linkedin'] ?>" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?= $pengaturan['instagram'] ?>" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div><!-- Topbar -->
    <div class="logo-menu-wrap d-flex flex-wrap justify-content-between w-100">
        <div class="logo position-relative thm-layer opc7 back-blend-multiply thm-bg" style="background-image: url(<? base_url('Landing/assets/images/pattern-bg.jpg')?>);"><h1 class="mb-0"><a href="<?= base_url('/') ?>" title="Home"><img class="img-fluid" src="<?= base_url('Landing/assets/images/logo.png')?>" alt="Logo" srcset="<?= base_url('Landing/assets/images/retina-logo.png')?>"></a></h1></div><!-- Logo -->
        <nav class="d-flex flex-wrap align-items-center justify-content-center">
            <div class="header-left">
            <ul class="mb-0 list-unstyled d-inline-flex">
                <li><a href="<?= base_url('/')?>" title="">Home</a></li>
                <li><a href="<?= base_url('tentang')?>" title="">Tentang</a></li>
                <!-- <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Tentang</a>
                    <ul class="mb-0 list-unstyled">
                        <li><a href="<?= base_url('sambutan')?>" title="">Sambutan</a></li>
                        <li><a href="<?= base_url('sejarah')?>" title="">Sejarah</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="<?= base_url('komisi')?>" title="">Komisi</a></li> -->
                <li><a href="<?= base_url('jumat')?>" title="">Jadwal Jum'at</a></li>
                <li><a href="<?= base_url('anggota')?>" title="">Kepengurusan</a></li>
                <li><a href="<?= base_url('gallery')?>" title="">Galeri</a></li>
            </ul>
            </div>
            <div class="header-right">
                <a class="thm-btn thm-bg" href="<?= base_url('berita')?>" title="">Berita dan Acara<span></span><span></span><span></span><span></span></a>
            </div>
        </nav>
    </div><!-- Logo Menu Wrap -->
</header><!-- Header -->
<div class="sticky-menu">
    <div class="container">
        <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="logo"><h1 class="mb-0"><a href="<?= base_url('/') ?>" title="Home"><img class="img-fluid" src="<?= base_url('Landing/images/logo3.png')?>" alt="Logo" srcset="<?= base_url('Landing/assets/images/retina-logo3.png')?>"></a></h1></div><!-- Logo -->
            <nav class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="header-left">
                    <ul class="mb-0 list-unstyled d-inline-flex">
                        <li><a href="<?= base_url('/') ?>" title="">Home</a></li>
                        <li><a href="<?= base_url('tentang')?>" title="">Tentang</a></li>
                        <!-- <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Tentang</a>
                            <ul class="mb-0 list-unstyled">
                                <li><a href="<?= base_url('sambutan')?>" title="">Sambutan</a></li>
                                <li><a href="<?= base_url('sejarah')?>" title="">Sejarah</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="<?= base_url('komisi')?>" title="">Komisi</a></li> -->
                        <li><a href="<?= base_url('berita')?>" title="">Berita</a></li>
                        <li><a href="<?= base_url('jumat')?>" title="">Jadwal Jum'at</a></li>
                        <li><a href="<?= base_url('anggota')?>" title="">Kepengurusan</a></li>
                        <li><a href="<?= base_url('gallery')?>" title="">Galeri</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div><!-- Sticky Menu -->
<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <div class="rspn-scil">
            <a href="<?= $pengaturan['twitter'] ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="<?= $pengaturan['facebook'] ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= $pengaturan['youtube'] ?>" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="<?= $pengaturan['linkedin'] ?>" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?= $pengaturan['instagram'] ?>" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <form class="rspn-srch invisible">
            <input type="text" placeholder="Enter Your Keyword">
            <button type="submit"><i class="fa fa-search hidden"></i></button>
        </form>
    </div>
    <div class="lg-mn">
        <div class="logo"><a href="<?= base_url('/') ?>" title="Home"><img src="<?= base_url('Landing/assets/images/logo3.png')?>" alt="Logo"></a></div>
        <div class="rspn-cnt">
            <span><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title=""><?= $pengaturan['email'] ?></a></span>
            <span><i class="thm-clr fas fa-phone-alt"></i><?= $pengaturan['telepon'] ?></span>
        </div>
        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            <li><a href="javascript:void(0);" title="">Home</a></li>
            <li><a href="<?= base_url('tentang')?>" title="">Tentang</a></li>
            <!-- <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Tentang</a>
                <ul class="mb-0 list-unstyled">
                    <li><a href="<?= base_url('sambutan')?>" title="">Sambutan</a></li>
                    <li><a href="<?= base_url('sejarah')?>" title="">Sejarah</a></li>
                </ul>
            </li> -->
            <!-- <li><a href="<?= base_url('komisi')?>" title="">Komisi</a></li> -->
            <li><a href="<?= base_url('berita')?>" title="">Berita</a></li>
            <li><a href="<?= base_url('jumat')?>" title="">Jadwal Jum'at</a></li>
            <li><a href="<?= base_url('anggota')?>" title="">Kepengurusan</a></li>
            <li><a href="<?= base_url('gallery')?>" title="">Galeri</a></li>
        </ul>
    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->
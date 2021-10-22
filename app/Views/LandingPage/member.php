<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?= ('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Kepengurusan</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item active">Kepengurusan</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-280 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?= ('Landing/assets/images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
        <div class="container">
            <div class="team-wrap wide-sec2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-sm-6 col-lg-3 mr-5">
                        <div class="team-box text-center w-100">
                            <div class="team-img overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="uploads/<?= $ketua['image']?>" alt="<?= $ketua['nama'] ?>">
                            </div>
                            <div class="team-info">
                                <h3 class="mb-0"><a href="#" title=""><?= $ketua['nama'] ?></a></h3>
                                <span class="d-block thm-clr"><?= $ketua['jabatan'] ?></span>
                            </div>
                        </div>
                        <div class="team-box text-center w-100">
                            <div class="team-img overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="uploads/<?= $wakil['image']?>" alt="<?= $wakil['nama'] ?>">
                            </div>
                            <div class="team-info">
                                <h3 class="mb-0"><a href="#" title=""><?= $wakil['nama'] ?></a></h3>
                                <span class="d-block thm-clr"><?= $wakil['jabatan'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <?php foreach($anggotas->getResult('array') as $anggota): ?>
                            <div class="team-box text-center w-100">
                                <div class="team-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="uploads/<?= $anggota['image']?>" alt="<?= $anggota['nama'] ?>">
                                </div>
                                <div class="team-info">
                                    <h3 class="mb-0"><a href="#" title=""><?= $anggota['nama'] ?></a></h3>
                                    <span class="d-block thm-clr"><?= $anggota['jabatan'] ?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div><!-- Team Wrap -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
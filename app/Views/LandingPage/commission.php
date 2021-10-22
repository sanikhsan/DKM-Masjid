<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Komisi</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item active">Komisi</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-250 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?=('Landing/assets/images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
        <div class="container">
            <div class="services-detail-wrap w-100">
                <div class="services-detail-desc w-100">
                    <h2 class="mb-0 thm-clr">Komisi.</h2>
                    <p><?= $komisi['content'] ?></p>
                </div>
            </div><!-- Services Detail Wrap -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
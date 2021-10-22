<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
                <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
                    <div class="fixed-bg" style="background-image: url(<?=('Landing/assets//images/page-title-bg.jpg')?>);"></div>
                    <div class="container">
                        <div class="page-title-wrap text-center w-100">
                            <div class="page-title-inner d-inline-block">
                                <h1 class="mb-0">Tentang</h1>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" title="Home">Maktab - Home</a></li>
                                    <li class="breadcrumb-item active">Tentang</li>
                                </ol>
                            </div>
                        </div><!-- Page Title Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-120 pb-180 position-relative">
                    <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?=('Landing/assets//images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
                    <div class="container">
                        <div class="prod-detail-wrap w-100">
                            <div class="prod-detail-tabs position-relative w-100">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <h3 class="mb-0"><i class="flaticon-rub-el-hizb thm-clr"></i>Tentang</h3>
                                        <?= $history['content']?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Product Detail Wrap -->
                    </div>
                </div>
            </section>
<?= $this->endSection() ?>
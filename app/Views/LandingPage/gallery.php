<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">GALERI</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item active">Galeri</li>
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
            <div class="serv-wrap2 w-100">
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
            </div><!-- Services Wrap 2 -->
            <?= $pager->links('galeri', 'maktab_pagination') ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
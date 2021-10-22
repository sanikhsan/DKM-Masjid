<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Berita Acara</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item active">Berita dan Acara</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-90 pb-235 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?= base_url('Landing/assets/images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
        <div class="container">
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
            <?= $pager->links('news', 'maktab_pagination') ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
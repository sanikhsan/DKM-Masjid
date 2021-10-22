<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=base_url('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Detail</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/berita') ?>" title="">Berita - Acara</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-260 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?=base_url('Landing/assets/images/sec-botm-mckp.png')?>" alt="Sec Bottom Mockup">
        <div class="container">
            <div class="post-detail-wrap w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-9">
                        <div class="post-detail-inner w-100">
                            <div class="post-detail-img w-100 text-center">
                                <img src="/uploads/<?= $news['image'] ?>" alt="<?= $news['title'] ?>">
                                <!-- <img class="img-fluid w-100" src="/uploads/<?= $news['image'] ?>" alt="<?= $news['title'] ?>"> -->
                            </div>
                            <div class="post-detail-info position-relative w-100">
                                <div class="post-info2-inner text-center">
                                    <div class="post-date2">
                                        <?php
                                        $day = date('d', strtotime($news['created_at']));
                                        $bulantahun = date('M Y', strtotime($news['created_at']));
                                         ?>
                                        <span class="d-block"><?= $day ?></span>
                                        <i class="d-block thm-bg"><?= $bulantahun ?></i>
                                    </div>
                                </div>
                                <ul class="post-meta2 d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                                    <!-- <li class="thm-clr">City, Goverment</li> -->
                                    <li class="thm-clr">BY: <a href="javascript:void(0);" title=""><?= $users['username'] ?></a></li>
                                </ul>
                                <h2 class="mb-0"><?= $news['title'] ?></h2>
                                <p class="mb-0"><?= $news['content'] ?></p>
                            </div>
                            <hr>
                            <div class="author-box-wrap w-100">
                                <h3 class="mb-0">Tentang Penulis:</h3>
                                <div class="author-box d-flex flex-wrap pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100" style="background-image: url(<?=base_url('Landing/assets/images/pattern-bg.jpg')?>);">
                                    <div class="author-img">
                                        <img class="img-fluid w-100" src="/uploads/<?= $users['image'] ?>" alt="<?= $users['username'] ?>">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="mb-0"><?= $users['username'] ?></h4>
                                        <p class="mb-0"><?= $users['motto'] ?></p>
                                        <div class="author-social d-inline-flex">
                                            <span class="d-inline-block">STAY CONNECTED:</span>
                                            <div class="author-social-inner d-inline-flex">
                                                <a href="<?= $pengaturan['twitter'] ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                                <a href="<?= $pengaturan['facebook'] ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a href="<?= $pengaturan['youtube'] ?>" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Author Box Wrap -->
                            <div class="mt-5" id="disqus_thread"></div>
                            <script>
                                /**
                                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://masjid-al-ikhlas.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            <script id="dsq-count-scr" src="//masjid-al-ikhlas.disqus.com/count.js" async></script>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <aside class="sidebar w-100">
                            <div class="widget2 w-100">
                                <h3 class="widget-title2">Berita dan Acara Terbaru</h3>
                                <?php foreach($newses as $news): ?>
                                <div class="mini-posts-wrap w-100">
                                    <div class="mini-post-box d-flex flex-wrap w-100">
                                        <a href="/berita/<?= $news['slug']?>" title=""><img class="img-fluid w-100" src="/uploads/<?= $news['image'] ?>" alt="<?= $news['title'] ?>"></a>
                                        <div class="mini-post-info">
                                            <?php
                                                $date = $news['created_at'];
                                                $condate = date("d F Y", strtotime($date));
                                            ?>
                                            <span class="d-block thm-clr mb-3"><?= $condate ?></span>
                                            <h4 class="mb-0"><a href=<a href="/berita/<?= $news['slug']?>" title=""><?= $news['title'] ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </aside><!-- Sidebar -->
                    </div>
                </div>
            </div><!-- Post Detail Wrap -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
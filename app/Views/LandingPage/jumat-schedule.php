<?= $this->extend('LandingPage/Layouts/header') ?>

<?= $this->section('content') ?>
<section>
    <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
        <div class="fixed-bg" style="background-image: url(<?=('Landing/assets/images/page-title-bg.jpg')?>);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Jadwal Jum'at</h1>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" title="Home">Maktab - Home</a></li>
                        <li class="breadcrumb-item active">Jadwal Jum'at</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-250 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="<?= base_url('Landing/assets/images/sec-botm-mckp.png') ?>" alt="Sec Bottom Mockup">
        <div class="container">
            <div class="cart-wrap w-100">
                <table class="cart-table w-100" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Imam</th>
                            <th>Khatib</th>
                            <th>Muadzin</th>
                            <th>Bilal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($jumats as $jumat) :?>
                        <tr>
                            <?php
                                $date = $jumat['tanggal'];
                                $condate = date("d F Y", strtotime($date));
                            ?>
                            <td><?= $condate ?></td>
                            <td><?= $jumat['imam'] ?></td>
                            <td><?= $jumat['khatib'] ?></td>
                            <td><?= $jumat['muadzin'] ?></td>
                            <td><?= $jumat['bilal'] ?></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table><!-- Cart Table -->
                <?= $pager->links('jumat', 'maktab_pagination') ?>
            </div><!-- Cart Wrap -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->extend('Dashboard/Layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-container">

    <!-- header -->
    <?= $this->include('Dashboard/Layouts/header'); ?>

    <!-- sidebar -->
    <?= $this->include('Dashboard/Layouts/sidebar'); ?>

    <div class="page-content">
        <div class="main-wrapper">
          <div class="row">
            <?php foreach($jadwals as $jadwal): ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $jadwal['nama'] ?></h5>
                        <p class="card-description">Jadwal Shalat <?= $jadwal['nama'] ?></p>
                        <form action="" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                              <input type="text" disabled class="form-control" name="id" hidden value="<?= $jadwal['id'] ?>">
                            </div>
                            <div class="mb-3">
                              <label for="Nama" class="form-label">Nama</label>
                              <input type="text" class="form-control" name="nama" disabled value="<?= $jadwal['nama'] ?>">
                            </div>
                            <div class="mb-3">
                              <label for="Nama" class="form-label">Waktu</label>
                              <input type="text" class="form-control" name="waktu" disabled value="<?= $jadwal['waktu'] ?>">
                            </div>
                            <a href="<?= base_url('admin/jadwal/'.$jadwal['id'].'/edit') ?>" type="submit" class="btn btn-outline-primary">Edit</a>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
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
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $jadwal['nama'] ?></h5>
                        <p class="card-description">Jadwal Shalat <?= $jadwal['nama'] ?></p>
                        <form action="" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                              <input type="hidden" class="form-control" name="id" value="<?= $jadwal['id'] ?>">
                            </div>
                            <div class="mb-3">
                              <label for="nama" class="form-label">Nama</label>
                              <input type="text" class="form-control" name="nama" value="<?= $jadwal['nama'] ?>">
                            </div>
                            <div class="mb-3">
                              <label for="waktu" class="form-label">Waktu</label>
                              <input type="text" class="form-control" name="waktu" value="<?= $jadwal['waktu'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Berita atau Acara Baru</h5>
                            <form action="" method="post">
                              <?= csrf_field(); ?>
                              <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $jumat['id'] ?>">
                                <input type="text" class="form-control" id="floatingInput" name="imam" value="<?= $jumat['imam'] ?>">
                                <label for="floatingInput">Nama Imam</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="khatib" value="<?= $jumat['khatib'] ?>">
                                <label for="floatingInput">Nama Khatib</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="muadzin" value="<?= $jumat['muadzin'] ?>">
                                <label for="floatingInput">Nama Muadzin</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="bilal" value="<?= $jumat['bilal'] ?>">
                                <label for="floatingInput">Nama Bilal</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="tanggal" value="<?= $jumat['tanggal'] ?>">
                                <label for="floatingInput">Tanggal Jumat</label>
                              </div>
                              <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
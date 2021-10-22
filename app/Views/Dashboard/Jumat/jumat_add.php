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
                            <h5 class="card-title">Tambah Jadwal Pengurus Jumat</h5>
                            <form action="" method="post" id="text-editor">
                              <?= csrf_field(); ?>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="imam" required>
                                <label for="floatingInput">Nama Imam</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="khatib" required>
                                <label for="floatingInput">Nama Khatib</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="muadzin" required>
                                <label for="floatingInput">Nama Muadzin</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="bilal" required>
                                <label for="floatingInput">Nama Bilal</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="tanggal" required>
                                <label for="floatingInput">Tanggal Jumat</label>
                              </div>
                              <input type="submit" class="btn btn-outline-primary" value="Simpan"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
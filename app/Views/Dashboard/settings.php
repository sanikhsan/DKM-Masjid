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
                            <h5 class="card-title">Pengaturan Website</h5>
                            <p class="card-description mb-5">Pengaturan Website seperti nama website, detail kontak masjid, detail alamat masjid, metadata Website, dan tautan sosial media.</p>
                            <form action="" method="post">
                                <?= csrf_field(); ?>
                                <h5>Detail Website</h5>
                                <div class="form-floating mb-3">
                                  <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $settings['id'] ?>" required>
                                  <input type="text" class="form-control" id="floatingInput" name="nama_web" value="<?= $settings['nama_web'] ?>" required>
                                  <label for="floatingInput">Nama Website</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="deskripsi_web" value="<?= $settings['deskripsi_web'] ?>" required>
                                  <label for="floatingInput">Deskripsi Website</label>
                                </div>
                                <div class="form-floating mb-5">
                                  <input type="text" class="form-control" id="floatingInput" name="keyword_web" value="<?= $settings['keyword_web'] ?>" required>
                                  <label for="floatingInput">Keyword Website (pisahkan dengan koma)</label>
                                </div>

                                <h5>Informasi Masjid</h5>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="email" value="<?= $settings['email'] ?>" required>
                                  <label for="floatingInput">Alamat Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="telepon" value="<?= $settings['telepon'] ?>" required>
                                  <label for="floatingInput">Nomor Telepon</label>
                                </div>
                                <div class="input-group mb-5">
                                  <span class="input-group-text">Alamat</span>
                                  <textarea class="form-control" name="alamat" aria-label="With textarea"><?= $settings['alamat'] ?></textarea>
                                </div>

                                <h5>Sosial Media</h5>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="twitter" value="<?= $settings['twitter'] ?>" required>
                                  <label for="floatingInput">Tautan Twitter</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="facebook" value="<?= $settings['facebook'] ?>" required>
                                  <label for="floatingInput">Tautan Facebook</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="youtube" value="<?= $settings['youtube'] ?>" required>
                                  <label for="floatingInput">Tautan Youtube</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="linkedin" value="<?= $settings['linkedin'] ?>" required>
                                  <label for="floatingInput">Tautan LinkedIn</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="instagram" value="<?= $settings['instagram'] ?>" required>
                                  <label for="floatingInput">Tautan Instagram</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
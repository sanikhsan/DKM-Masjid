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
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Anggota</h5>
                            <form action="" method="post">
                              <?= csrf_field(); ?>
                              <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $anggota['id']?>" required>
                                <input type="text" class="form-control" id="floatingInput" name="nama" value="<?= $anggota['nama']?>" required>
                                <label for="floatingInput">Nama</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="jabatan" value="<?= $anggota['jabatan']?>" required>
                                <label for="floatingInput">Jabatan</label>
                              </div>
                              <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Gambar Sekarang</h5>
                      <form action="imagedit" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $anggota['id'] ?>">
                        <hr>
                          <div class="text-center">
                          <img width="250" height="250" src="/uploads/<?= $anggota['image'] ?>" alt="<?= $anggota['nama'] ?>">
                          </div>
                        <hr>
                        <div class="mb-3">
                          <label for="image" class="form-label">Ubah Gambar Utama</label>
                          <input class="form-control" type="file" id="image" name="image" required>
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
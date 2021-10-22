<?= $this->extend('Dashboard/Layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-container">

    <!-- header -->
    <?= $this->include('Dashboard/Layouts/header'); ?>

    <!-- sidebar -->
    <?= $this->include('Dashboard/Layouts/sidebar'); ?>

    <script>
      tinymce.init({
      selector: 'textarea',
      height: 500,
    });
    </script>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data dan Gambar Gallery</h5>
                            <form action="" method="post">
                              <?= csrf_field(); ?>
                              <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $gallery['id'] ?>" required>
                                <input type="text" class="form-control" id="floatingInput" name="title" value="<?= $gallery['title'] ?>" required>
                                <label for="floatingInput">Judul Gambar</label>
                              </div>
                              <div class="mb-3">
                                <textarea class="form-control" name="content"><?= $gallery['content'] ?></textarea>
                              </div>
                              <input type="submit" class="btn btn-outline-primary" value="Simpan"/>
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
                        <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $gallery['id'] ?>">
                        <hr>
                          <div class="text-center">
                          <img width="250" height="250" src="/uploads/<?= $gallery['image'] ?>" alt="<?= $gallery['title'] ?>">
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
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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Gambar Gallery</h5>
                            <form action="" method="post" id="text-editor" enctype="multipart/form-data">
                              <?= csrf_field(); ?>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="title" required>
                                <label for="floatingInput">Judul Gambar</label>
                              </div>
                              <div class="mb-3">
                                <textarea class="form-control" name="content"></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="image" class="form-label">Gambar Utama</label>
                                <input class="form-control" type="file" id="image" name="image" required>
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
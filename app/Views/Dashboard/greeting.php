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
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste imagetools wordcount'
      ],
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
    </script>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Halaman Sambutan</h5>
                            <p class="card-description">Perbaharui Konten Halaman Sambutan dari sini, <a href="<?= base_url('sambutan') ?>">klik untuk lihat halaman.</a></p>
                            <form action="" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-floating mb-3">
                                  <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $greet['id'] ?>" required>
                                  <label for="floatingInput">id</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingInput" name="tautan_youtube" value="<?= $greet['tautan_youtube'] ?>" required>
                                  <label for="floatingInput">Tautan Youtube</label>
                                </div>
                                <div class="mb-3">
                                  <textarea class="form-control" name="content"><?= $greet['content'] ?></textarea>
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
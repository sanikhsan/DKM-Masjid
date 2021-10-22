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
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Berita atau Acara</h5>
                            <form action="" method="post">
                            <?= csrf_field(); ?>
                              <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $news['id'] ?>">
                                <input type="text" class="form-control" id="floatingInput" name="title" value="<?= $news['title'] ?>">
                                <label for="floatingInput">Judul Berita</label>
                              </div>
                              <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="categories">
                                  <option selected><?= $news['categories'] ?></option>
                                  <option value="acara">Acara</option>
                                  <option value="berita">Berita</option>
                                </select>
                                <label for="floatingSelect">Kategori</label>
                              </div>
                              <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="status">
                                  <option selected><?= $news['status'] ?></option>
                                  <option value="draft">draft</option>
                                  <option value="published">Published</option>
                                </select>
                                <label for="floatingSelect">Status</label>
                              </div>
                              <div class="mb-3">
                                <textarea class="form-control" name="content"><?= $news['content'] ?></textarea>
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
                        <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $news['id'] ?>">
                        <hr>
                          <div class="text-center">
                          <img width="250" height="250" src="/uploads/<?= $news['image'] ?>" alt="<?= $news['title'] ?>">
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
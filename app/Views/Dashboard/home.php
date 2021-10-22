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
          <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Postingan</h5>
                      <h2>-</h2>
                      <p>Semua Postingan</p>
                      <div class="progress invisible" style="height: 1px;">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-grid gap-2">
                          <a href="<?= ('posts') ?>" class="btn btn-dark" type="button">Lihat</a>
                      </div>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Komentar Disetujui</h5>
                      <h2>?</h2>
                      <p>Buka Disqus untuk Melihat</p>
                      <div class="progress invisible" style="height: 1px;">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-grid gap-2">
                          <a href="https://masjid-al-ikhlas.disqus.com/admin/moderate/approved" class="btn btn-dark" type="button">Lihat di Disqus</a>
                      </div>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Komentar Menunggu Persetujuan</h5>
                      <h2>?</h2>
                      <p>Buka Disqus untuk Reviu</p>
                      <div class="progress invisible" style="height: 1px;">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-grid gap-2">
                          <a href="https://disqus.com/admin/moderate/pending" class="btn btn-dark" type="button">Lihat di Disqus</a>
                      </div>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card stat-widget">
                <div class="card-body">
                    <h5 class="card-title">Pengunjung Hari Ini</h5>
                      <h2>-</h2>
                      <p>Jumlah Pengunjung</p>
                      <div class="progress invisible" style="height: 1px;">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-grid gap-2">
                          <button class="btn btn-dark disabled" type="button"><i data-feather="minus"></i></button>
                      </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistik</h5>
                    <div id="apex1"></div>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card stat-widget">
              <div class="card-body">
                  <h5 class="card-title">Quick Draft</h5>
                  <form action="" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" name="title">
                      <label for="floatingInput">Judul Berita</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" name="categories">
                        <option selected value="Acara">Acara</option>
                        <option value="Berita">Berita</option>
                      </select>
                      <label for="floatingSelect">Kategori</label>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">Konten</span>
                      <textarea class="form-control" aria-label="With textarea" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary m-b-xs">Simpan</button>
                  </form>
              </div>
          </div>
          </div>
        </div>
      </div>
      
    </div>
</div>
<?= $this->endSection() ?>
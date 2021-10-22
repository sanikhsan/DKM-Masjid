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
                            <h5 class="card-title">Data Admin</h5>
                            <!-- <p class="card-description">Ubah Data Admin.</p> -->
                            <form action="" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-floating mb-3">
                                  <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $users['id'] ?>" required>
                                  <input type="text" class="form-control" id="floatingInput" name="username" value="<?= $users['username'] ?>" required>
                                  <label for="floatingInput">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="email" class="form-control" id="floatingInput" name="email" value="<?= $users['email'] ?>" required>
                                  <label for="floatingInput">Email</label>
                                </div>
                                <div class="input-group mb-3">
                                  <span for class="input-group-text">Motto</span>
                                  <textarea class="form-control" name="motto" required><?= $users['motto'] ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                              </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Foto Profile</h5>
                      <form action="profiles" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $users['id'] ?>" required>
                          <div class="text-center">
                          <img width="110" height="110" src="/uploads/<?= $users['image'] ?>">
                          </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Ubah Foto Profile</label>
                          <input class="form-control" type="file" id="image" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Password Admin</h5>
                            <!-- <p class="card-description">Ubah Password Admin .</p> -->
                                <!-- Notifikasi Peringatan Update Data -->
                                <!-- <?php if(session()->getFlashdata('msg')):?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('msg') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif;?> -->
                                <!-- Notifikasi Peringatan Update Data -->
                            <form action="profileword" method="post">
                                <div class="form-floating mb-3">
                                  <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $users['id'] ?>" required>
                                  <input type="password" class="form-control" id="floatingInput" name="old_password" required>
                                  <label for="floatingInput">Password Lama</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="password" class="form-control" id="floatingInput" name="new_password1" required>
                                  <label for="floatingInput">Password Baru</label>
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
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
                    <div class="text-end"><a href="<?= base_url('admin/posts/new') ?>" class="btn btn-info">Tambah Post</a></div>
                        <h5 class="card-title" style="margin-top: -35px;">Posts</h5>
                        <!-- <p>Semua postingan berita dan acara.</p> --> 
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Author</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($newses as $news):
                                
                                $date = $news['created_at'];
                                $condate = date("d F Y", strtotime($date));
                                ?>
                                <tr>
                                    <td><?= $news['title'] ?></td>
                                    <td><?= $news['author'] ?></td>
                                    <td><?= $news['categories'] ?></td>
                                    <td><?= $condate ?></td>
                                    <?php if($news['status']==='draft'): ?>
                                    <td>
                                        <span class="badge bg-primary"><?= $news['status'] ?></span>
                                    </td>
                                    <?php else : ?>
                                    <td>
                                        <span class="badge bg-success"><?= $news['status'] ?></span>
                                    </td>
                                    <?php endif ?>
                                    <td class="text-center">
                                        <a href="<?= base_url('admin/posts/'.$news['id'].'/edit') ?>" class="btn btn-outline-primary m-b-xs">Edit</a>
                                        <a href="#" data-href="<?= base_url('admin/posts/'.$news['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-outline-danger m-b-xs">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <!-- Modal Konfirmasi Hapus Berita -->
                            <div class="modal fade" id="confirm-dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Data Berita / Acara akan dihapus dan hilang selamanya.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" role="button" id="delete-button" class="btn btn-danger">Hapus</a>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <script>
                                function confirmToDelete(el){
                                    $("#delete-button").attr("href", el.dataset.href);
                                    $("#confirm-dialog").modal('show');
                                }
                            </script>
                        <!-- Modal Konfirmasi Hapus Berita -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
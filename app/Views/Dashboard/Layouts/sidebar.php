<div class="page-sidebar">
  <ul class="list-unstyled accordion-menu">
    <li class="sidebar-title">
      Utama
    </li>
    <?php $uri = service('uri'); ?>
    <li class="<?php if($uri->getSegment(2) == 'dashboard') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/dashboard')?>"><i data-feather="home"></i>Dashboard</a>
    </li>
    <li class="sidebar-title">
      Aplikasi
    </li>
    <li class="<?php if($uri->getSegment(2) == 'posts') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/posts')?>"><i data-feather="edit"></i>Postingan</a>
    </li>
    <!-- <li class="<?php if($uri->getSegment(2) == 'komentar') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/komentar')?>"><i data-feather="message-circle"></i>Komentar</a>
    </li> -->
    <li class="<?php if($uri->getSegment(2) == 'galeri') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/galeri')?>"><i data-feather="image"></i>Galeri</a>
    </li>
    <li class="<?php if($uri->getSegment(2) == 'jumat') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/jumat')?>"><i data-feather="clock"></i>Jadwal Jum'at</a>
    </li>
    <li class="sidebar-title">
      Halaman
    </li>
    <!-- <li class="<?php if($uri->getSegment(2) == 'komisi') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/komisi')?>"><i data-feather="briefcase"></i>Komisi</a>
    </li> -->
    <li class="<?php if($uri->getSegment(2) == 'sejarah') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/sejarah')?>"><i data-feather="book-open"></i>Tentang</a>
    </li>
    <!-- <li class="<?php if($uri->getSegment(2) == 'sambutan') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/sambutan')?>"><i data-feather="info"></i>Sambutan</a>
    </li> -->
    <li class="<?php if($uri->getSegment(2) == 'keanggotaan') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/keanggotaan')?>"><i data-feather="users"></i>Kepengurusan</a>
    </li>
    <li class="<?php if($uri->getSegment(2) == 'jadwal') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/jadwal')?>"><i data-feather="clock"></i>Jadwal Shalat</a>
    </li>
    <li class="sidebar-title">
      Lainnya
    </li>
    <li class="<?php if($uri->getSegment(2) == 'profile') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/profile')?>"><i data-feather="user"></i>Profile</a>
    </li>
    <li class="<?php if($uri->getSegment(2) == 'pengaturan') { echo 'active-page'; } ?>">
      <a href="<?= base_url('admin/pengaturan')?>"><i data-feather="settings"></i>Pengaturan</a>
    </li>
    <li>
      <a href="<?= base_url('admin/logout')?>"><i data-feather="log-out"></i>Keluar</a>
    </li>
  </ul>
</div>
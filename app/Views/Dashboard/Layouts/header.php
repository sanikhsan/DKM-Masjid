<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
      <div class="" id="navbarNav">
        <ul class="navbar-nav" id="leftNav">
          <li class="nav-item">
            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= ('/') ?>">Lihat Website <i data-feather="link" style="height: 16; width: 16;"></i></a>
          </li>
        </ul>
        </div>
        <div class="logo">
          <a class="navbar-brand" href="index.html"></a>
        </div>
        <div class="" id="headerNav">
          <ul class="navbar-nav">                        
            <li class="nav-item dropdown">
              <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?= base_url('Admin/assets/images/avatars/profile-image.png')?>" alt=""></a>
              <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                <a class="dropdown-item" href="<?= ('profile') ?>"><i data-feather="user"></i>Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= ('settings') ?>"><i data-feather="settings"></i>Pengaturan</a>
                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Keluar</a>
              </div>
            </li>
          </ul>
      </div>
    </nav>
</div>
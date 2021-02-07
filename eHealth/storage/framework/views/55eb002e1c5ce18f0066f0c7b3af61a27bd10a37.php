<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header">Navigasi</li>
           <li class="nav-item">
            <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(Request::segment(1) === 'home' ? 'active' : null); ?>">
              <!-- <ion-icon name="home-outline"></ion-icon> -->
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" <?php echo e(route('dokter.index')); ?> " class="nav-link <?php echo e(Request::segment(1) === 'dokter' ? 'active' : null); ?>">
              <!-- <ion-icon name="home-outline"></ion-icon> -->
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Dokter
              </p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::segment(1) === 'pasien' ? 'menu-open' : null); ?> <?php echo e(Request::segment(1) === 'pasienAdd' ? 'menu-open' : null); ?>">
            <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'pasien' ? 'active' : null); ?> <?php echo e(Request::segment(1) === 'pasienAdd' ? 'active' : null); ?>">
              <i class="nav-icon fas fa-wheelchair"></i>
              <p>
                Pasien
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('pasien.index')); ?>" class="nav-link <?php echo e(Request::segment(1) === 'pasien' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'pasienAdd' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo e(Request::segment(1) === 'rekamMedis' ? 'menu-open' : null); ?> <?php echo e(Request::segment(1) === 'rekamMedisAdd' ? 'menu-open' : null); ?>">
            <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'rekamMedis' ? 'active' : null); ?> <?php echo e(Request::segment(1) === 'rekamMedisAdd' ? 'active' : null); ?>">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Rekam Medis
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('rekamMedis.index')); ?>" class="nav-link <?php echo e(Request::segment(1) === 'rekamMedis' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'rekamMedisAdd' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo e(Request::segment(1) === 'kartuKes' ? 'menu-open' : null); ?> <?php echo e(Request::segment(1) === 'kartuKesAdd' ? 'menu-open' : null); ?>">
            <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'kartuKes' ? 'active' : null); ?> <?php echo e(Request::segment(1) === 'kartuKesAdd' ? 'active' : null); ?>">
              <i class="nav-icon fas fa-pager"></i>
              <p>
                Kartu Kesehatan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('kartuKes.index')); ?>" class="nav-link <?php echo e(Request::segment(1) === 'kartuKes' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'kartuKesAdd' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo e(Request::segment(1) === 'obat' ? 'menu-open' : null); ?> <?php echo e(Request::segment(1) === 'obatAdd' ? 'menu-open' : null); ?>">
            <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'obat' ? 'active' : null); ?> <?php echo e(Request::segment(1) === 'obatAdd' ? 'active' : null); ?>">
              <i class="nav-icon fas fa-pills"></i>
              <p>
                Obat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('obat.index')); ?>" class="nav-link <?php echo e(Request::segment(1) === 'obat' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'obatAdd' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo e(Request::segment(1) === 'ruang' ? 'menu-open' : null); ?> <?php echo e(Request::segment(1) === 'ruangAdd' ? 'menu-open' : null); ?>">
            <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'ruang' ? 'active' : null); ?> <?php echo e(Request::segment(1) === 'ruangAdd' ? 'active' : null); ?>">
              <i class="nav-icon fas fa-procedures"></i>
              <p>
                Ruang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('ruang.index')); ?>" class="nav-link <?php echo e(Request::segment(1) === 'ruang' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'ruangAdd' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo e(Request::segment(1) === 'users' ? 'menu-open' : null); ?> <?php echo e(Request::segment(1) === 'usersAdd' ? 'menu-open' : null); ?>">
            <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'users' ? 'active' : null); ?> <?php echo e(Request::segment(1) === 'usersAdd' ? 'active' : null); ?>">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" <?php echo e(route('users.index')); ?> " class="nav-link <?php echo e(Request::segment(1) === 'users' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo e(Request::segment(1) === 'usersInput' ? 'active' : null); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
              <?php echo csrf_field(); ?>
            </form>
            <!-- <ion-icon name="home-outline"></ion-icon> -->
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Sign Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\rekam-medis\Web-Rekam-Medis\eHealth\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
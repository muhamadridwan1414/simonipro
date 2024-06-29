<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="<?= base_url('staff'); ?>" class="text-nowrap logo-img">
            <img src="<?= base_url('assets'); ?>/images/logos/logo-simonipro.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('staff/'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">PENGELOLAAN USER</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'kelola_role') ? 'active' : '' ?>" href="<?= base_url('staff/kelola_role'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-rollercoaster"></i>
                </span>
                <span class="hide-menu">Kelola Role</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'kelola_pengguna') ? 'active' : '' ?>" href="<?= base_url('staff/kelola_pengguna'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Kelola Pengguna</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'kelola_prodi') ? 'active' : '' ?>" href="<?= base_url('staff/kelola_prodi'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-building"></i>
                </span>
                <span class="hide-menu">Kelola Prodi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'kelola_project') ? 'active' : '' ?>" href="<?= base_url('staff/kelola_project'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-stack"></i>
                </span>
                <span class="hide-menu">Kelola Project</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'kelola_dosen') ? 'active' : '' ?>" href="<?= base_url('staff/kelola_dosen'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-messages"></i>
                </span>
                <span class="hide-menu">Kelola Dosen</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == 'kelola_mahasiswa') ? 'active' : '' ?>" href="<?= base_url('staff/kelola_mahasiswa'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Kelola Mahasiswa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link <?= ($active == '') ? $active : '' ?>" href="<?= base_url('staff/kelola_jadwal'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar"></i>
                </span>
                <span class="hide-menu">Kelola Jadwal</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('auth/logout'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url('auth/register'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
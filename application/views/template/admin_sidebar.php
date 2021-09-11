<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Enigma Book</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Admin Menu
  </div>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('admin/orders') ?>">
      <i class="fas fa-fw fa-cart-plus"></i>
      <span>Orders</span>
    </a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
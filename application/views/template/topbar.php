<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <?php

      $keranjang = $this->cart->contents();
      $qty  = 0;
      foreach ($keranjang as $key => $value) {
        $qty += $value['qty'];
      };
      ?>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-basket fa-fw"></i>
            <span class="badge badge-danger badge-counter"><?= $qty ?></span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Keranjang
            </h6>
            <?php
            foreach ($keranjang as $key => $value) :
              $image = $this->Book_model->findBookById($value['id']);
            ?>

              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="<?= $image->image ?>" alt="<?= $value['name'] ?>">
                  <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                  <div class="text-truncate"><?= $value['name'] ?></div>
                  <div class="small text-gray-500"><?= $value['qty'] ?> x <?= number_format(($value['price']), 2) ?></div>
                  <div class="small text-gray-500"><strong>Rp. <?= number_format(($value['subtotal']), 2) ?></strong></div>
                </div>
              </a>
            <?php endforeach ?>
            <div class="dropdown-item d-flex align-items-center">
              <h6>Total : <strong><?= $this->cart->format_number($this->cart->total()); ?></strong></h6>
            </div>
            <a class="dropdown-item text-center small text-gray-500" href="<?= site_url('cart') ?>">Lihat Keranjang</a>
          </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
            <img class="img-profile rounded-circle" src="<?= base_url('assets/') ?>img/undraw_profile.svg">
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
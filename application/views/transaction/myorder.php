<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <div class="row">
    <div class="col-md-12">
      <?php if (@$cart->factur) : ?>
        <div class="card shadow h-100 py-2">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <table class="table table-borderless table-sm">
                  <thead class="text-primary">
                    <tr>
                      <th>No Pesananan</th>
                      <th>Total Pembayaran</th>
                      <th>Status Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <?= $cart->factur ?>
                        <p><?= $cart->transaction_time ?></p>
                      </td>
                      <td>Rp. <?= number_format($cart->grand_total) ?></td>
                      <td>
                        <?php if ($cart->transaction_status == 'expire') {
                          echo '<span class="badge badge-warning">Waktu Habis</span>';
                        } elseif ($cart->transaction_status == 'pending') {
                          echo '<span class="badge badge-secondary">Pending</span>';
                        } elseif ($cart->transaction_status == 'failure') {
                          echo '<span class="badge badge-danger">Gagal</span>';
                        } else {
                          echo '<span class="badge badge-success">Berhasil</span>';
                        } ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-12">
                <h4 class="text-danger mb-4 font-weight-bold">Detail Pesanan</h4>
                <div class="row">
                  <div class="col-lg-6 orders-scroll">
                    <h5 class="text-info">Daftar Belanja</h5>

                    <div class="row">
                      <?php $i = 1;
                      foreach ($carts as $items) :
                      ?>
                        <div class="col-md-2">
                          <img src="<?= $items['image'] ?>" class="img-fluid mb-3" alt="Responsive image">
                        </div>
                        <div class="col-md-9">
                          <div class="text-primary"><?= $items['title'] ?></div>
                          <div class="small text-gray-500">Rp<?= number_format(($items['price']), 2) ?></div>
                          <div class="row no-gutters align-items-center mt-4">
                            <div class="col mr-2">
                              <div class="mb-0 text-gray-800">
                                Jumlah: <?= $items['qty'] ?>
                              </div>
                            </div>
                            <div class="col-auto text-danger">
                              Rp <?= number_format(($items['subtotal']), 2) ?>
                            </div>
                          </div>
                        </div>
                      <?php
                        $i++;
                      endforeach ?>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-11">
                        <div class="row no-gutters align-items-center font-weight-bold">
                          <div class="col mr-2">
                            <div class="mb-0 text-gray-800">
                              Total Pembayaran
                            </div>
                          </div>
                          <div class="col-auto text-danger">
                            Rp. <?php echo $this->cart->format_number($cart->grand_total); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <h5 class="text-info">Alamat Pengiriman</h5>
                    <p>
                      <?= $cart->first_name ?> <?= $cart->last_name ?>
                      <br>
                      Jl Taman Aries Tirta
                      Jl Taman Aries Tirta Blok H3 No 12 Ujung
                      Kembangan - Kota Jakarta Barat
                      DKI Jakarta 11620
                      +6282180221160
                    </p>
                    <hr>
                    <h5 class="text-info">Metode Pengiriman</h5>
                    <p>
                      JNE Express
                      <br>
                      Rp. 25.000,-
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php else : ?>
        <div class="card shadow h-100 py-2">
          <div class="card-body">
            <div class="row text-center">
              <div class="col-lg-12 col-md-12">
                <h4>Masih kosong nih</h4>
                <a href="<?= site_url('book') ?>" class="btn btn-primary"> <i class="fas fa-shopping-cart"></i> Beli Disini</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>
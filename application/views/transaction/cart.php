<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <div class="card shadow h-100 py-2">
        <div class="card-body">
          <form action="<?= site_url('cart/update') ?>" method="POST">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="row">
                  <?php $i = 1;
                  foreach ($this->cart->contents() as $items) :
                    $image = $this->Book_model->findBookById($items['id']);
                  ?>
                    <div class="col-lg-2 col-md-2">
                      <img src="<?= $image->image ?>" class="img-fluid mb-3" alt="Responsive image">
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="font-weight-bold">
                        <div class="text-primary"><?= $items['name'] ?></div>
                        <div class="small text-gray-500">Rp<?= number_format(($items['price']), 2) ?></div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <?php echo form_input(
                        array(
                          'name'      => $i . '[qty]',
                          'value'     => $items['qty'],
                          'maxlength' => '3',
                          'min'       => '0',
                          'size'      => '5',
                          'type'      => 'number',
                          'class'     => 'form-control'
                        )
                      ); ?>
                    </div>
                    <div class="col-md-2 text-right">
                      <div class="text-danger">Subtotal</div>
                      <div class="small text-gray-500"><strong>Rp. <?= number_format(($items['subtotal']), 2) ?></strong></div>

                      <p class="mt-5">
                        <a href="<?= site_url('cart/delete/' . $items['rowid']) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </p>
                    </div>
                  <?php
                    $i++;
                  endforeach ?>
                </div>
              </div>
            </div>
            <div class="row mt-5 text-right">
              <div class="col-md-12">
                <a href="<?= site_url('book') ?>" class="btn btn-primary text-uppercase"><i class="fas fa-shopping-basket"></i> Tambah Keranjang</a>
                <button type="submit" class="btn btn-info text-uppercase"><i class="fas fa-save"></i> Update Keranjang</button>
                <a href="<?= site_url('cart/clear') ?>" class="btn btn-danger text-uppercase"><i class="fas fa-trash"></i> Hapus Semua Keranjang</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12">
      <form action="<?= site_url('checkout/process') ?>" method="POST">
        <?php $facturNumber = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
        <div class="card shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center mb-4">
              <div class="col mr-2">
                <div class="mb-0 font-weight-bold text-gray-800">
                  Total
                </div>
              </div>
              <div class="col-auto">
                Rp. <?php echo $this->cart->format_number($this->cart->total()); ?>
              </div>
            </div>
            <input type="hidden" name="factur" value="<?= $facturNumber ?>">
            <input type="hidden" name="grand_total" value="<?= $this->cart->total() ?>">
            <input type="hidden" name="total_bayar" value="0">

            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) { ?>
              <input type="hidden" name="qty<?= $no++ ?>" value="<?= $items['qty'] ?>">
            <?php  } ?>
            <button type="submit" class="btn btn-lg btn-block btn-success">Lanjutkan Pembayaran</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
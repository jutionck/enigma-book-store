<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <form action="<?= site_url('admin/orders/refresh') ?>" method="POST">
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow h-100 py-2">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-lg-6">
                <h4 class="text-danger mb-4 font-weight-bold"><?= $title ?></h4>
              </div>
              <div class="col-lg-6 text-right">
                <div class="input-group">
                  <input type="text" name="factur" class="form-control bg-light border-0 small" placeholder="Nomor pesanan..." aria-label="Search" aria-describedby="basic-addon2" required>
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary"> <i class="fas fa-sync-alt"></i> Refresh Status</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tipe Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                    <th>No Pesanan</th>
                    <th>Email Customer</th>
                    <th>Total Belanja</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($transactions->result() as $row) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row->payment_type ?></td>
                      <td><?= $row->transaction_time ?></td>
                      <td><a href="<?= site_url('admin/orders/detail/' . $row->factur) ?>"> <?= $row->factur ?></a></td>
                      <td><?= $row->email ?></td>
                      <td>Rp. <?= number_format($row->grand_total) ?></td>
                      <td>
                        <?php if ($row->transaction_status == 'pending') {
                          echo '<span class="badge badge-secondary text-uppercase">pending</span>';
                        } elseif ($row->transaction_status == 'settlement') {
                          echo '<span class="badge badge-success text-uppercase">settlement</span>';
                        } else {
                          echo '<span class="badge badge-danger text-uppercase">failure</span>';
                        }
                        ?>
                      </td>
                      <td>
                        <a href="<?= $row->pdf_url ?>" class="btn btn-success"><i class="fas fa-file-pdf"></i></a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
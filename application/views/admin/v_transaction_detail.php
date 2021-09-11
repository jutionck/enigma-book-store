<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <?php if ($transactionsDetailMember->transaction_status == 'settlement') {
    echo '<div class="alert alert-success" role="alert">Transaksi Sukses</div>';
  } elseif ($transactionsDetailMember->transaction_status == 'failure') {
    echo '<div class="alert alert-danger" role="alert">Transaksi Gagal</div>';
  } else {
    echo '<div class="alert alert-secondary" role="alert">Transaksi Pending</div>';
  } ?>
  <div class="row mb-4">
    <div class="col-md-12">
      <div class="card shadow py-2">
        <div class="card-body">
          <h5 class="text-dark mb-4 font-weight-bold">Informasi Pembayaran</h5>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card card-detail py-2 mb-4">
                <div class="card-body">
                  <div class="text-sm  mb-1">
                    No Pesanan</div>
                  <div class="h5 mb-0 font-weight-bold"><?= $transactionsDetailMember->factur ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card card-detail py-2 mb-4">
                <div class="card-body">
                  <div class="text-sm  mb-1">
                    Total</div>
                  <div class="h5 mb-0 font-weight-bold">Rp. <?= number_format($transactionsDetailMember->grand_total) ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card card-detail py-2 mb-4">
                <div class="card-body">
                  <div class="text-sm  mb-1">
                    Tipe Pembayaran</div>
                  <div class="h5 mb-0 font-weight-bold"><?= $transactionsDetailMember->payment_type ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="card card-detail py-2 mb-4">
                <div class="card-body">
                  <div class="text-sm  mb-1">
                    Status Transaksi</div>
                  <div class="h5 mb-0 font-weight-bold"><?= $transactionsDetailMember->transaction_status ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow py-2 mb-4">
        <div class="card-body">
          <h5 class="text-dark mb-4 font-weight-bold">Detail Pesanan</h5>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>No Pesanan</th>
                <td><?= $transactionsDetailMember->factur ?></td>
              </tr>
              <tr>
                <th>Tipe Pembayaran</th>
                <td><?= $transactionsDetailMember->payment_type ?></td>
              </tr>
              <tr>
                <th>Total</th>
                <td>Rp. <?= number_format($transactionsDetailMember->grand_total) ?></td>
              </tr>
              <tr>
                <th>Waktu Pembayaran</th>
                <td><?= $transactionsDetailMember->transaction_time ?></td>
              </tr>
              <tr>
                <th>Status Pembayaran</th>
                <td><?= $transactionsDetailMember->transaction_status ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow py-2 card-detail-customer mb-4">
        <div class="card-body">
          <h5 class="text-dark mb-4 font-weight-bold">Detail Customer</h5>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Nama</th>
                <td><?= $transactionsDetailMember->first_name ?> <?= $transactionsDetailMember->first_name ?></td>
              </tr>
              <tr>
                <th>No Telphone</th>
                <td>0829299292</td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?= $transactionsDetailMember->email ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>Jl. Kh Ahamd Dahlan No 75 Ragunan Jakarta Selatan</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-12">
      <div class="card shadow py-2">
        <div class="card-body">
          <h5 class="text-dark mb-4 font-weight-bold">Detail Produk</h5>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Produk ID</th>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Harga Produk</th>
                  <th>Sub Total</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($transactionsDetailProduct as $row) : ?>
                  <tr>
                    <td><?= $row->book_id ?></td>
                    <td><?= $row->title ?></td>
                    <td><?= $row->qty ?></td>
                    <td class="text-right">Rp. <?= number_format($row->price) ?></td>
                    <td class="text-right">Rp. <?= number_format($row->subtotal) ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Total</th>
                  <th colspan="4" class="text-right">Rp. <?= number_format($transactionsDetailMember->grand_total) ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
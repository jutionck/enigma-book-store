<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <div class="row mb-5">
    <div class="col-lg-7 col-md-12">
      <div class="card shadow h-100 py-2">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-danger mb-4 font-weight-bold">Pengiriman</h4>
              <h5 class="text-info">Tujuan Pengiriman</h5>
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
    <div class="col-lg-5 col-md-12">
      <div class="card shadow h-100 py-2">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-danger mb-4 font-weight-bold">Rincian Pemesanan</h4>
            </div>
          </div>

          <div class="row">
            <?php $i = 1;
            foreach ($carts as $items) :
            ?>
              <div class="col-md-3">
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
            <div class="col-md-12">
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
              <button type="button" class="btn btn-success btn-lg btn-block mt-3" id="tombol-bayar" data-amount="<?= $cart->grand_total; ?>">Bayar Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
  <input type="hidden" name="result_type" id="result-type" value=""></div>
  <input type="hidden" name="result_data" id="result-data" value=""></div>
</form>


<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-txTPsq3JcRYcOoBt"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
  $('#tombol-bayar').click(function(event) {
    var grossamount = $(this).data('amount');
    event.preventDefault();
    $(this).attr("disabled", "disabled");
    $.ajax({
      url: '<?= site_url() ?>/snap/token',
      cache: false,
      data: {
        grossamount: grossamount
      },
      success: function(data) {
        //location = data;

        console.log('token = ' + data);

        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type, data) {
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {

          onSuccess: function(result) {
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result) {
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result) {
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });
</script>
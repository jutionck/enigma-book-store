<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <div class="row">
    <div class="col-md-12">
      <div class="card shadow h-100 py-2">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <img src="<?= $book->image ?>" class="img-fluid mb-3" alt="Responsive image">
            </div>
            <div class="col-md-9">
              <h4><?= $book->title ?></h4>
              <hr>
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="mb-0 font-weight-bold text-gray-800">
                    Rp. <?= number_format($book->price, 2) ?>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="btn-group float-right">
                    <button type="submit" class="card-link btn btn-sm btn-primary"><i class="fas fa-shopping-basket"></i> Beli</button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-8">
                  <p class="card-text text-justify">
                    <strong>
                      Deskripsi
                    </strong> <br><br>
                    <?= $book->description ?>
                  </p>
                </div>
                <div class="col-md-4">
                  <strong>
                    Detail
                  </strong> <br><br>
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="mb-0 font-weight-bold text-gray-800">
                        Jumlah Halaman
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn-group float-right">
                        <?= $book->page ?>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="mb-0 font-weight-bold text-gray-800">
                        Tahun Terbit
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn-group float-right">
                        <?= $book->year ?>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="mb-0 font-weight-bold text-gray-800">
                        Bahasa
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn-group float-right">
                        <?= $book->language ?>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="mb-0 font-weight-bold text-gray-800">
                        Penerbit
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn-group float-right">
                        <?= $book->publisher ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
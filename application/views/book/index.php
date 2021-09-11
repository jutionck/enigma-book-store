<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <div class="row">
    <div class="col-lg-12 mb-4">
      <img src="https://cdn.gramedia.com/uploads/marketing/Special_Offer_Oopredoo_Storefront__wauto_h336.png" class="mw-100" alt="Responsive image">
    </div>
  </div>

  <div class="row">
    <?php foreach ($books as $book) : ?>
      <div class="col-lg-3">
        <form action="<?= site_url('book/add_cart') ?>" method="POST">
          <input type="hidden" name="id" value="<?= $book->id ?>">
          <input type="hidden" name="qty" value="1">
          <input type="hidden" name="price" value="<?= $book->price ?>">
          <input type="hidden" name="name" value="<?= $book->title ?>">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title"><?= word_limiter($book->title, 3) ?></h5>
              <a href="<?= site_url('book/detail/' . str_replace(' ', '-', strtolower($book->title))) ?>"><img src="<?= $book->image ?>" class="img-fluid mb-3" alt="Responsive image"></a>
              <p class="card-text">
                <?= word_limiter($book->description, 10) ?>
              </p>
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="mb-0 font-weight-bold text-gray-800">
                    Rp. <?= number_format($book->price, 2) ?>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="btn-group float-right">
                    <a href="<?= site_url('book/detail/' . str_replace(' ', '-', strtolower($book->title))) ?>" class="card-link btn btn-sm btn-success"><i class="fas fa-eye"></i> Detail</a>
                    <button type="submit" class="card-link btn btn-sm btn-primary"><i class="fas fa-shopping-basket"></i> Beli</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    <?php endforeach ?>
  </div>

</div>
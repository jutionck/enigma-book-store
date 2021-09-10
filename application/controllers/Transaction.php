<?php

class Transaction extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaction_model', 'Transaction');
  }

  public function index()
  {
    $data = [
      'title'   => 'Keranjang Belanja'
    ];
    $page = '/transaction/cart';
    pageBackend('member', $page, $data);
  }



  public function checkout()
  {
    $data = [
      'title'   => 'Pembayaran'
    ];
    $page = '/transaction/checkout';
    pageBackend('member', $page, $data);
  }

  public function delete($rowId)
  {
    $this->cart->remove($rowId);
    redirect('cart');
  }

  public function update()
  {
    $i = 1;
    foreach ($this->cart->contents() as $items) {
      $data = [
        'rowid' => $items['rowid'],
        'qty'   => $this->input->post($i . '[qty]')
      ];
      $this->cart->update($data);
      $i++;
    }
    redirect('cart');
  }
}

<?php

class Transaction_book extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaction_model', 'Transaction');
  }

  public function index()
  {
    if ($this->cart->contents()) {
      $data = [
        'title'   => 'Keranjang Belanja'
      ];
      $page = '/transaction/cart';
      pageBackend('member', $page, $data);
    } else {
      redirect('book');
    }
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

  // day two

  public function clear()
  {
    $this->cart->destroy();
    redirect('cart');
  }

  public function checkoutProcess()
  {
    $post = $this->input->post();
    $data = [
      'factur'      => $post['factur'],
      'date'        => date('Y-m-d'),
      'member_id'   => 9,
      'grand_total' => $post['grand_total'],
      'total_bayar' => $post['total_bayar'],
      'status'      => 0
    ];

    $insert = $this->Transaction->save($data);
    $i = 1;
    foreach ($this->cart->contents() as $item) {
      $detailTransaction = [
        'factur'      => $post['factur'],
        'book_id'     => $item['id'],
        'price'       => $item['price'],
        'qty'         => $item['qty']
      ];
      $this->Transaction->saveTransactionDetail($detailTransaction);
    }
    if ($insert > 0) {
      $this->session->set_flashdata('messsage', 'Pesanan berhasil di proses....');
    } else {
      $this->session->set_flashdata('error', 'Pesanan gagal di proses....');
    }
    $this->cart->destroy();
    redirect('checkout');
  }

  public function checkout()
  {
    $data = [
      'title'   => 'Pembayaran',
      'carts'   => $this->Transaction->getCartByMember(9)->result_array(),
      'cart'    => $this->Transaction->getCartByMember(9)->row()
    ];
    $page = '/transaction/checkout';
    pageBackend('member', $page, $data);
  }

  public function myOrder()
  {
    $data = [
      'title'   => 'Pesanan Saya',
      'carts'   => $this->Transaction->getCartByMember(9)->result_array(),
      'cart'    => $this->Transaction->getCartByMemberStatus(9)->row()
    ];
    $page = '/transaction/myorder';
    pageBackend('member', $page, $data);
  }
}

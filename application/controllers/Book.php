<?php

class Book extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Book_model', 'Book');
  }

  public function index()
  {
    $data = [
      'title'   => 'Beli Buku',
      'books'   => $this->Book->getListBook()->result()
    ];
    $page = '/book/index';
    pageBackend('member', $page, $data);
  }

  public function cart()
  {
    $data = array(
      'id'      =>  $this->input->post('id'),
      'qty'     =>  $this->input->post('qty'),
      'price'   =>  $this->input->post('price'),
      'name'    =>  $this->input->post('name')
    );
    $this->cart->insert($data);
    redirect('book');
  }

  public function detail($bookTitle)
  {
    $title = str_replace('-', ' ', $bookTitle);
    $getTitile = $this->Book->findBookByTitle(ucwords($title));
    if ($getTitile) {
      $data = [
        'title'   => 'Detail Buku',
        'book'    => $getTitile
      ];
      $page = '/book/detail';
      pageBackend('member', $page, $data);
    } else {
      redirect('book');
    }
  }
}

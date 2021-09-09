<?php

class Product extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Product_model', 'Product');
    $this->load->helper('url');
  }

  public function index()
  {
    $data = [
      'products' => $this->Product->getAll()
    ];
    $this->load->view('product', $data);
  }
}

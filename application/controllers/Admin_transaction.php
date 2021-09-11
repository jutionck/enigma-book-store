<?php

class Admin_transaction extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_transaction_model', 'Transaction');
    $params = array('server_key' => 'SB-Mid-server-k14J56HrRx3PT4fIiCU_FrLi', 'production' => false);
    $this->load->library('veritrans');
    $this->veritrans->config($params);
  }

  public function index()
  {
    $data = [
      'title'         => 'Status Transaksi',
      'transactions'  => $this->Transaction->getAllTransaction()
    ];

    $page = 'admin/v_transaction';
    pageBackend('admin', $page, $data);
  }

  public function detail($facturNumber)
  {
    $data = [
      'title'                     => 'Detail Transaksi',
      'transactionsDetailMember'  => $this->Transaction->getDetailTransactionByFacturMember($facturNumber)->row(),
      'transactionsDetailProduct' => $this->Transaction->getDetailTransactionByFacturProduct($facturNumber)->result(),
    ];

    $page = 'admin/v_transaction_detail';
    pageBackend('admin', $page, $data);
  }

  public function refresh()
  {
    $facturNumber = $this->input->post('factur');
    if ($facturNumber) {
      $this->status($facturNumber);
    } else {
    }
  }

  private function status($facturNumber)
  {
    $result     = $this->veritrans->status($facturNumber);
    $dataUpdate = [
      'transaction_status' => $result->transaction_status,
      'date_modified'      => time()
    ];
    $this->Transaction->refreshStatus($dataUpdate, $facturNumber);
    redirect('admin/orders');
  }
}

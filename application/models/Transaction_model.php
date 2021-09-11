<?php

class Transaction_model extends CI_Model
{

  public function save($data)
  {
    $this->db->insert('transaction', $data);
    return $this->db->affected_rows();
  }

  public function saveTransactionDetail($data)
  {
    $this->db->insert('transaction_detail', $data);
    return $this->db->affected_rows();
  }
}

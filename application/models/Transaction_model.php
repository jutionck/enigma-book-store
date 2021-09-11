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

  public function getCartByMember($id)
  {
    $query = "SELECT transaction.factur, transaction.date, transaction.grand_total, td.qty, (td.price * td.qty) as subtotal, b.id as book_id, b.title, b.price, b.image, m.first_name, m.last_name, m.email FROM transaction JOIN transaction_detail td on transaction.factur = td.factur JOIN book b on b.id = td.book_id JOIN member m on m.id = transaction.member_id WHERE m.id = $id";
    return $this->db->query($query);
  }

  public function getCartByMemberStatus($id)
  {
    $query = "SELECT tfm.payment_type, tfm.transaction_time, t.factur, m.email, t.grand_total, tfm.transaction_status, tfm.va_number, tfm.bank, m.first_name, m.last_name FROM transaction_from_midtrans tfm JOIN transaction t on tfm.factur = t.factur JOIN member m on m.id = t.member_id JOIN transaction_detail td on t.factur = td.factur JOIN book b on td.book_id = b.id WHERE m.id = '$id' GROUP BY tfm.factur;";

    return $this->db->query($query);
  }

  public function saveTransactionFromMidtrans($data)
  {
    $this->db->insert('transaction_from_midtrans', $data);
  }
}

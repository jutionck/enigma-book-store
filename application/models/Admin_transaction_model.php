<?php

class Admin_transaction_model extends CI_Model
{

  public function getAllTransaction()
  {
    $query = "SELECT tfm.payment_type, tfm.transaction_time, tfm.pdf_url, t.factur, m.email, t.grand_total, tfm.transaction_status FROM transaction_from_midtrans tfm JOIN transaction t on tfm.factur = t.factur JOIN member m on m.id = t.member_id";

    return $this->db->query($query);
  }

  public function getDetailTransactionByFacturMember($facturNumber)
  {
    $query = "SELECT tfm.payment_type, tfm.transaction_time, t.factur, m.email, t.grand_total, tfm.transaction_status, tfm.va_number, tfm.bank, m.first_name, m.last_name FROM transaction_from_midtrans tfm JOIN transaction t on tfm.factur = t.factur JOIN member m on m.id = t.member_id JOIN transaction_detail td on t.factur = td.factur JOIN book b on td.book_id = b.id WHERE tfm.factur = '$facturNumber' GROUP BY tfm.factur;";

    return $this->db->query($query);
  }

  public function getDetailTransactionByFacturProduct($facturNumber)
  {
    $query = "SELECT td.qty, td.price, (td.price*td.qty) as subtotal, tr.grand_total, b.id as book_id, b.title FROM transaction tr JOIN transaction_detail td on tr.factur = td.factur JOIN book b on b.id = td.book_id WHERE tr.factur = '$facturNumber';";

    return $this->db->query($query);
  }

  public function refreshStatus($data, $where)
  {
    $this->db->update('transaction_from_midtrans', $data, ['factur' => $where]);
  }
}

<?php

class Book_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->table = 'book';
  }

  function getListBook()
  {
    return $this->db->get('book');
  }

  function findBookById($id)
  {
    return $this->db->get_where($this->table, ['id' => $id])->row();
  }

  function findBookByTitle($title)
  {
    return $this->db->get_where($this->table, ['title' => $title])->row();
  }
}

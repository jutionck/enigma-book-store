<?php

class Product_model extends CI_Model
{
  public function getAll()
  {
    $product = ['Keyboard', 'Mouse', 'Monitor', 'Deskmad'];
    return $product;
  }
}

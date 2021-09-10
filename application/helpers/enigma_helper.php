<?php

function keyencrypt()
{
  return 'EN19M4C4MP123';
}

function encodeEncrypt($id)
{
  $ci = get_instance();
  return $ci->encrypt->encode($id, keyencrypt());
}

function decodeEncrypt($id)
{
  $ci = get_instance();
  return $ci->encrypt->decode($id, keyencrypt());
}

// template
function pageAuth($page  = "", $data = "")
{
  $ci = get_instance();
  // manggil header 
  $ci->load->view('auth/auth_header', $data);
  //manggil page
  $ci->load->view('/' . $page, $data);
  //manggil footer
  $ci->load->view('auth/auth_footer', $data);
}

function pageBackend($role = '', $page = '', $data = '')
{
  $ci = get_instance();
  $ci->load->view('template/header', $data);
  $ci->load->view('template/topbar', $data);
  $ci->load->view('template/' . strtolower($role . '_sidebar'), $data);
  $ci->load->view('' . $page, $data);
  $ci->load->view('template/footer');
}

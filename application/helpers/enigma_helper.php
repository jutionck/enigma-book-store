<?php

// template
function pageAuth($page  = "", $data = "")
{
  $ci = get_instance();
  // manggil header 
  $ci->load->view('template/auth_header', $data);
  //manggil page
  $ci->load->view('/' . $page, $data);
  //manggil footer
  $ci->load->view('template/auth_footer', $data);
}

function pageBackend($role = '', $page = '', $data = '')
{
  $ci = get_instance();
  $ci->load->view('template/header', $data);
  $ci->load->view('template/' . strtolower($role . '_sidebar'), $data);
  $ci->load->view('template/topbar', $data);
  $ci->load->view('' . $page, $data);
  $ci->load->view('template/footer');
}

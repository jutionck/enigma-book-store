<?php

class Test extends CI_Controller
{

  public function index()
  {
    $data = [
      'title'   => 'Dashboard',
    ];
    $page = '/dashboard/member_dashboard';
    pageBackend('member', $page, $data);
  }
}

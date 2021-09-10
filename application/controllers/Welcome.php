<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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

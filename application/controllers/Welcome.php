<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{

		$data = [
			'title'   => 'Halaman Utama Enigma Book Store',
		];
		$page = '/dashboard/member_dashboard'; //content
		pageBackend('member', $page, $data);
	}
}

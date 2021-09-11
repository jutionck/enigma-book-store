<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-k14J56HrRx3PT4fIiCU_FrLi', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('Transaction_model', 'Transaction');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function token()
	{
		// get from checkout
		$grossamount = $this->input->get('grossamount');
		$cartByMember = $this->Transaction->getCartByMember(9)->result_array();
		$member 			= $this->Transaction->getCartByMember(9)->row();

		// Required
		$transaction_details = array(
			'order_id' 			=> $member->factur,
			'gross_amount' 	=> $grossamount, // no decimal allowed for creditcard
		);

		$item_details = [];
		foreach ($cartByMember as $item) {
			$item_details[] = [
				'id' 					=> $item['book_id'],
				'price' 			=> $item['price'],
				'quantity' 		=> $item['qty'],
				'name' 				=> word_limiter($item['title'], 3, '...')
			];
		}

		// Optional
		// $item1_details = array(
		// 	'id' => 'a1',
		// 	'price' => 18000,
		// 	'quantity' => 3,
		// 	'name' => "Apple"
		// );

		// // Optional
		// $item2_details = array(
		// 	'id' => 'a2',
		// 	'price' => 20000,
		// 	'quantity' => 2,
		// 	'name' => "Orange"
		// );

		// Optional
		//$item_details = array($item1_details, $item2_details);

		// Optional


		$billing_address = array(
			'first_name'    => $member->first_name,
			'last_name'     => $member->last_name,
			'address'       => "Jl KH Dahlan NO 75 Enigma Camp",
			'city'          => "Jakarta",
			'postal_code'   => "16602",
			'phone'         => "081122334455",
			'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
			'first_name'    => $member->first_name,
			'last_name'     => $member->last_name,
			'address'       => "Jl KH Dahlan NO 75 Enigma Camp",
			'city'          => "Jakarta",
			'postal_code'   => "16601",
			'phone'         => "08113366345",
			'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
			'first_name'    => $member->first_name,
			'last_name'     => $member->last_name,
			'email'         => $member->email,
			'phone'         => "081122334455",
			'billing_address'  => $billing_address,
			'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'minute',
			'duration'  => 20
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'));
		$getRowByMember = $this->Transaction->getCartByMember(9)->row();

		// echo 'RESULT <br><pre>';
		// var_dump($result);
		// echo '</pre>';

		// atur nya disin ketika sudah memilih pembayaran menggunakan apa
		// tiap nilai balikan beda-beda ya jadi harus di tentukan pake apa

		// bca, bni dan bri 
		if ($result->payment_type == 'bank_transfer') {
			// cek bank yang ada va_numbernya
			if (@$result->va_numbers) {
				foreach ($result->va_numbers as $vaNum) {
					$bank 			= $vaNum->bank;
					$vaNumber 	= $vaNum->va_number;
					$billerCode =  '';
				}
			} else {
				$bank 			= 'permata';
				$vaNumber		= $result->permata_va_number;
				$billerCode	= '';
			}
		}
		// bank mandiri
		elseif ($result->payment_type == 'echannel') {
			$bank 			= 'mandiri';
			$vaNumber 	= $result->bill_key;
			$billerCode =  $result->biller_code;
		}

		$dataInput = [
			'factur' 							=> $getRowByMember->factur,
			'payment_type'				=> $result->payment_type,
			'bank'								=> $bank,
			'va_number'						=> $vaNumber,
			'biller_code' 				=> $billerCode,   // khusus bank mandiri
			'transaction_status'	=> $result->transaction_status,
			'transaction_time'		=> $result->transaction_time,
			'pdf_url'							=> $result->pdf_url,
			'date_created'				=> time(),
			'date_modified'				=> time()
		];

		$this->Transaction->saveTransactionFromMidtrans($dataInput);
		redirect('orders');
	}
}

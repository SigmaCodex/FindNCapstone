<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	 //show pages
	public function index()
	{
        $this->load->view('index');
    }
	public function viewLogin()
	{
        $this->load->view('login');
    }
	//finders
	public function viewUser_Settings()
	{
		$this->load->view('userprof_Settings');
	}

	public function viewRegister()
	{
        $this->load->view('registerP');
    }
	//added types of booking form (printing/computer)
	public function viewcompbookForm(){
		$this->load->view('computerbform');
	}
	public function payment_exercise(){
		$this->load->view('payment');
	}

	//super admin
	public function addComputershop()
	{
        $this->load->view('superadmin/addcomputershop');
    }
	public function addAdmin()
	{
        $this->load->view('superadmin/addadmin');
    }
	public function listofcomputershop(){
		$this->load->view('superadmin/listofcomputershop');
	}

	//shop admin show pages
	public function admin_dashboard(){
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	public function admin_scanqr(){
		$this->load->view('admin/header');
		$this->load->view('admin/scanqr');
		$this->load->view('admin/footer');
	}
	public function admin_bookings(){
		$this->load->view('admin/header');
		$this->load->view('admin/Bookings');
		$this->load->view('admin/footer');
	}

	public function payment_exercise(){
		$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://g.payx.ph/payment_request',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array(
				'x-public-key' => 'pk_865748980ca7d809750906e8a7db5129',
				'amount' => '1',
				'description' => 'FindBookingService For Gamecity',
				'customername' => 'John Dave Delgado',
				'customermobile' => '09262247240',
				'merchantlogourl' => 'http://localhost:8080/FindNCapstone/assets/images/findn.png',
				'customeremail' => 'johndave@gmail.com',
				// 'redirectsuccessurl' => 'http://localhost:8080/FindNCapstone/gcashsuccess',	
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			echo$response;
		// $this->load->view('payment');
	}

 
}
    
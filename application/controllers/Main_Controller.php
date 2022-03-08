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

 
}
    
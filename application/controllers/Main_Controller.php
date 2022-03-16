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
	public function viewFindNLogin()
	{
        $this->load->view('findnlogin');
    }
	//finders
	public function viewAccountSettings()
	{
		$this->load->view('accountSettings');
	}

	public function viewRegister()
	{
        $this->load->view('registerP');
    }
	public function viewFindnRegister()
	{
        $this->load->view('findnRegister');
    }

	public function viewMap(){
		$this->load->view('viewmap');
	}
	public function viewFinders_HomePage()
	{
		$this->load->view('findersHomePage');
	}
	public function view_ticket(){
		$this->load->view('viewticket');
	}
	
	//added types of booking form (printing/computer)
	public function viewcompbookForm(){
		$this->load->view('computerbform');
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
		
		$this->load->model('MainModel');
		$val['details'] = $this->MainModel->getListOfComputerShops();
		$this->load->view('superadmin/listofcomputershop',$val);
	}

	public function adminList(){
		$this->load->view('superadmin/adminlist');
	}

	//shop admin show pages
	public function admin_dashboard(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/footer');
	}
	public function admin_scanqr(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/scanqr');
		$this->load->view('admin/template/footer');
		$this->load->view('admin/template/qrscannerfooter');
	}
	public function admin_bookings(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/Bookings');
		$this->load->view('admin/template/footer');
	}
	public function shopadmin_computerdetails(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/computershopdetails');
		//$this->load->view('admin/template/footer');
	}
	public function shopadmin_addComputerType(){
		$this->load->view('admin/computertype');
	}
	
	public function payment_exercise(){
		 $this->load->view('payment');
	}

 
}
    
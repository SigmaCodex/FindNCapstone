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
	//super admin show pages
	public function superadmin_dashboard(){
		$this->load->view('superadmin/header');
		$this->load->view('superadmin/dashboard');
		$this->load->view('superadmin/footer');
	}
 
}
    
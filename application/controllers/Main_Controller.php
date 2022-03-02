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
	public function viewRegister()
	{
        $this->load->view('registerP');
    }
	public function addComputer()
	{
        $this->load->view('addcomputer');
    }
	public function addAdmin()
	{
        $this->load->view('addadmin');
    }
	//super admin show pages
	public function admin_dashboard(){
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
 
}
    
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogicalController extends CI_Controller {

    //superAdmin
    public function addComputerShop(){
        $this->load->model('MainModel');
        $this->MainModel->addComputerShop();
    }
    //sample ROUTING with data
    public function sample($num){
        echo $num;
    }
    //FINDERS
    public function registerFinder(){
        $data = array(
            'firstname' =>    $this->input->post('firstname'),
            'lastname'  => 	  $this->input->post('lastname'),
            'username'  => 	  $this->input->post('username'),
            'pnum'      => 	  $this->input->post('pnum'),
            'birthdate' => 	  $this->input->post('birthdate'),
            'email'     => 	  $this->input->post('email'),
            'pass'      => 	  $this->input->post('pass'),
            'conpass'   => 	  $this->input->post('conpass'),
            'gender'    => 	  $this->input->post('gender'),
            'vacstatus' =>    $this->input->post('vacstatus'),
        );
         echo json_encode($data);
    }
    public function getListOfComputerShops(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfComputerShops();
        echo json_encode($result);
    }
    public function selectComputerShop($name,$id){
        $this->load->model('MainModel');
        $result = $this->MainModel->selectComputerShop($name,$id);
        echo json_encode($result);
    }
    // api 
    public function gcashsuccess(){
        $data = array(
            'name'   =>  $this->input->post('success'),
            'hash_id'  => 	  $this->input->post('request_id'),
            );

        echo json_encode($data);
    }
}
    
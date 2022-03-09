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
        echo "hello";
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
    
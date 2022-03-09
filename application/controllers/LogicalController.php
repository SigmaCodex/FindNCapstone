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
            'firstname'   =>  $this->input->post('firstname'),
            'lastname'  => 	  $this->input->post('lastname'),
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
		$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://getpaid.gcash.com/paymentsuccess?hash=8f7515632cfa2346da5bcaac028d58b4',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',

			));

			$response = curl_exec($curl);
		
			curl_close($curl);
			echo$response;
    }
}
    
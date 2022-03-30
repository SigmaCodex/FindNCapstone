<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogicalController extends CI_Controller {

    public function login_user(){
        $this->load->model('MainModel');
        $result = $this->MainModel->login_user();
        if(!$result){
            echo "no-user";
        }else{
           $user_type = $this->session->userdata('user_type');
           echo $user_type;
        }
    }

    public function logout_user(){
        $this->session->sess_destroy();
        // redirect("http://localhost:8080/FindNCapstone/findnlogin");
        // redirect(base_url().'findnlogin',refresh);
        redirect(findnlogin);
    }

    //superAdmin
    public function addComputerShop(){
        $this->load->model('MainModel');
        $this->MainModel->addComputerShop();
    }
    public function registerAdmin(){
        $this->load->model('MainModel');
        $this->MainModel->registerAdmin();
    }
        
    public function getAdminDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->getAdminDetails($id);
    }
    //FINDERS
    public function FindersCompBookingRequest(){
        $this->load->model('MainModel');
        $this->MainModel->FindersCompBookingRequest();
    }

    public function registerFinder(){
        $this->load->model('MainModel');
        $this->MainModel->registerFinder();
    }

    public function generatePrimarykey(){
        $this->load->model('MainModel');
        $result = $this->MainModel->generatePrimarykey();
        echo $result;

    }
    public function updateFinderAccount(){
        $this->load->helper(array('form', 'url')); 
        // $img = $this->input->post('profilepic');
        $config['upload_path']          = './assets/upload/finder';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(! $this->upload->do_upload('imageUpload'))
        {
            echo $this->upload->display_errors();
        }else{
            $data= array(
                'f_name'  => 	  $this->input->post('f_name'),
                'l_name'  =>    $this->input->post('l_name'),
                'b_date'  =>    $this->input->post('b_date'),
                'username'  =>    $this->input->post('username'),
                'b_date'  =>    $this->input->post('b_date'),
                'email'  =>    $this->input->post('email'),
                'p_number'  =>    $this->input->post('p_number'),
                'vac_status'  =>    $this->input->post('vac_status'),
            );
            echo json_encode($data);
        }
    }

    public function getListOfComputerShops(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfComputerShops();
        echo json_encode($result);
    }
    public function getComputerTypeInfo($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getComputerTypeInfo($id);
        echo json_encode($result);
    }
    public function getListOfComputerTypes($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfComputerTypes($id);
        echo json_encode($result);
    }

    public function getListOfAdmins($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfAdmins($id);
        echo json_encode($result);
    }

    public function getShopDetails($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getShopDetails($id);
        // $query2->result_array($result);
        echo json_encode($result);
    }
    public function updateShopDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->updateShopDetails($id);
    }

    public function selectComputerShop($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->selectComputerShop($id);
        echo json_encode($result);
    }
    public function deleteComputerShop($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->deleteComputerShop($id);
        echo json_encode($result);
    }
    public function addRate($shop_id,$user_id){
        $this->load->model('MainModel');
        $this->MainModel->addRate($shop_id,$user_id);
    }
    public function updateRate($shop_id, $user_id, $rate_id){
        $this->load->model('MainModel');
        $this->MainModel->updateRate($shop_id, $user_id, $rate_id);
    }

    //ADMIN
    public function updateComputerDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->updateComputerDetails($id);
    }
      //Computer Type
    public function addComputerType($id){
        $this->load->model('MainModel');
        $this->MainModel->addComputerType($id);
    }
    public function deleteComputerType($id){

        $this->load->model('MainModel');
        $this->MainModel->deleteComputerType($id);
    }
    public function updateComputerType($id){
        $this->load->model('MainModel');
        $this->MainModel->updateComputerType($id);
    }
    public function updateComputerTypeStatus($id){
        $this->load->model('MainModel');
        $this->MainModel->updateComputerTypeStatus($id);
    }
    public function createFinderNotif(){
        $this->load->model('MainModel');
        $this->MainModel->createFinderNotif();
    }
    public function createComputerNotif(){
        $this->load->model('MainModel');
        $this->MainModel->createComputerNotif();
    }

        //Shop Computer Details
    public function uploadshopimages($shop_id){
            $this->load->helper(array('form', 'url')); 

            $config['upload_path']          = './assets/upload/shop';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 5024;
            $config['max_height']           = 5268;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('imageUpload'))
            {
                echo $this->upload->display_errors();
                echo "error";
            }else{

                $this->load->model('MainModel');
                $this->MainModel->uploadshopimages($shop_id);
            
            }
    }

    // api 
    public function GotoGcash(){
        $shop = $this->input->post('shop');
        $servicetype = $this->input->post('s_type');
        $name= $this->input->post('b_name');
        $email = $this->input->post('b_email');
        $contact_num = $this->input->post('b_contactnum');
        $total_amount = $this->input->post('total_amount');
    
     
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
				'amount' =>  $total_amount ,
				'description' => $servicetype."for". $shop,
				'customername' =>  $name,
				'customermobile' => $contact_num ,
				'merchantlogourl' => 'http://localhost:8080/FindNCapstone/assets/images/findnslogan.png',
				'customeremail' => $email,
				// 'redirectsuccessurl' => 'http://localhost:8080/FindNCapstone/gcashsuccess',	
			),
			));

			$response = curl_exec($curl);
		
			curl_close($curl);
            $decoded = json_decode($response, true);
            echo $decoded['data']['checkouturl'];
			// echo$response;
			// var_dump($response);
		
			//  $data = $decoded ['response']['data'][0];
			//  echo $data;
			// echo  $decoded;
			//  var_dump($decoded);
			//redirect($decoded['data']['checkouturl']);
			
			
    }
}
    
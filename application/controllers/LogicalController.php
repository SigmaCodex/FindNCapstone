<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogicalController extends CI_Controller {

 
    public function login_user(){
        $this->load->model('MainModel');
        $result = $this->MainModel->login_user();
        $user_status = $this->session->userdata('status');
        if(!$result){
            echo "no-user";
        }else if($user_status =="disable"){
            echo $user_status;
        }
        else{
           $user_type = $this->session->userdata('user_type');
           echo $user_type;
        }
    }
    public function shopAdmin_login(){
        $user_id_admin = $this->session->userdata('user_id');
        $this->load->model('MainModel');
        $this->MainModel->checkShopAdminAccount($user_id_admin);
        //  echo $this->session->userdata('admin_shop_name'); //return data to ajax
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
    public function updateAdminDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->updateAdminDetails($id);
    }
    public function getAdminDetails($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getAdminDetails($id);
        // $query2->result_array($result);
        echo json_encode($result);
    }
    public function deleteAdmin($id){
        $this->load->model('MainModel');
        $this->MainModel->deleteAdmin($id);
    }
    public function getSuperAdminPassword(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getSuperAdminPassword();
        echo json_encode($result);
    }

    //REPORTS----------------------
    public function getTotalSalesAndBooks(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getTotalSalesAndBooks();
        echo json_encode($result);
    }
    public function getTotalGCashBooks(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getTotalGCashBooks();
        echo json_encode($result);
    }
    public function getMonthlyPaymentTypeBooks(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getMonthlyPaymentTypeBooks();
        echo json_encode($result);
    }
    public function getMonthlySalesSpecifcShop(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getMonthlySalesSpecifcShop();
        echo json_encode($result);
    }
    public function getMonthlyBooksSpecifcShop(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getMonthlyBooksSpecifcShop();
        echo json_encode($result);
    }
    public function getMonthlyData(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getMonthlyData();
        echo json_encode($result);
    }
    public function getListOfComputerShopName(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfComputerShopName();
        echo json_encode($result);
    }
    public function pdf(){
        $this->load->model('MainModel');
        $result = $this->MainModel->pdf();
        echo json_encode($result);
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
    public function checkUsername($username){
        $this->load->model('MainModel');
        $result = $this->MainModel->checkUsername($username);
        echo $result;
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
                $config['max_size']             = 2500;
                $config['max_width']            = 2540;
                $config['max_height']           = 2568;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(! $this->upload->do_upload('imageUpload'))
        {
            //update useraccount without the profileimage   
            $this->load->model('MainModel');
            $this->MainModel->updateFinderAccount("no-image");
        }else{
             //update useraccount with the profileimage
            $this->load->model('MainModel');
            $this->MainModel->updateFinderAccount("with-image");
        }
    }
    //view all finderBooking Transaction
    public function view_finderBookingTransaction($user_id){
        $this->load->model('MainModel');
        $result = $this->MainModel->view_finderBookingTransaction($user_id);
        echo json_encode($result);
    }
    //select FinderBooking Transaction
    public function select_finderBookingTransaction($transaction_id){
        
        $this->load->model('MainModel');
        $result = $this->MainModel->select_finderdetailsBookingTransaction($transaction_id);
        if (empty($result)) {
            echo "no-data";
        }else{
            echo json_encode($result);
         }
    
    }
    //update overthecounter paymenttype and generate qr code
    public function updatePaymentType_overthecounter($transaction_id){
        $this->load->model('MainModel');
        $status = "overthecounter";
        $this->MainModel->updatePaymentType($transaction_id,$status);
        $this->generateFinderQrCode($transaction_id); 
      
    }

    //upload Gcash Payment Details
    public function uploadGcashPaymentDetails($transaction_id){
        $this->load->helper(array('form', 'url')); 

            $config['upload_path']          = './assets/upload/finder/gcash-receipt';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 5024;
            $config['max_height']           = 5268;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('imageUpload'))
            {
               echo "no-image";
            }else{
                $this->load->model('MainModel');
                $payment_type = "gcash";
                $payment_status = "paid";
                $this->MainModel->updatePaymentType($transaction_id,$payment_type);//UpdatePayment Type
                $this->MainModel->addGcashPaymentDetails($transaction_id); //add Data to GcashPayment Details Table
                $this->MainModel->updatePaymentStatus($transaction_id, $payment_status);  //update Payment Status
                $this->generateFinderQrCode($transaction_id);       //generate QR code
            }
    }
    public function select_GcashpaymentDetails($transac_id){
        $this->load->model('MainModel');
        $result = $this->MainModel->select_GcashpaymentDetails($transac_id);
        echo json_encode($result);
    }
    //generate FinderQr Code
    public function generateFinderQrCode($transaction_id){
		$this->load->model('MainModel');
        $result = $this->MainModel->select_finderdetailsBookingTransaction($transaction_id);
        foreach($result as $key => $value){
				$data = $value->transaction_id.",".$value->firstname." ".$value->lastname;
		}
	
		$this->load->library('bb_qrcode');

		$qr_image = 'qrCode-'.date('m-d-y-h-i-s').'.png';
		$params['data'] = $data;
		$params['level'] = 'M';
		$params['size'] = 6;
		$params['savename'] = FCPATH.'assets/QrCodes/'.$qr_image;
		$this->bb_qrcode->generate($params);

        $this->MainModel->FinderQRCode($transaction_id,$qr_image);
		// $details['qr_image'] = $qr_image;
	
    }

    public function disableFinderAccountStatus(){
        $this->load->model('MainModel');
        $this->MainModel->disableFinderAccountStatus();
    }

    public function change_finderpassword(){
        $this->load->model('MainModel');
        $this->MainModel->change_finderpassword();
    }

    public function getListOfComputerShops(){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfComputerShops();
        echo json_encode($result);
    }
    public function selectforUpdateComputerTypeInfo($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->selectforUpdateComputerTypeInfo($id);
        echo json_encode($result);
    }
    public function getComputerTypeInfo($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getComputerTypeInfo($id);
        echo json_encode($result);
    }


    public function getListOfAdmins($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getListOfAdmins($id);
        echo json_encode($result);
    }
    public function getComputerTypeServiceFee($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getComputerTypeServiceFee($id);
        echo json_encode($result);
    }

    public function getShopDetails($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getShopDetailsrow($id);
        // $query2->result_array($result);
        echo json_encode($result);
    }
    public function updateShopDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->updateShopDetails($id);
    }

    public function updateSuperAdminPassword($id){
        $this->load->model('MainModel');
        $this->MainModel->updateSuperAdminPassword($id);
    }

    public function updateServiceFee($comptype_id){
        $this->load->model('MainModel');
        $this->MainModel->updateServiceFee($comptype_id);
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
    public function updatePaymentStatus($transaction_id,$status){
        $this->load->model('MainModel');
        $this->MainModel->updatePaymentStatus($transaction_id,$status);
     
    }
    public function updateTranscationStatus($transaction_id,$status){
        $this->load->model('MainModel');
        $this->MainModel->updateTranscationStatus($transaction_id,$status);
    }
    public function updateArrivalStatus($transaction_id,$status){
        $this->load->model('MainModel');
        $this->MainModel->updateArrivalStatus($transaction_id,$status);
    }
    //RATE-RATINGS--------------------------------
    public function addRate($shop_id){
        $this->load->model('MainModel');
        $this->MainModel->addRate($shop_id);
    }
    public function updateRate($shop_id){
        $this->load->model('MainModel');
        $this->MainModel->updateRate($shop_id);
    }
    public function viewRate($shop_id){
        $this->load->model('MainModel');
        $result = $this->MainModel->viewRate($shop_id);
        echo json_encode($result);
    }

    public function getallPendingRequest($shop_id){
        $this->load->model('MainModel');
        $this->MainModel->getallPendingRequest($shop_id);
    }
    public function getallAcceptedRequest($shop_id){
        $this->load->model('MainModel');
        $this->MainModel->getallAcceptedRequest($shop_id);
    }
    public function getallCancelledRequest($shop_id){
        $this->load->model('MainModel');
        $this->MainModel->getallCancelledRequest($shop_id);
    }
    public function viewTransaction($transac_id){
        $this->load->model('MainModel');
        $result = $this->MainModel->viewTransaction($transac_id);
        echo json_encode($result);
    }
    public function updateAcceptBookingTransacStatus($transac_id,$to_user_id){
        $status = 'accepted';
        $this->load->model('MainModel');
         $this->MainModel->updateBookingTransacStatus($transac_id,$status);
        //Create Accepted Notification
        $message = "accepted";
        $title   = "Success";
        $this->MainModel->addFinderNotification($transac_id,$to_user_id,$message,$title);
    
    }
    public function updateDeclineBookingTransacStatus($transac_id,$to_user_id){
        $status = 'declined';
        $this->load->model('MainModel');
        $this->MainModel->updateBookingTransacStatus($transac_id,$status);
        //Create Decline Notification
        $message = "Declined";
        $title   = "Fail";
        $this->MainModel->addFinderNotification($transac_id,$to_user_id,$message,$title);
    }
    public function viewallShopAdminBookingRequests($shop_id){
        $this->load->model('MainModel');
        $this->MainModel->viewallShopAdminBookingRequests($shop_id);
    }
    public function CountBookingRequest(){
        $this->load->model('MainModel');
        $num = $this->MainModel->CountBookingRequest();
        echo $num;
    }
    //ADMIN

    public function getUserDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->getUserDetails($id);
    }
    public function addshopPosts($id){
        $this->load->model('MainModel');
        $this->MainModel->addshopPosts($id);
    }
    public function deleteshopPosts($id){
        $this->load->model('MainModel');
        $this->MainModel->deleteshopPosts($id);
    }
    public function selectforUpdatePostDetails($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->selectforUpdatePostDetails($id);
        echo json_encode($result);
    }
    public function getallPostComments($shop_id){
        $this->load->model('MainModel');
        $result = $this->MainModel->getallPostComments($shop_id);

    }
    public function addComments($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->addComments($id);
    }
    public function deleteComments($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->deleteComments($id);
    }
    public function selectforUpdateComment($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->selectforUpdateComment($id);
        echo json_encode($result);
    }
    public function updateComments($id){
        $this->load->model('MainModel');
        $result = $this->MainModel->updateComments($id);
    }
    public function updateshopPosts($id){
        $this->load->model('MainModel');
        $this->MainModel->updateshopPosts($id);
    }
    public function updateComputerDetails($id){
        $this->load->model('MainModel');
        $this->MainModel->updateComputerDetails($id);
    }
      //Computer Type
    public function addComputerType($id){
        $this->load->helper(array('form', 'url')); 
        
            $config['upload_path']          = './assets/upload/shop/computertype';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 5024;
            $config['max_height']           = 5268;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('imageUpload'))
            {
                $this->load->model('MainModel');
                $this->MainModel->addComputerType($id, "no-image");
            }else{
                
                $this->load->model('MainModel');
                $this->MainModel->addComputerType($id, "with-image");
            }
    }
    public function deleteComputerType($id){

        $this->load->model('MainModel');
        $this->MainModel->deleteComputerType($id);
    }
    public function updateComputerType($id){
        $this->load->helper(array('form', 'url')); 

            $config['upload_path']          = './assets/upload/shop/computertype';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 5024;
            $config['max_height']           = 5268;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('imageUpload'))
            {
                $this->load->model('MainModel');
                $this->MainModel->updateComputerType($id, "no-image");
            }else{
                
                $this->load->model('MainModel');
                $this->MainModel->updateComputerType($id, "with-image");
            
            }
    }
    public function updateComputerTypeStatus($id){
        $this->load->model('MainModel');
        $this->MainModel->updateComputerTypeStatus($id);
    }
    public function createFinderNotif(){
        $this->load->model('MainModel');
        $this->MainModel->createFinderNotif();
    }
    //delete selected notification
    public function deleteFinderNotification($notif_id){
        $this->load->model('MainModel');
        $this->MainModel->deleteFinderNotification($notif_id);
    }
    //update notification statys to seen
    public function updateNotificationStatus($notif_id){
        $this->load->model('MainModel');
        $this->MainModel->updateNotificationStatus($notif_id);
    }
    //count of notification 
    public function Countfindernotification(){
        $this->load->model('MainModel');
        $num = $this->MainModel->Countfindernotification();
        echo $num;
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
    public function removeshopimage($image_id){
        $this->load->model('MainModel');
        $this->MainModel->removeshopimage($image_id);
       
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
				'merchantlogourl' => 'http://localhost:8080/FindNCapstone/assets/images/Logo.svg',
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

    //generate Verification Code
    public function generateVeificationCode(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < 6; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    //send verification code to email
    public function sendVCodeToEmail(){

        $verificationCode = $this->generateVeificationCode();
        $this->session->set_userdata('v_code',$verificationCode);

        $email = $this->input->post('email');
        $messageText = "
        <center><img src='assets/images/Logo1.png' style='width: 100px;'></center>
        <br>
        <center><h1>This is your Code: <b>".$verificationCode."</b></h1></center>
        
        ";

        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();

        // $mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'findn.cebu.ph@gmail.com';                 // SMTP username
        $mail->Password = 'RuntimeNimble12345678';                           // SMTP password
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = 'findn.cebu.ph@gmail.com';
        $mail->FromName = 'FindN Admins';
        $mail->addAddress($email);               // Name is optional
        

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = ("Finder Verification Code");
        $mail->Body = $messageText;
        $mail->addEmbeddedImage('assets/images/Logo1.png', 'FindNlogo');

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }

    }

    //check verification code
    public function checkVerificationCode(){
        $this->load->model('MainModel');
        $this->MainModel->update_To_FinderAccountVerified();   
    }
}
    
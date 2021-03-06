<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class MainModel extends CI_Model{

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
    }

    // user login 
    public function login_user(){
      $user = $this->input->post('username');
      $pass = $this->input->post('password');

      $this->db->where('username',$user);
    //   $this->db->where('password',$pass);
      $query = $this->db->get('user');
      if(!empty($query->result_array()))
      {
        $row = $query->row();
        if($row->password == md5($pass)){
            
            $datasession  = array(
                'user_id' => $row->user_id,
                'username'  => $row->username,
                'user_type' => $row->user_type,
                'status' => $row->status,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
            );
            $this->session->set_userdata($datasession);
        

            //if usertype is finder get the profile pic
            if($row->user_type == "finder"){
            $this->db->select("profile_pic");
            $this->db->where('user_id',$row->user_id);
            $query2 = $this->db->get('finders');
            $query2->result_array();
            $row2 = $query2->row();
            $this->session->set_userdata('profile_pic',$row2->profile_pic);
            }
            return true;
        }else{
            return false;
        }

      }else{
        return false;
      }

    }
    //user account update
    public function updateFinderAccount($status){
        // echo $status;
        $user_id  = $this->session->userdata('user_id');
        if($status == "no-image"){

            $findersdata = array(
                'firstname'  => 	  $this->input->post('f_name'),
                'lastname'  =>    $this->input->post('l_name'),
                'gender'  =>    $this->input->post('gender'),
                'birthdate'  =>    $this->input->post('b_date'),
                'email'  =>    $this->input->post('email'),
                'phone_num'  =>    $this->input->post('p_number'),
                'vac_status'  =>    $this->input->post('vac_status'),
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('finders',$findersdata);

        }else if($status == "with-image"){
            $image_data = $this->upload->data();
            $findersdata = array(
                'profile_pic' =>     $image_data['file_name'], 
                'firstname'  => 	  $this->input->post('f_name'),
                'lastname'  =>    $this->input->post('l_name'),
                'gender'  =>    $this->input->post('gender'),
                'birthdate'  =>    $this->input->post('b_date'),
                'email'  =>    $this->input->post('email'),
                'phone_num'  =>    $this->input->post('p_number'),
                'vac_status'  =>    $this->input->post('vac_status'),
            );

            $this->db->where('user_id',$user_id);
            $this->db->update('finders',$findersdata);
            $this->session->set_userdata('profile_pic',$image_data['file_name']);
        }
    }
    public function updatefinderInfo(){
        $user_id  = $this->session->userdata('user_id');
        $findersdata = array(
            'firstname'  => 	  $this->input->post('firstname'),
            'lastname'  =>    $this->input->post('lastname'),
            'gender'  =>    $this->input->post('gen'),
            'birthdate'  =>    $this->input->post('b_date'),
            'email'  =>    $this->input->post('email_add'),
            'phone_num'  =>    $this->input->post('p_number'),
        );
        $this->db->where('user_id',$user_id);
        $this->db->update('finders',$findersdata);
    }
    public function disableFinderAccountStatus(){
        $user_id = $this->session->userdata('user_id');
        $data = array(
            'status'  =>    "disable",
        );
        $this->db->where('user_id',$user_id);
        $this->db->update('user',$data);
        $this->session->sess_destroy();
    }
    public function change_password(){

        $newpassword = $this->input->post('newpassword');
        $current_pass = $this->input->post('currentpassword');
        $user_id = $this->session->userdata('user_id');

    


        $this->db->where('user_id',$user_id);
        // $this->db->where('password',$current_pass);
        $query = $this->db->get('user');
        if(!empty($query->result_array()))
        {
            $row = $query->row();
            if($row->password == md5($current_pass)){

                $enyc_newPassword = md5($newpassword);
                $data = array(
                    'password'  =>  $enyc_newPassword,
                );
                $this->db->where('user_id',$user_id);
                $this->db->update('user',$data);               

            }else{
                echo "invalid";
            }

        }else{
          echo "invalid";
        }

    }

    public function update_To_FinderAccountVerified(){
        $user_id = $this->session->userdata('user_id');
        $code  = $this->session->userdata('v_code');
        $user_code =  $this->input->post('input_code');
        if($user_code == $code){
            echo "Match";
            $data = array(
                'status'  =>    "verified",
            );

            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data);
            $this->session->set_userdata('status',"verified");
        }else{
            echo "NotMatch";
        }
 
    }


    //superAdmin
    public function addComputerShop(){

        $data = array(
            'shop_name'   =>  $this->input->post('shop_name'),
            'address'  => 	  $this->input->post('address'),
            'contact_number'  => 	  $this->input->post('number'),
            'email_address'  => 	  $this->input->post('email_add'),
            'coordinates'  => 	   $this->input->post('coor'),
            'Shop_Status'   => "Open",
            );

        $this->db->insert('computershop',$data);
        // echo json_encode($data);
    }

    public function getAdminDetails($id){
		$this->db->select('*');
        $this->db->from('compmanager');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }

    public function getShopDetailsrow($id){
		$this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }
    public function getShopDetails($id){
        $this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getSuperAdminPassword(){
        $user_id_fk = $this->session->userdata('user_id');

        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('user_id',$user_id_fk);
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }
    public function updateSuperAdminPassword($repeat){
        $user_id_fk = $this->session->userdata('user_id');

		$datafinder = array(
            'password'         => 	 $this->input->post('password')
        );
        $this->db->where('user_id',$user_id_fk);
        $this->db->update('user',$datafinder);
        echo json_encode($datafinder);
    }
    //getcomputertyepe service fee
    public function getComputerTypeServiceFee($id){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('shop_id_fk',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getListOfAdmins($id){
		$this->db->select('*');
        $this->db->from('compmanager');
        $this->db->where('shop_id_fk',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function deleteComputerShop($id){
        $datafinder = array(
            'shop_status' => 'Inactive',
        );
        $this->db->where('shop_id',$id);
        $this->db->update('computershop',$datafinder);
    }
    public function updateShopDetails($id){
        $datafinder = array(
            'shop_name'         => 	 $this->input->post('shop_name'),
            'coordinates'       => 	 $this->input->post('coor'),
            'address'           => 	 $this->input->post('address'),
            'contact_number'    => 	 $this->input->post('number'),
            'email_address'     => 	 $this->input->post('email_add')
        );
        $this->db->where('shop_id',$id);
        $this->db->update('computershop',$datafinder);
        echo json_encode($datafinder);
    }
    public function updateShopStatus($shopid,$status){
        $data = array(
            'Shop_Status'     => 	 $status
        );
        $this->db->where('shop_id',$shopid);
        $this->db->update('computershop',$data);
    }

    public function getListOfComputerShops(){
        $this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('Shop_Status != "Inactive"');
        $query = $this->db->get();
        return $query->result();
    }
    //finderhomepage
    public function getAllComputershop(){

        //$this->db->select("computershop.*,COUNT(computer_ratings.rating_id) as  countRating, FORMAT((SUM(computer_ratings.computer_rate) / COUNT(computer_ratings.rating_id)),1) as avgRatings");
        $this->db->select('computershop.*,FORMAT((SUM(computer_ratings.computer_rate) / COUNT(computer_ratings.rating_id)),1) as avgRatings,MIN(computer_type.rate) as minRate,MAX(computer_type.rate) as maxRate');
        $this->db->from('computershop');
        $this->db->join('computer_ratings','computershop.shop_id = computer_ratings.shop_id');
        $this->db->join('computer_type','computershop.shop_id = computer_type.shop_id_fk');
        $this->db->group_by('computershop.shop_id');
        $this->db->where('Shop_Status != "Inactive"');
        $query = $this->db->get();
        return $query->result();
    }

    public function selectComputerShop($id){
		$this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function registerAdmin(){
        $Primarycode = 0;
        $Primarycode = $this->generatePrimarykey();
        //check if the primary key is taken;
        $this->db->where('user_id',$Primarycode);
        $query = $this->db->get('user');
        if(!empty($query->result_array()))
		{ 
            $this->registerAdmin();
		}
		else
		{
            $enc_password = md5($this->input->post('pass'));
            $datauser = array(
                'user_id'   =>    $Primarycode,
                'username'  => 	  $this->input->post('username'),
                'password'  =>    $enc_password,
                'user_type' =>    "Admin",
                'status'    =>    "Active"
            );
                $this->db->insert('user',$datauser);

            // $this->db->select('user_id');
            // $this->db->where('user_id',$Primarycode);
            // $query2 = $this->db->get('user');
            // $resultquery = $query2->row_array();
            
            $datafinder = array(
                'user_id'         =>     $Primarycode,
                'shop_id_fk'      =>     $this->input->post('shop_id'),
                'lastname'        => 	 $this->input->post('lastname'),
                'firstname'       =>     $this->input->post('firstname'),
                'birthdate'       => 	 $this->input->post('birthdate'),
                'gender'          => 	 $this->input->post('gender'),
                'email'           =>     $this->input->post('email'),
                'contactaddress'  =>     $this->input->post('pnum'),
            );
                $this->db->insert('compmanager',$datafinder);

		}
    }
    public function updateAdminDetails($user_id){
        $data = array(
            'firstname'          => 	 $this->input->post('firstname'),
            'lastname'           => 	 $this->input->post('lastname'),
            'gender'             => 	 $this->input->post('gender'),
            'birthdate'          => 	 $this->input->post('birthdate'),
            'email'              => 	 $this->input->post('email'),
            'contactaddress'     => 	 $this->input->post('contactaddress'),

        );
        $this->db->where('user_id',$user_id);
        $this->db->update('compmanager',$data);
    }
    public function updateServiceFee($computer_type_id){
        $data = array(
            'service_fee'          => 	 $this->input->post('service_fee'),
        );
        $this->db->where('Ctype_id',$computer_type_id);
        $this->db->update('computer_type',$data);
    }
    public function deleteAdmin($user_id){
        // $this->db->where('user_id',$user_id);
        // $this->db->delete('user');

        $this->db->where('user_id',$user_id);
        $this->db->delete('compmanager');
    }
    
    //REPORTS ----------------------------------
    public function getTotalSalesAndBooks(){
        $this->db->select('transaction.service_fee,comp_booking.num_ticket, transaction.payment_type');
        $this->db->select_sum('(transaction.service_fee)', 'totalSales');
        $this->db->select_sum('comp_booking.num_ticket', 'totalBooks');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'success');
        $this->db->where('payment_status', 'paid');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }

    public function getTotalGCashBooks(){
        $this->db->select('transaction.payment_type, transaction.date_issued,comp_booking.num_ticket');
        $this->db->select_sum('comp_booking.num_ticket', 'GcashBooks');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'success');
        $this->db->where('payment_status', 'paid');
        $this->db->where('payment_type', 'gcash');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }
    public function getTotalOTCBooks(){
        $this->db->select('transaction.payment_type, transaction.date_issued,comp_booking.num_ticket');
        $this->db->select_sum('comp_booking.num_ticket', 'OTCbooks');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'success');
        $this->db->where('payment_status', 'paid');
        $this->db->where('payment_type', 'overthecounter');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }

    public function getMonthlyPaymentTypeBooks(){
        $this->db->select('transaction.payment_type,transaction.service_fee, transaction.date_issued,comp_booking.num_ticket');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'success');
        $this->db->where('payment_status', 'paid');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }

    public function getMonthlyData(){
        $this->db->select('transaction.date_issued,transaction.service_fee,computershop.shop_name,comp_booking.num_ticket,transaction.payment_type');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk',);
        $this->db->where('transaction_status', 'success');
        $this->db->where('payment_status', 'paid');
        // $this->db->where('shop_id', '7');
        $this->db->order_by('transaction.date_issued', 'ASC');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }

    public function getMonthlySalesSpecifcShop(){
        $select =   array(
            'transaction.service_fee',
            'computershop.shop_name', 
        );  
        $this->db->select($select);
        $this->db->select_sum('transaction.service_fee', 'sumofservicefee');
        $this->db->select_sum('CASE WHEN transaction.payment_type IN ("gcash") THEN 1 ELSE 0 END', 'gcash');
        $this->db->select_sum('CASE WHEN transaction.payment_type IN ("overthecounter") THEN 1 ELSE 0 END', 'overthecounter');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk',);
        $this->db->where('transaction_status', 'success');
        $this->db->where('payment_status', 'paid');
        $this->db->group_by('computershop.shop_name');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }


    //finders
    public function registerFinder(){
        $Primarycode = 0;
        $Primarycode = $this->generatePrimarykey();
        //check if the primary key is taken;
        $this->db->where('user_id',$Primarycode);
        $query = $this->db->get('user');

        // $enc_password = password_hash($this->input->post('conpass'), PASSWORD_DEFAULT);
        $enc_password = md5($this->input->post('conpass'));

        if(!empty($query->result_array()))
		{ 
            $this->registerFinder();
		}
		else
		{
            $datauser = array(
                'user_id'   =>    $Primarycode,
                'username'  => 	  $this->input->post('username'),
                'password'  =>    $enc_password,
                'user_type' =>    "finder",
                'status'    =>    "Active"
            );
                $this->db->insert('user',$datauser);

            // $this->db->select('user_id');
            // $this->db->where('user_id',$Primarycode);
            // $query2 = $this->db->get('user');
            // $resultquery = $query2->row_array();
            
            $datafinder = array(
                'user_id'    =>      $Primarycode,
                'lastname'   => 	 $this->input->post('lastname'),
                'firstname'  =>      $this->input->post('firstname'),
                'birthdate'  => 	 $this->input->post('birthdate'),
                'gender'     => 	 $this->input->post('gender'),
                'email'      =>      $this->input->post('email'),
                'phone_num'  =>      $this->input->post('pnum'),
                'vac_status' =>      $this->input->post('vacstatus')
            );
                $this->db->insert('finders',$datafinder);

		}
    }
    public function checkUsername($username){
        $this->db->select('username');
        $this->db->from('user');
        $this->db->where('username',$username);
        $query = $this->db->get();
        if(!empty($query->result_array())){
            return "true";
        }else{
            return "false";
        }
    }

    public function generatePrimarykey(){
        $first = date('dy');
        $second = rand (1, 100);
        $third = rand (1, 10);
        return $first."".$second."".$third;
    }

    public function generatePrimarykeyForTransaction($shop_id){
        $first  = date('dm');
        $second = $shop_id;
        $third  = rand (1, 100);
        return $first."".$second."".$third."";
    }
    //Finder Submit Booking Request
    public function FindersCompBookingRequest(){

        $transaction_id = $this->generatePrimarykeyForTransaction($this->input->post('s_id'));
        $user_id_fk = $this->session->userdata('user_id');
        $date_issued = date('m/d/y');

        $service_fee = $this->input->post('service_fee') * $this->input->post('num_person');
        $transaction = array(
            'transaction_id'    =>  $transaction_id,
            'user_id_fk'        =>  $user_id_fk,
            'shop_id_fk'           =>  $this->input->post('s_id'),
            'servicetype'       =>  "ComputerBooking",
            'arrival_date'      => 	$this->input->post('arrival_date'),
            'arrival_time'      => 	$this->input->post('arrival_time'),
            'instruction'       => 	$this->input->post('addtional_message'),
            'date_issued'              => 	$date_issued,
            'transaction_status'       => 	"pending",
            'service_fee'              => 	$service_fee,
            'payment_status	'          => 	"unpaid",
            'arrival_status	'          => 	"waiting",
            'payment_type'             => 	"not_selected",
            'qr_code'                  => 	"not_issued",
            );

            
            $comp_booking = array(
                'transaction_id'    =>  $transaction_id,
                'comp_type_id'     =>  $this->input->post('comp_type'),
                'num_ticket'         => 	$this->input->post('num_person'),
            );
            
            $finderNotification = array(
                'to_user_id'         => $user_id_fk,
                'transaction_id'     =>  $transaction_id,
                'status'         => 	"unseen",
                'noti_title'     =>     "Pending",
                'noti_body'      => 	"Booking Request To be accepted by the admin",
                'noti_created'   => 	$date_issued,

            );

            $shopNotification = array(
                'transaction_id'     =>  $transaction_id,
                'status'         => 	"unseen",
                'noti_body'      => 	"Request",
                'noti_created'   => 	$date_issued,
            );

             $this->db->insert('transaction',$transaction);
             $this->db->insert('comp_booking', $comp_booking);
             $this->db->insert('finder_notification', $finderNotification);
             $this->db->insert('compshop_notification',$shopNotification);
             echo $transaction_id; //return generated id to ajax
    }

    public function FinderPrintBookingRequest(){
        $transaction_id = $this->generatePrimarykeyForTransaction($this->input->post('s_id'));
        $user_id_fk = $this->session->userdata('user_id');
        $date_issued = date('m/d/y');

        $transaction = array(
            'transaction_id'    =>  $transaction_id,
            'user_id_fk'        =>  $user_id_fk,
            'shop_id_fk'           =>  $this->input->post('s_id'),
            'servicetype'       =>  "PrintingBooking",
            'arrival_date'      => 	$this->input->post('arrival_date'),
            'arrival_time'      => 	$this->input->post('arrival_time'),
            'instruction'       => 	$this->input->post('addtional_message'),
            'date_issued'              => 	$date_issued,
            'transaction_status'       => 	"pending",
            'service_fee'              => 	"0",
            'payment_status	'          => 	"unpaid",
            'arrival_status	'          => 	"waiting",
            'payment_type'             => 	"not_selected",
            'qr_code'                  => 	"not_issued",
            );
       

        $image_data = $this->upload->data();
        $printing_info = array(
            'transaction_id'    =>  $transaction_id,
            'file'        =>   $image_data['file_name'],
            'orientation'           =>  $this->input->post('page_orientation'),
            'size'       =>  $this->input->post('page_size'),
            'number_of_copies'      => 	$this->input->post('num_copies'),
            'printing_type'      => 	$this->input->post('printing_type'),
            );

            $this->db->insert('transaction',$transaction);
            $this->db->insert('printing', $printing_info);
    }

    public function CancelBooking($transaction_id){
        //delete permanently pending booking request
        $this->db->where("transaction_id",$transaction_id);
		$this->db->delete("transaction");

    }

    // finder select all Computerbookingtransactions
    public function view_finderBookingTransaction($user_id){
        $this->db->select('transaction.*,comp_booking.*,computershop.shop_name,computer_type.name,computer_type.rate');
        $this->db->from('transaction');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.user_id_fk',$user_id);
        $this->db->order_by("transaction.arrival_date", "desc");
      
        $query = $this->db->get();
        return $query->result();
        // $query = $this->db->get();
        // $resultquery = $query->row_array();
        // return $resultquery;
    }
    // finder select ComputerBookingTransaction
    public function select_finderBookingTransaction($transaction_id){
        $this->db->select('computershop.shop_name,computershop.shop_id,transaction.*,comp_booking.*,computer_type.name,computer_type.rate');
        $this->db->from('transaction');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.transaction_id',$transaction_id);
        $query = $this->db->get();
        return $query->result();
    }
    //finder select ComputerBookingTransaction and Finder Details
    public function select_finderdetailsBookingTransaction($transaction_id){
        $this->db->select('computer_type.name,computershop.shop_name,transaction.*,comp_booking.num_ticket,finders.email,finders.phone_num,finders.gender,finders.firstname,finders.lastname,finders.vac_status');
        $this->db->from('transaction');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'finders.user_id = user.user_id','left');
        $this->db->where('transaction.transaction_id',$transaction_id);
        $query = $this->db->get();
        return $query->result();
    }
    //findeer select Bookingtransaction for admiQR Scanner
    public function select_qrScannerdetailsBookingTransaction($transaction_id,$shop_id){
        $this->db->select('computer_type.name,computershop.shop_name,transaction.*,comp_booking.num_ticket,finders.email,finders.phone_num,finders.gender,finders.firstname,finders.lastname,finders.vac_status');
        $this->db->from('transaction');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'finders.user_id = user.user_id','left');
        $this->db->where('transaction.transaction_id',$transaction_id);
        $this->db->where('transaction.shop_id_fk',$shop_id);
        $query = $this->db->get();
        return $query->result();
    }
    //update Payment Type
    public function updatePaymentType($transaction_id,$payment_type){
        $data = array(
            'payment_type'     => 	 $payment_type,
        );
        $this->db->where('transaction_id',$transaction_id);
        $this->db->update('transaction',$data);
    }
    //updatePaymentStatus
    public function updatePaymentStatus($transaction_id,$payment_status){
        $data = array(
            'payment_status'     => 	 $payment_status,
        );
        $this->db->where('transaction_id',$transaction_id);
        $this->db->update('transaction',$data);
    }
    
    public function updateTranscationStatus($transaction_id,$transaction_status){
        $data = array(
            'transaction_status'     => 	 $transaction_status,
        );
        $this->db->where('transaction_id',$transaction_id);
        $this->db->update('transaction',$data);
    }
    public function updateArrivalStatus($transaction_id,$arrival_status){
        $data = array(
            'arrival_status'     => 	 $arrival_status,
        );
        $this->db->where('transaction_id',$transaction_id);
        $this->db->update('transaction',$data);
    }

    //add GcashPaymentDetails
    public function addGcashPaymentDetails($transaction_id){
        $date_created = date('m/d/y');
        $image_data = $this->upload->data();
        $data = array(
            'transaction_id'    => 	$transaction_id,
            'reference_num'     => 	$this->input->post('reference_number'),
            'payment_date'      =>  $date_created,
            'receipt_image'     =>  $image_data['file_name']
        );

        $user_id = $this->session->userdata('user_id');
        $finderNotification = array(
            'to_user_id'         => $user_id,
            'transaction_id'     =>  $transaction_id,
            'status'         => 	"unseen",
            'noti_title'     =>     "Booking_Successful",
            'noti_body'      => 	"Sucess",
            'noti_created'   => 	$date_created,

        );

        $shopNotification = array(
            'transaction_id'     =>  $transaction_id,
            'status'         => 	"unseen",
            'noti_body'      => 	"Payment Success",
            'noti_created'   => 	$date_created,
        );
        
         $this->db->insert('gcash_payment_details',$data);
         $this->db->insert('finder_notification', $finderNotification);
         $this->db->insert('compshop_notification',  $shopNotification);
    }
    //select GcashPaymentDetails
    public function select_GcashpaymentDetails($transaction_id){
        $this->db->select('*');
        $this->db->from('gcash_payment_details');
        $this->db->where('transaction_id',$transaction_id);
        $query = $this->db->get();
        return $query->result();
    }
    //add FinderQRCode
    public function FinderQRCode($transaction_id,$qr_code){
        $data = array(
            'qr_code'    => 	$qr_code,
        );
        $this->db->where('transaction_id',$transaction_id);
        $this->db->update('transaction',$data);
    }

    public function getCshopDetails($id){
        $this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
    }
    //viewFinderNotification View ALl FinderNotification
    public function viewFinderNotification($finder_id){
        $this->db->select('finder_notification.*,computershop.shop_name,computershop.shop_img_icon');
        $this->db->from('finder_notification');
        $this->db->join('transaction', 'transaction.transaction_id = finder_notification.transaction_id');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk','left');
        $this->db->where('finder_notification.to_user_id',$finder_id);
        $this->db->order_by("finder_notification.noti_created", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    //Delete Notification
    public function deleteFinderNotification($noti_id){
        $this->db->where('finder_notif_id',$noti_id);
        $this->db->delete('finder_notification');
    }
    //update Notification To seen
    public function updateNotificationStatus($noti_id){
        $data= array(
            'status'     => 	 "seen",
        );
        $this->db->where('finder_notif_id',$noti_id);
        $this->db->update('finder_notification',$data);
    }
    public function Countfindernotification(){
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->select('*')->from('finder_notification')->where('to_user_id ',$user_id)->where('status',"unseen")->get();
		$row = $query->num_rows();
		return $row;
    }
    //create notification
    public function addFinderNotification($trancation_id,$to_user_id,$message,$title){
        $date_issued = date('m/d/y');

        $finderNotification = array(
            'to_user_id'         => $to_user_id,
            'transaction_id'     => $trancation_id,
            'status'         => 	"unseen",
            'noti_title'     =>     $title,
            'noti_body'      => 	$message,
            'noti_created'   => 	$date_issued,
        );  

        $this->db->insert('finder_notification', $finderNotification);

    }
    
     public function getListOfComputerTypes($id){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('shop_id_fk',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function selectforUpdateComputerTypeInfo($id){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('Ctype_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function listofPosts($id){
        $this->db->select('*');
        $this->db->from('post_events');
        $this->db->where('shop_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function viewPosts($id){
        $this->db->select('*');
        $this->db->from('post_events');
        $this->db->where('post_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getallPostComments($id){
        $this->db->select('user.username, user.user_type, comments.*');
        $this->db->from('comments');
        $this->db->join('user', 'user.user_id = comments.user_id');
        // $this->db->join('finders', 'finders.user_id = user.user_id', 'left');
        $this->db->where('post_id',$id);
        $query = $this->db->get();
        return $query->result();
        //echo json_encode($query->result());     
    }
    public function selectforUpdatePostDetails($id){
        $this->db->select('*');
        $this->db->from('post_events');
        $this->db->where('post_id',$id);
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }
    public function selectforUpdateComment($id){
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where('comment_id',$id);
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }

    public function getComputerTypeInfo($id){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('Ctype_id',$id);
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }
 
    public function addRate($shop_id){
        $user_id_fk = $this->session->userdata('user_id');
        // $Primarycode = $this->generatePrimarykey();
        $date_issued = date('m/d/Y');

        $datafinder = array(
            'shop_id'           => 	$shop_id,
            'user_id'           => 	$user_id_fk,
            'computer_rate'     => 	$this->input->post('score'), 
            'review'            => 	$this->input->post('rate_review'),
            'date'              =>  $date_issued,
        );
        $this->db->insert('computer_ratings',$datafinder);
        echo json_encode($datafinder);

    }
    public function updateRate($shop_id){
        $user_id_fk = $this->session->userdata('user_id');

        $datafinder = array(
            'computer_rate'     => 	 $this->input->post('score'),
        );
        $this->db->where('shop_id',$shop_id);
        $this->db->where('user_id',$user_id_fk);
        $this->db->update('computer_ratings',$datafinder);
        echo json_encode($datafinder);
    }

    public function viewRate($shop_id){
        $user_id_fk = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('computer_ratings');
        $this->db->where('shop_id',$shop_id);
        $this->db->where('user_id',$user_id_fk);
        $query = $this->db->get();
        return $query->result();
    } 
    
    public function selectFinderDetails($user_id){
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('finders');
        return $query->result();
    }

    //admin

    public function checkShopAdminAccount($id){
        $this->db->select('compmanager.*,computershop.shop_name');
        $this->db->from('compmanager');
        $this->db->join('computershop', 'computershop.shop_id = compmanager.shop_id_fk');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        if(!empty($query->result_array())){
            $row = $query->row();
            $this->session->set_userdata('admin_shop_id', $row->shop_id_fk);
            $this->session->set_userdata('admin_shop_name', $row->shop_name);
            $this->session->set_userdata('admin_name', $row->firstname." ".$row->lastname);
        }
    }
    // ShopAdmin Booking Request Management
    // arrival time, computer type name, additonal description, num of ticket 
    // public function getallPendingRequest($shop_id){
        
    //     $this->db->select('user.username,finders.profile_pic,finders.firstname,finders.lastname,transaction.*,comp_booking.num_ticket,computer_type.name');
    //     $this->db->from('transaction');
    //     $this->db->join('user', 'user.user_id = transaction.user_id_fk');
    //     $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
    //     $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
    //     $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
    //     $this->db->where('transaction.shop_id_fk', $shop_id);
    //     $this->db->where('transaction_status', 'pending');
    //     $this->db->order_by('transaction.date_issued', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    //     //echo json_encode($query->result());
    // }
    public function getallPendingRequest(){
        $shop_id = $this->session->userdata('admin_shop_id');
        $this->db->select('user.username,finders.profile_pic,finders.firstname,finders.lastname,transaction.*,comp_booking.num_ticket,computer_type.name');
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.shop_id_fk', $shop_id);
        $this->db->where('transaction_status', 'pending');
        $this->db->order_by('transaction.date_issued', 'DESC');
        $query = $this->db->get();
        return $query->result();
        //echo json_encode($query->result());
    }
    public function getallAcceptedRequest($shop_id){
        $this->db->select('finders.user_id,finders.firstname,finders.lastname,transaction.*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.shop_id_fk', $shop_id);
        $this->db->where('transaction_status', 'accepted');
        $this->db->where('arrival_status', 'waiting');
        $this->db->order_by('transaction.date_issued', 'DESC');
        $query = $this->db->get();
        return $query->result();
        // echo json_encode($query->result());
    }
    public function getallCancelledRequest($shop_id){
        $this->db->select('transaction.arrival_time,transaction.arrival_date,transaction.instruction,comp_booking.num_ticket,computer_type.name');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction_status', 'cancelled'); 
        $query = $this->db->get();
        // return $query->result();
        echo json_encode($query->result());
    }
    public function viewTransaction($transac_id){
        $this->db->select('finders.firstname,finders.lastname,finders.profile_pic,finders.email,finders.phone_num,finders.vac_status,finders.gender,transaction.*,comp_booking.num_ticket,computer_type.name');
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.transaction_id',$transac_id);
        $query = $this->db->get();
        return $query->result();
        //echo json_encode($query->result());
    }
    public function viewallShopAdminBookingRequests($shop_id){
        $this->db->select('finders.firstname,finders.lastname,transaction.arrival_date,transaction.transaction_id,transaction.arrival_time,transaction.transaction_status,transaction.payment_status,comp_booking.num_ticket,transaction.service_fee,computer_type.name');
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.shop_id_fk',$shop_id);
        $this->db->order_by('transaction.date_issued', 'DESC');
        $query = $this->db->get();
        return $query->result();
       // echo json_encode($query->result());
    }
    //update Transaction Status
    public function updateBookingTransacStatus($transac_id,$status){
        $data = array(
            'transaction_status'   => 	 $status
        );
        $this->db->where('transaction_id',$transac_id);
        $this->db->update('transaction',$data);
        echo json_encode($data);
    }
    public function CountBookingRequest(){
        $shop_id = $this->session->userdata('admin_shop_id');
        $query = $this->db->select('*')->from('transaction')->where('shop_id_fk',$shop_id)->where('transaction_status',"pending")->get();
		$row = $query->num_rows();
		// return $row;
        echo json_encode($row);
    }
    public function updateTransactionStatusToOverdue($transac_id){
        $data = array(
            'transaction_status'   => 	 "Overdue",
            'arrival_status'      => 	 "Overdue"
        );
        $this->db->where('transaction_id',$transac_id);
        $this->db->update('transaction',$data);
        echo json_encode($data);
    }
    public function shopNotificationDetails(){
        $shop_id = $this->session->userdata('admin_shop_id');
        $this->db->select('compshop_notification.*, finders.profile_pic, finders.firstname, finders.lastname');
        $this->db->from('compshop_notification');
        $this->db->join('transaction', 'transaction.transaction_id = compshop_notification.transaction_id');
        // $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('finders', 'finders.user_id = transaction.user_id_fk', 'left');
        $this->db->where('transaction.shop_id_fk',$shop_id);
        $query = $this->db->get();
        return $query->result();
    }
    public function deleteNotification($notif_id){
        $this->db->where('cp_noti_id',$notif_id);
        $this->db->delete('compshop_notification');
    }
    public function CountNotifications(){
        $query = $this->db->select('*')->from('compshop_notification')->get();
		$row = $query->num_rows();
		// return $row;
        echo json_encode($row);
    }
    public function shopAdminmessageFinder($user_id, $transac_id){
        $date_created = date('m/d/y');
        $data = array(
            'to_user_id'   => 	 $user_id,
            'transaction_id'   => 	 $transac_id,  
            'noti_title' => "Message",
            'noti_body' =>  $this->input->post('notification_body'),
            'noti_created' => $date_created,
            'status' => "unseen"
        );
        $this->db->insert('finder_notification',$data);
        echo json_encode($data);
    }
    //Select Admin Information
    public function selectShopAdminInfo($admin_id){
        $this->db->select("compmanager.*, user.username");
        $this->db->from("compmanager");
        $this->db->join('user', 'user.user_id = compmanager.user_id');
        $this->db->where("compmanager.user_id",$admin_id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllPosts($id){
        $this->db->select('post_events.*,computershop.shop_name,computershop.shop_img_icon,compmanager.firstname,compmanager.lastname, compmanager.profilepic');
        $this->db->from('post_events');
        $this->db->join('computershop', 'computershop.shop_id = post_events.shop_id', 'left');
        $this->db->join('compmanager', 'compmanager.shop_id_fk = computershop.shop_id', 'left');
        $this->db->where("post_events.shop_id",$id);
        $this->db->order_by('post_created','desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllComments(){
        $this->db->select('comments.*, user.user_type, user.username,finders.firstname,finders.lastname,compmanager.firstname as admin_firstname,compmanager.lastname as admin_lastname,finders.profile_pic, compmanager.profilepic');
        $this->db->from('comments');
        $this->db->join('user', 'user.user_id = comments.user_id', 'left');
        $this->db->join('finders', 'finders.user_id = user.user_id', 'left');
        $this->db->join('compmanager', 'compmanager.user_id = user.user_id', 'left');
        $this->db->order_by('date','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function addshopPosts($id,$status){
        $date_created = date('m/d/y H:i A');
        if($status == "no-image"){
            $data = array(
            'shop_id'  =>    $id,
            'post_title'   => 	 $this->input->post('title'),
            'post_description'   => 	 $this->input->post('description'),
            'post_created'   => 	$date_created,
            );
            echo json_encode($data);
            // echo "no image";
        }
        else if($status == "with-image"){
            $image_data = $this->upload->data();
            $data = array(
                'shop_id'  =>    $id,
                'post_title'   => 	 $this->input->post('title'),
                'post_description'   => 	 $this->input->post('description'),
                'post_created'   => 	$date_created,
                'post_img' =>  $image_data['file_name'],
            );
            // echo "with image";
            echo json_encode($data);
        }
        $this->db->insert('post_events',$data);
    }
    public function getPostInfo($id){
        $this->db->select('*');
        $this->db->from('post_events');
        $this->db->where('post_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateshopPosts($id,$status){
        $date_created = date('m/d/y H:i A');
        if($status == "no-image"){
            $data = array(
            'post_title'   => 	 $this->input->post('edit_title'),
            'post_description'   => 	 $this->input->post('edit_description'),
            'post_created'   => 	$date_created,
            );
            echo json_encode($data);
            // echo "no image";
        }
        else if($status == "with-image"){
            $image_data = $this->upload->data();
            $data = array(
                'post_title'   => 	 $this->input->post('edit_title'),
                'post_description'   => 	 $this->input->post('edit_description'),
                'post_created'   => 	$date_created,
                'post_img' =>  $image_data['file_name'],
            );
            // echo "with image";
            echo json_encode($data);
        }
        $this->db->where('post_id',$id);
        $this->db->update('post_events',$data);
        echo json_encode($data);
    }
    public function deleteshopPosts($id){
        $this->db->where('post_id',$id);
        $this->db->delete('post_events');
    }
    public function addComments($id){
        $comuser_id = $this->session->userdata('user_id');
        $date_created = date('m/d/y H:i A');
        $data = array(
            'post_id_fk' => $id,
            'user_id' => $comuser_id,
            'comment'   => 	 $this->input->post('comment_txt'),
            'date' =>  $date_created
        );
        $this->db->insert('comments',$data);
        echo json_encode($data);
    }
    public function deleteComments($id){
        $this->db->where('comment_id',$id);
        $this->db->delete('comments');
    }
    public function getCommentInfo($id){
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where('comment_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateComments($id){
        $date_created = date('m/d/y H:i A');
        $data = array(
            'comment'   => 	 $this->input->post('comment_txt'),
            'date' =>  $date_created
        );
        $this->db->where('comment_id',$id);
        $this->db->update('comments',$data);
        echo json_encode($data);
    }
    //update computer shop details
    public function updateComputerDetails($id,$status){
        
        $op_days = $this->input->post('day_start')."-".$this->input->post('day_end');
        $time_start12format = new DateTime($this->input->post('time_start'));
        $time_end12format  = new DateTime($this->input->post('time_end'));
        $operating_hours = $time_start12format->format('h:iA')."-".$time_end12format->format('h:iA');
        $coordinates =  $this->input->post('longtitude').",".$this->input->post('latitude'); 

        if($status == "no-image"){
            
        $datashop = array(
            'description'   => 	 $this->input->post('description'),
            'operating_days'   => 	  $op_days  ,
            'operating_hours'  =>  $operating_hours,
            'net_speed'   => 	 $this->input->post('net_speed'),
            'contact_number'  =>  $this->input->post('p_num'),
            'tel_number'  =>  $this->input->post('tel_num'),
            'email_address'  =>  $this->input->post('email'),
            'address'  =>  $this->input->post('address'),
            'coordinates'  =>  $coordinates,
        );
        
        $this->db->where('shop_id',$id);
        $this->db->update('computershop', $datashop);
         
        }else if($status == "with-image"){
            $image_data = $this->upload->data();
            $datashop = array(
                'shop_img_icon' =>  $image_data['file_name'],
                'description'   => 	 $this->input->post('description'),
                'operating_days'   => 	  $op_days  ,
                'operating_hours'  =>  $operating_hours,
                'net_speed'   => 	 $this->input->post('net_speed'),
                'contact_number'  =>  $this->input->post('p_num'),
                'tel_number'  =>  $this->input->post('tel_num'),
                'email_address'  =>  $this->input->post('email'),
                'address'  =>  $this->input->post('address'),
                'coordinates'  =>  $coordinates,
            );
          
            $this->db->where('shop_id',$id);
            $this->db->update('computershop', $datashop );

        }    

        
    }
    public function addComputerType($id, $status){
        if($status == "no-image"){
            $data = array(
            'comp_type_img'   => "default_computertype.png",
            'shop_id_fk'  =>    $id,
            'status' => "Available",
            'name'   => 	 $this->input->post('comp_name'),
            'total_units'   => 	 $this->input->post('comp_total'),
            'rate'   => 	 $this->input->post('comp_rate'),
            'specs'   => 	 $this->input->post('comp_cpu').",".$this->input->post('comp_acc'),
            'service_fee'   => "10"
            );
            echo json_encode($data);
            // echo "no image";
        }
        else if($status == "with-image"){
            $image_data = $this->upload->data();
            $data = array(
                'shop_id_fk'  =>    $id,
                'status' => "Available",
                'name'   => 	 $this->input->post('comp_name'),
                'total_units'   => 	 $this->input->post('comp_total'),
                'rate'   => 	 $this->input->post('comp_rate'),
                'specs'   => 	 $this->input->post('comp_cpu').",".$this->input->post('comp_acc'),
                'comp_type_img' =>  $image_data['file_name'],
                'service_fee'   => "10"
            );
            // echo "with image";
            echo json_encode($data);
        }
        $this->db->insert('computer_type',$data);

    }
    public function deleteComputerType($id){
        $this->db->where('Ctype_id',$id);
        $this->db->delete('computer_type');
    }
    public function updateComputerType($id, $status){
        if($status == "no-image"){
            $data = array(
                'name'   => 	 $this->input->post('comp_name'),
                'total_units'   => 	 $this->input->post('comp_total'),
                'rate'   => 	 $this->input->post('comp_rate'),
                'specs'   => 	 $this->input->post('comp_cpu').",".$this->input->post('comp_acc')
            );
            echo json_encode($data);
            echo "no-image";
        }
        else if($status == "with-image"){
                $image_data = $this->upload->data();
                $data = array(
                    'comp_type_img' =>     $image_data['file_name'], 
                    'name'   => 	 $this->input->post('comp_name'),
                    'total_units'   => 	 $this->input->post('comp_total'),
                    'rate'   => 	 $this->input->post('comp_rate'),
                    'specs'   => 	 $this->input->post('comp_cpu').",".$this->input->post('comp_acc')
                );
                echo json_encode($data);
                echo "with image";
            }
        $this->db->where('Ctype_id',$id);
        $this->db->update('computer_type',$data);
        echo json_encode($data);
    }
    public function updateComputerTypeStatus($id){
        $data = array(
            'status' => $this->input->post('status'),
        );
        $this->db->where('Ctype_id',$id);
        $this->db->update('computer_type',$data);
        echo json_encode($data);
    }
    //kani na api gamita for selecting computer type using shop id
    public function getListOfShop_ComputerTypes($shopid){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('shop_id_fk',$shopid);
        $query = $this->db->get();
        return $query->result();
    }
    //admin account settings
    public function updateAdminAccount($status){


        $user_id  = $this->session->userdata('user_id');
        if($status == "no-image"){
            $data = array(
                'firstname'         =>  $this->input->post('fname'),
                'lastname'           => 	$this->input->post('lname'),
                'birthdate'           => 	$this->input->post('bdate'),
                'gender'     => 	$this->input->post('gender'), 
                'email'              =>   $this->input->post('email') ,
                'contactaddress'              =>   $this->input->post('p_number') ,
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('compmanager',$data);
            $data2 = array(
                'username'              =>   $this->input->post('username') 
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data2);
        
            $this->session->set_userdata('admin_name',$this->input->post('fname')." ".$this->input->post('lname'));
            
        }else if($status == "with-image"){
            $image_data = $this->upload->data();
            $data = array(
                'profilepic' =>     $image_data['file_name'], 
                'firstname'         =>  $this->input->post('fname'),
                'lastname'           => 	$this->input->post('lname'),
                'birthdate'           => 	$this->input->post('bdate'),
                'gender'     => 	$this->input->post('gender'), 
                'email'              =>   $this->input->post('email') ,
                'contactaddress'              =>   $this->input->post('p_number') ,
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('compmanager',$data);
            $data2 = array(
                'username'              =>   $this->input->post('username') 
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data2);
          
            $this->session->set_userdata('admin_name',$this->input->post('fname')." ".$this->input->post('lname'));
            $this->session->set_userdata('profile_pic',$image_data['file_name']);
        } 
        

    }
    //shop images
    public function uploadshopimages($shop_id){
        //to do: check if 4 images na siya if 4 na dli na pwedi

        $date = date('d-m-y');
        $image_data = $this->upload->data();
        $data = array(
            'shop_id'  =>  $shop_id,
            'img_file'  =>  $image_data['file_name'],
            'date'  =>  $date,
        );
        $this->db->insert('shop_image', $data);
    }
    public function removeshopimage($image_id){
        $this->db->where('image_id',$image_id);
        $query = $this->db->get('shop_image');
        $result = $query->result_array();
        unlink("./assets/upload/shop/".$result[0]['img_file']);
        $this->db->where('image_id',$image_id);
        $this->db->delete('shop_image');
    }
    //view all shopImages
    public function listshopimages($shop_id){
        $this->db->select('*');
        $this->db->from('shop_image');
        $this->db->where('shop_id',$shop_id);
        $query = $this->db->get();
        return $query->result();
    }
    //view 5 shopImage
    public function viewShopimages($shop_id){
        $this->db->select('*');
        $this->db->from('shop_image');
        $this->db->where('shop_id',$shop_id);       
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    //shopAdmin Dashboard
    public function selectTopFinders($shop_id){

        $this->db->select('COUNT(transaction.user_id_fk) as Total,finders.firstname,finders.lastname,finders.profile_pic');
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');

        $this->db->group_by('transaction.user_id_fk' );
        $this->db->order_by('Total','desc');
        $this->db->where('shop_id_fk',$shop_id);
        $this->db->limit(3);
        // $this->db->where('transaction_status',"accepted");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function ShopAdminTotalBookings($shop_id){
        $this->db->select('COUNT(transaction_id) as TotalBookings');
        $this->db->from('transaction');
        $this->db->where('shop_id_fk',$shop_id);
        $this->db->where('payment_status','paid');
        //where accepted and success and paid or except cancelled and decline
        $query = $this->db->get();
        return $query->result();
    }
    public function ShopAdminSales($shop_id){
        $this->db->select_sum('(transaction.service_fee)', 'totalSales');
        $this->db->from('transaction');
        $this->db->where('shop_id_fk = '.$shop_id.' AND (payment_status = "paid" OR transaction_status = "success")');
        $query = $this->db->get();
        return $query->result();
    }
    public function ShopAdminRatings($shop_id){
        $this->db->select("COUNT(rating_id) as  countRating, FORMAT((SUM(computer_rate) / COUNT(rating_id)),1) as avgRatings");
        // $this->db->select('COUNT(rating_id) as countRating');
        // $this->db->select_sum('(computer_rate)/5', 'avgRatings');
        $this->db->from('computer_ratings');
        $this->db->where('shop_id',$shop_id);
        $query = $this->db->get();
        return $query->result();
    }

    //2 top recent rating by date
    public function ShopRecentRatings($shop_id){
        // $this->db->select("SELECT * FROM `computer_ratings` ORDER BY  date DESC,computer_rate DESC LIMIT 2");
        $this->db->select("computer_ratings.*,finders.profile_pic,finders.lastname,finders.firstname");
        $this->db->from('computer_ratings');
        $this->db->join('finders', 'computer_ratings.user_id = finders.user_id','left');
        $this->db->order_by("date", "desc");
        $this->db->order_by("computer_rate", "desc");
        $this->db->limit(10);
        $this->db->where('shop_id',$shop_id);
        $query = $this->db->get();
        return $query->result();
    }

    //shop admin reports
    public function shopReportsSalesForGraph($shop_id){
        $this->db->select("transaction_id,date_issued,service_fee");
        $this->db->from('transaction');
        $this->db->where('shop_id_fk',$shop_id);
        $this->db->where('payment_status',"paid");
        $query = $this->db->get();
        return $query->result();
    }
    //count of success Transaction;
    public function shopReportsBookingStatusCountSuccess($shop_id){
        $this->db->select("COUNT(transaction_id) as count_success");
        $this->db->from('transaction');
        $this->db->where('shop_id_fk',$shop_id);
        $this->db->where('transaction_status','success');
        $query = $this->db->get();
        return $query->result();
    }
    public function shopReportsBookingStatusCountFail($shop_id){
        $this->db->select("COUNT(transaction_id) AS count_fail FROM `transaction` WHERE shop_id_fk = ".$shop_id." && (transaction_status = 'Overdue' || transaction_status = 'declined')");
        $query = $this->db->get();
        return $query->result();
    }

    public function shopReportPaidBookings($shop_id){
        $this->db->select("transaction_id,date_issued");
        $this->db->from('transaction');
        $this->db->where('shop_id_fk',$shop_id);
        $this->db->where('payment_status',"paid");
        $query = $this->db->get();
        return $query->result();
    }

    public function shopReportsBookings($shop_id){
        $this->db->select("transaction.transaction_id,transaction.service_fee,transaction.date_issued,transaction.transaction_status,finders.firstname,finders.lastname,finders.profile_pic,comp_booking.num_ticket,computer_type.name");
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
        $this->db->join('comp_booking', 'transaction.transaction_id = comp_booking.transaction_id');
        $this->db->join('computer_type', 'comp_booking.comp_type_id = computer_type.Ctype_id', 'left');
        $this->db->where('transaction.shop_id_fk',$shop_id);
        $this->db->where('transaction_status !=','accepted');
        $this->db->order_by("transaction.date_issued", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllTransaction(){
        $this->db->select("computershop.shop_name,transaction.date_issued,transaction.service_fee,transaction.payment_type");
        $this->db->from('transaction');
        $this->db->join('computershop','transaction.shop_id_fk = computershop.shop_id');
        $this->db->where('payment_status','paid');
        $query = $this->db->get();
        return $query->result();
    }



}

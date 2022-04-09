<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MainModel extends CI_Model{
    // user login 
    public function login_user(){
      $user = $this->input->post('username');
      $pass = $this->input->post('password');

      $this->db->where('username',$user);
      $this->db->where('password',$pass);
      $query = $this->db->get('user');
      if(!empty($query->result_array()))
      {

          $row = $query->row();
          $datasession  = array(
              'user_id' => $row->user_id,
              'username'  => $row->username,
              'user_type' => $row->user_type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
          );
          $this->session->set_userdata($datasession);
          return true;
          
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
            'Shop_Status'   => "Active",
            );

        $this->db->insert('computershop',$data);
        // echo json_encode($data);
    }

    public function getAdminDetails($id){
		$this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
        $query = $this->db->get();
        return $query->result();
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
        $this->db->where('shop_id',$user_id_fk);
        $query = $this->db->get();
        return $query->result();
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
    public function getListOfComputerShops(){
        $this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('Shop_Status','Active');
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
            $datauser = array(
                'user_id'   =>    $Primarycode,
                'username'  => 	  $this->input->post('username'),
                'password'  =>    $this->input->post('conpass'),
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
    
    //REPORTS ----------------------------------
    public function getTotalSalesAndBooks(){
        $this->db->select('transaction.service_fee,comp_booking.num_ticket, transaction.payment_type');
        $this->db->select_sum('(transaction.service_fee * comp_booking.num_ticket)', 'totalSales');
        $this->db->select_sum('comp_booking.num_ticket', 'totalBooks');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'accepted');
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
        $this->db->where('transaction_status', 'accepted');
        $this->db->where('payment_status', 'paid');
        $this->db->where('payment_type', 'GCash');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }
    public function getTotalOTCBooks(){
        $this->db->select('transaction.payment_type, transaction.date_issued,comp_booking.num_ticket');
        $this->db->select_sum('comp_booking.num_ticket', 'OTCbooks');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'accepted');
        $this->db->where('payment_status', 'paid');
        $this->db->where('payment_type', 'OverTheCounter');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }

    public function getMonthlyPaymentTypeBooks(){
        $this->db->select('transaction.payment_type,transaction.service_fee, transaction.date_issued,comp_booking.num_ticket');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
        $this->db->where('transaction_status', 'accepted');
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
        $this->db->where('transaction_status', 'accepted');
        $this->db->where('payment_status', 'paid');
        // $this->db->where('shop_id', '7');
        $this->db->order_by('transaction.date_issued', 'ASC');
        $query = $this->db->get();
        // return $query->result();
        return $query->result();
    }

    // public function getMonthlyDataSpecifcShop(){
    //     $this->db->select('transaction.date_issued,transaction.service_fee,computershop.shop_name');
    //     $this->db->from('transaction');
    //     $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id',);
    //     $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk',);
    //     $this->db->where('transaction_status', 'accepted');
    //     $this->db->where('payment_status', 'paid');
    //     $this->db->where('computershop.shop_name', 'TNC');
    //     $this->db->order_by('transaction.date_issued', 'ASC');
    //     $query = $this->db->get();
    //     // return $query->result();
    //     return $query->result();
    // }


    //finders
    public function registerFinder(){
        $Primarycode = 0;
        $Primarycode = $this->generatePrimarykey();
        //check if the primary key is taken;
        $this->db->where('user_id',$Primarycode);
        $query = $this->db->get('user');
        if(!empty($query->result_array()))
		{ 
            $this->registerFinder();
		}
		else
		{
            $datauser = array(
                'user_id'   =>    $Primarycode,
                'username'  => 	  $this->input->post('username'),
                'password'  =>    $this->input->post('conpass'),
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
        $transaction = array(
            'transaction_id'    =>  $transaction_id,
            'user_id_fk'        =>  $user_id_fk,
            'shop_id_fk'           =>  7,
            'servicetype'       =>  "ComputerBooking",
            'arrival_date'      => 	$this->input->post('arrival_date'),
            'arrival_time'      => 	$this->input->post('arrival_time'),
            'instruction'       => 	$this->input->post('addtional_message'),
            'date_issued'              => 	$date_issued,
            'transaction_status'       => 	"pending",
            'service_fee'              => 	"15",
            'payment_status	'          => 	"not_paid",
            'payment_type'             => 	"not_selected",
            'qr_code'                  => 	"not_issued",
            );

            
            
            $comp_booking = array(
                'transaction_id'    =>  $transaction_id,
                'comp_type_id'     =>  $this->input->post('comp_type'),
                'num_ticket'         => 	$this->input->post('num_person'),
            );  
  
             $this->db->insert('transaction',$transaction);
             $this->db->insert('comp_booking', $comp_booking);
    }

    // finder select all Computerbookingtransactions
    public function view_finderBookingTransaction($user_id){
        $this->db->select('computershop.shop_name,transaction.*,comp_booking.*,computer_type.name,computer_type.rate');
        $this->db->from('transaction');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('user_id_fk',$user_id);
      
        $query = $this->db->get();
        $resultquery = $query->row_array();
        return $resultquery;
    }
    // finder select ComputerBookingTransaction
    public function select_finderBookingTransaction($transaction_id){
        $this->db->select('computershop.shop_name,transaction.*,comp_booking.*,computer_type.name,computer_type.rate');
        $this->db->from('transaction');
        $this->db->join('computershop', 'computershop.shop_id = transaction.shop_id_fk');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.transaction_id',$transaction_id);
        $query = $this->db->get();
        return $query->result();
    }
  
    public function getCshopDetails($id){
        $this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
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
        $Primarycode = 0;
        $Primarycode = $this->generatePrimarykey();

        $datafinder = array(
            'rating_id'         =>  $Primarycode,
            'shop_id'           => 	$shop_id,
            'user_id'           => 	$user_id_fk,
            'computer_rate'     => 	$this->input->post('score'), 
            'date'              =>  "8/28/1999",
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
        }
    }
    // ShopAdmin Booking Request Management
    // arrival time, computer type name, additonal description, num of ticket 
    public function getallPendingRequest($shop_id){
        $this->db->select('transaction.arrival_time,transaction.arrival_date,transaction.instruction,comp_booking.num_ticket,computer_type.name');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction_status', 'pending');
        $query = $this->db->get();
        // return $query->result();
        echo json_encode($query->result());
    }
    public function getallAcceptedRequest($shop_id){
        $this->db->select('transaction.arrival_time,transaction.arrival_date,transaction.instruction,comp_booking.num_ticket,computer_type.name');
        $this->db->from('transaction');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction_status', 'accepted');
        $query = $this->db->get();
        // return $query->result();
        echo json_encode($query->result());
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
    public function viewBookRequest($transac_id){
        $this->db->select('finders.firstname,finders.lastname,transaction.*,comp_booking.num_ticket,computer_type.name,computer_type.rate');
        $this->db->from('transaction');
        $this->db->join('user', 'user.user_id = transaction.user_id_fk');
        $this->db->join('finders', 'user.user_id = finders.user_id', 'left');
        $this->db->join('comp_booking', 'comp_booking.transaction_id = transaction.transaction_id');
        $this->db->join('computer_type', 'computer_type.Ctype_id = comp_booking.comp_type_id', 'left');
        $this->db->where('transaction.transaction_id',$transac_id);
        $query = $this->db->get();
        // return $query->result();
        echo json_encode($query->result());
    }
    public function updateBookingTransacStatus($transac_id,$status){
        $data = array(
            'transaction_status'   => 	 $status
        );
        $this->db->where('transaction_id',$transac_id);
        $this->db->update('transaction',$data);
        echo json_encode($data);
    }

    public function addshopPosts($id){
        $date_created = date('m/d/y');
        $data = array(
            'shop_id' => $id,
            'post_description'   => 	 $this->input->post('post_desc'),
            'post_title'   => 	 $this->input->post('post_title'),  
            'post_img' =>  $this->input->post('post_image'),
            'post_created' =>  $date_created
        );
        $this->db->insert('post_events',$data);
        echo json_encode($data);
    }
    public function updateshopPosts($id){
        $date_updated = date('m/d/y');
        $data = array(
            'post_description'   => 	 $this->input->post('post_desc'),
            'post_title'   => 	 $this->input->post('post_title'),  
            'post_img' =>  $this->input->post('post_image'),
        );
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
        $date_created = date('m/d/y');
        $data = array(
            'post_id' => $id,
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
    public function updateComments($id){
        $date_created = date('m/d/y');
        $data = array(
            'comment'   => 	 $this->input->post('comment_txt'),
            'date' =>  $date_created
        );
        $this->db->where('comment_id',$id);
        $this->db->update('comments',$data);
        echo json_encode($data);
    }
    public function updateComputerDetails($id){
        $datafinder = array(
            'shop_name'   => 	 $this->input->post('cshop'),
            'address'   => 	 $this->input->post('cshop_address'),
            'coordinates'   => 	 $this->input->post('cshop_coordi'),
            'operating_hours'   => 	 $this->input->post('cshop_ophours'),
            'net_speed'   => 	 $this->input->post('cshop_netspeed'),
            'description'   => 	 $this->input->post('cshop_description'),
            'contact_number'   => 	 $this->input->post('cshop_contact'),
            'email_address'   => 	 $this->input->post('cshop_emailadd')
        );
        $this->db->where('shop_id',$id);
        $this->db->update('computershop',$datafinder);
        echo json_encode($datafinder);
    }
    public function addComputerType($id){
        $datafinder = array(
            'shop_id_fk'  =>    $id,
            'name'   => 	 $this->input->post('comp_name'),
            'total_units'   => 	 $this->input->post('comp_total'),
            'rate'   => 	 $this->input->post('comp_rate'),
            'specs'   => 	 $this->input->post('comp_specs'),
            'comp_type_img' =>  $this->input->post('comp_img'),
            'service_fee'   => "10",
        );
        $this->db->insert('computer_type',$datafinder);
        echo $id;
        echo json_encode($datafinder);
    }
    public function deleteComputerType($id){
        $this->db->where('Ctype_id',$id);
        $this->db->delete('computer_type');
    }
    public function updateComputerType($id){
        $datafinder = array(
            'name'   => 	 $this->input->post('comp_name'),
            'total_units'   => 	 $this->input->post('comp_total'),
            'rate'   => 	 $this->input->post('comp_rate'),
            'specs'   => 	 $this->input->post('comp_specs'),
            'comp_type_img' =>  $this->input->post('comp_img'),
        );
        $this->db->where('Ctype_id',$id);
        $this->db->update('computer_type',$datafinder);
        echo json_encode($datafinder);
    }
    public function updateComputerTypeStatus($id){
        $datafinder = array(
            'status' => $this->input->post('status'),
        );
        $this->db->where('Ctype_id',$id);
        $this->db->update('computer_type',$datafinder);
        echo json_encode($datafinder);
    }
    //kani na api gamita for selecting computer type using shop id
    public function getListOfShop_ComputerTypes($shopid){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('shop_id_fk',$shopid);
        $query = $this->db->get();
        return $query->result();
    }
    //shop images
    public function uploadshopimages($shop_id){
        $date = date('d-m-y');
        $image_data = $this->upload->data();
        $data = array(
            'shop_id'  =>  $shop_id,
            'img_file'  =>  $image_data['file_name'],
            'date'  =>  $date,
        );

        echo json_encode($data);
        $this->db->insert('shop_image', $data);
    }
    public function removeshopimage($image_id){
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
}

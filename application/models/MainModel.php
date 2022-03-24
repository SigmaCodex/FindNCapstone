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
                'user_type' =>    "Finder",
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
            'service_fee'              => 	"5",
            'payment_status	'          => 	"not_paid",
            'payment_type'             => 	"not_selected",
            'qr_code'                  => 	"not_issued",
            );

            
            
            $comp_booking = array(
                'transaction_id'    =>  $transaction_id,
                'comp_type_id'     =>  $this->input->post('comp_type'),
                'num_ticket'         => 	$this->input->post('num_person'),
            );  
            echo json_encode($transaction);
             $this->db->insert('transaction',$transaction);
             $this->db->insert('comp_booking', $comp_booking);
    }

     public function getListOfComputerTypes($id){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('shop_id_fk',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getComputerTypeInfo($id){
        $this->db->select('*');
        $this->db->from('computer_type');
        $this->db->where('Ctype_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getListOfComputerShops(){
        $this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('Shop_Status','Active');
        $query = $this->db->get();
        return $query->result();
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
        $resultquery = $query->row_array();
        return $resultquery;
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

    public function selectComputerShop($id){
		$this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    //admin
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
            'comp_type_img' =>  $this->input->post('comp_img')
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
    public function listshopimages($shop_id){
        $this->db->select('*');
        $this->db->from('shop_image');
        $this->db->where('shop_id',$shop_id);
        $query = $this->db->get();
        return $query->result();
    }
}

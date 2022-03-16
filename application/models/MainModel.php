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

    public function getListOfComputerShops(){
        $this->db->select('*');
        $this->db->from('computershop');
        $query = $this->db->get();
        return $query->result();
    }


    public function selectComputerShop($name,$id){
		$this->db->select('*');
        $this->db->from('computershop');
        $this->db->where('shop_id',$id);
        $this->db->where('shop_name',$name);
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

	
}

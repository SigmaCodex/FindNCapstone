<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MainModel extends CI_Model{

    public function user_validate(){
        echo "hello world";
    }
    //superAdmin
    public function addComputerShop(){

        $data = array(
            'shop_name'   =>  $this->input->post('shop_name'),
            'address'  => 	  $this->input->post('address'),
            );
         $this->db->insert('computershop',$data);

        echo("added");
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
            $this->registerFind();
		}
		else
		{
            $datauser = array(
                'user_id'   =>    $Primarycode,
                'username'  => 	  $this->input->post('username'),
                'password'  =>    $this->input->post('conpass'),
                'user_type' =>    "finder",
                'status'    =>    "active"
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

	
}

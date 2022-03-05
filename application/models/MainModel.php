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
	
}

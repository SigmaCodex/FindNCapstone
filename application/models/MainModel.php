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

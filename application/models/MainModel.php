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
        $Primarycode = $this->generatePrimarykey();
        //check if the primary key is taken;
        $this->db->where('user_id',$Primarycode);
        $query = $this->db->get('user');
        if(!empty($query->result_array()))
		{ 
            echo "duplicate primarycode";
		}
		else
		{
            echo"wlay sulod Pwedi naka mo add sa imoha mga data diri";
		}
    }
    public function generatePrimarykey(){
        $first = date('ymd');
        $second = rand (1, 100);
        $third = rand (1, 200);
 
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

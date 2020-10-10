<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_Model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$status=session_status();
		if($status == PHP_SESSION_NONE){
    //There is no active session
   			 session_start();
		}
		elseif($status == PHP_SESSION_DISABLED){
    //Sessions are not available
		}
		
		elseif($status == PHP_SESSION_ACTIVE){
    
		}	
	}

	public function getCartProductsInfo($id)
	{
		$query=$this->db->query(" SELECT * FROM `tbl_products` where `p_id`=");
		return $query;
		
	}
	
	
	
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_Model extends CI_Model {

	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	
	}
	public function getProducts($sub_cat_id)

	{
		$this->db->where('p_sub_cat',$sub_cat_id);
		$query=$this->db->get('tbl_products');	
		return $query;

	}
	public function getAllProducts()
	{
		$query=$this->db->get("tbl_products");
		return $query;
	}
	public function getDetails($id)
	{
		$this->db->where('p_id',$id);
		$this->db->from('tbl_products');
		$query=$this->db->get();
		$row=$query->row();
		return $row;
	}
}

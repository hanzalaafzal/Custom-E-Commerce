<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model {

	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		
	
	}


	public function getHomesContent()
	{
		$qry=$this->db->get('tbl_home');
		return $qry;
	}
	public function getCatName($catid)
	{
		$this->db->select('cat_name');
		$this->db->where('cat_id',$catid);
		$this->db->from('tbl_categories');
		$qry=$this->db->get();
		$row=$qry->row();
		return $row;
	}

	public function getSubCats($catid)
	{
		$this->db->select("*");
		$this->db->where('cat_id',$catid);
		$this->db->from('tbl_sub_categories');
		$qry=$this->db->get();
		return  $qry;
	}

	public function getCategories()
	{
		$query=$this->db->get("tbl_categories");
		
		return $query;

	}
	public function getSubGagets()
	{
		$query=$this->db->query(" SELECT * FROM `tbl_sub_categories` where `cat_id`=9 ");
		return $query;
	}
	

	public function getRegions()
	{
		$get=$this->db->get("tbl_regions");
		return $get;
	}

	
}

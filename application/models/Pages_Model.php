<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_Model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function showAboutUs()
	{
		$query=$this->db->get("tbl_aboutus");
		return $query;
		
	}
	public function submitContact($name,$email,$contact,$subject,$msg)
	{

		$data=array(
			'email' => $email,
			'name' => $name,
			'number' => $contact,
			'subject' => $subject,
			'message' => $msg
 
		);
		$qry=$this->db->insert('tbl_contact',$data);
		if($qry==TRUE)
		{
			return true;
		}
		else
			return false;
	}
	public function showFaqs()
	{
		$qry=$this->db->get('tbl_faqs');
		return $qry;
	}
	
	
	
}

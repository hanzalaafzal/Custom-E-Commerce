<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		
	
	}


/////////////////////////////////////////////////// AUTH CHECK ////////////////////////////////////////////


	public function authCheck($username,$pass)
	{
		
	
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('admin_username',$username);
		$this->db->where('admin_password',$pass);
		$qry=$this->db->get();
	//	$qry=$this->db->query(' SELECT * FROM `tbl_admin` where `admin_username`=$username AND `admin_password`=$pass  ');
		if($qry->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
////////////////////////////////////////////////// SELECT ////////////////////////////////////////////


	public function getAdmin($user) //get admin details
	{
		
		$qry=$this->db->query(" SELECT * FROM `tbl_admin` where `admin_username`='".$user."' ");
		$row=$qry->row();
		return $qry;
	}

	public function getCats() //get all main categories
	{
		$qry=$this->db->get("tbl_categories");
		return $qry;

	}
	public function getCat($id)//get single main category
	{	

		$qry=$this->db->query(" SELECT * FROM `tbl_categories` where `cat_id`='".$id."' ");
			$row=$qry->row();
		return $row;
	}

	public function getSubCats()//get all sub categories
	{
		$this->db->select("*");
		$this->db->from("tbl_sub_categories");
		$this->db->join("tbl_categories","tbl_categories.cat_id=tbl_sub_categories.cat_id");
		$qry=$this->db->get();

		return $qry;
	}

	public function fetchSubCat($id)//get single sub category
	{
		
		$this->db->from("tbl_sub_categories");
		$this->db->where("cat_id",$id);
		$output='<option value="">select Sub Category</option> ';
		$qry=$this->db->get();
		foreach($qry->result() as $row)
		{
			$output .= '<option value="'.$row->subcat_id.'">'.$row->subcat_name.'</option>';
		}
		return $output;
	}

	public function getSubCat($id)//get single sub category
	{
		$this->db->select("*");
		$this->db->from("tbl_sub_categories");
		$this->db->join("tbl_categories","tbl_categories.cat_id=tbl_sub_categories.cat_id");
		$this->db->where("subcat_id",$id);
		$qry=$this->db->get();
			$row=$qry->row();
		return $row;
	}

	public function getQueries()//get all queries
	{
		$qra=$this->db->get("tbl_contact");
		return $qra;
	}

	public function getAbouts()//get all abouts
	{
		$qry=$this->db->get("tbl_aboutus");
		return $qry;
	}
	public function getAbout($id)
	{
		$this->db->where('id',$id);
		$this->db->from('tbl_aboutus');
		$qry=$this->db->get();
		$row=$qry->row();
		return $row;
	}

	public function getFaqs()//get all faqs
	{
		$faqs=$this->db->get('tbl_faqs');
		return $faqs;
	}

	public function getFaq($id)//get single Faq
	{
		$this->db->select("*");
		$this->db->from("tbl_faqs");
		$this->db->where('id',$id);
		$qry=$this->db->get();
		$row=$qry->row();
		return $row;
	}

	public function getHomes()
	{
		$this->db->select("*");
		$this->db->from('tbl_home');
		$this->db->join("tbl_categories","tbl_categories.cat_id=tbl_home.cat_id");
		$temp=$this->db->get();
		return $temp;
	}

	public function fetch_last_cate()
	{
		$try=$this->db->query(" SELECT * FROM `tbl_categories` ORDER BY `cat_id` DESC LIMIT 1");
		return $try;
	}

	public function getProducts()
	{
		$this->db->select("*");
		$this->db->from("tbl_products");
		$this->db->join("tbl_categories","tbl_categories.cat_id=tbl_products.p_cat");
		$this->db->join("tbl_sub_categories","tbl_sub_categories.subcat_id=tbl_products.p_sub_cat");

		$qry=$this->db->get();
		return $qry;
	}

	public function getProduct($id)
	{
		$this->db->select("*");
		$this->db->from("tbl_products");
		$this->db->where('p_id',$id);
		$this->db->join('tbl_categories','tbl_categories.cat_id=tbl_products.p_cat');
		$this->db->join('tbl_sub_categories','tbl_sub_categories.subcat_id=tbl_products.p_sub_cat');
		$qry=$this->db->get();
		$row=$qry->row();
		return $row;

	}

	public function getOrders()
	{
		$this->db->order_by('id','ASC');
		$try=$this->db->get('tbl_orders');

		return $try;
	}

	public function getOrder($id)
	{
		$this->db->select("*");
		
			$this->db->from('tbl_orders_prods');
			$this->db->join('tbl_orders','tbl_orders.order_id=tbl_orders_prods.order_id');
		$this->db->where('tbl_orders_prods.order_id',$id);
				$qry=$this->db->get();
		return $qry;
	}



//////////////////////////////////////////////// INSERT /////////////////////////////////////////////////////////

	
	public function addAdmin($username,$fname,$lname,$email,$pass)
	{
		$data=array(
			'admin_username' => $username,
			'admin_password' => $pass,
			'admin_fname' => $fname,
			'admin_lname' => $lname,
			'admin_email' =>$email
 
		);
		$qry=$this->db->insert('tbl_admin',$data);
		if($qry==TRUE)
		{
			return true;
		}
		else
			return false;
	}

	public function addCat($name)
	{
		$data =array(
			'cat_name' => $name
		);
		$test=$this->db->insert('tbl_categories',$data);
		if($test==TRUE)
		{
			return True;
		}
		else
			return False;
	}

	public function addSubCat($subname,$catid,$image)
	{
		$data=array(
			'cat_id' =>$catid,
			'subcat_name' =>$subname,
			'sub_images' =>$image

		);
		$test=$this->db->insert('tbl_sub_categories',$data);
		if($test==True)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function addAbout($name,$content)
	{
		$data=array(
			'name' => $name,
			'content' => $content

		);
		$checker=$this->db->insert('tbl_aboutus',$data);
		if($checker==True)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function addFaqs($ques,$ans)
	{
		$data=array(
			'ques' => $ques,
			'answer' => $ans
		);
		$chk=$this->db->insert('tbl_faqs',$data);
		if($chk==True)
		{
			return true;
		}
		else
		{
			return false;

		}
	}

	public function addHome($status,$cat_id)
	{
		$data=array(
			'status' => $status,
			'cat_id' => $cat_id

		);
		$try=$this->db->insert('tbl_home',$data);

	}
	public function addProd($name,$info,$desc,$image,$price,$dprice,$cat,$subcat)
	{
		$dat=array(

			'p_name' => $name,
			'p_info' => $info,
			'p_desc' => $desc,
			'p_cat' => $cat,
			'p_sub_cat' => $subcat,
			'p_price' => $price,
			'p_discount_price' => $dprice,
			'p_image' => $image 

		);
		$run=$this->db->insert('tbl_products',$dat);
		if($run==true)
		{
			return true;
		}
		else
			return false;
	}


//////////////////////////////////////////////// EDIT ////////////////////////////////////////////////////////	
	
	public function updateAdminDetails($fname,$lname,$uname,$email,$cur_username) //update admin details
	{
		$this->db->set('admin_username',$uname);
		$this->db->set('admin_fname',$fname);
		$this->db->set('admin_lname',$lname);
		$this->db->set('admin_email',$email);
		$this->db->where('admin_username',$cur_username);
		$this->db->update('tbl_admin');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function updatePassAdmin($old,$new,$username) //update admin pass
	{
		$qryy=$this->db->query(" SELECT * FROM `tbl_admin` where `admin_password`='".$old."' and `admin_username`='".$username."' "); 
		if($qryy->num_rows()==1)
		{
			$this->db->set('admin_password',$new);
			$this->db->where('admin_username',$username);
			$this->db->update('tbl_admin');
			if($this->db->affected_rows()>0)
			{
				return true;
			}
			else
				return false;
		}
		else
		{
			return false;
		}
	}


	public function updateCat($id,$new_name)//update category name
	{
		
		$this->db->set('cat_name', $new_name);
		$this->db->where('cat_id', $id);
		$this->db->update('tbl_categories');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
		
	}


	public function updateSubCat($name,$cat_id,$image,$subid) //update subcategories
	{
		$this->db->set('subcat_name',$name);
		$this->db->set('cat_id',$cat_id);
		$this->db->set('sub_images',$image);
		$this->db->where('subcat_id',$subid);
		$this->db->update('tbl_sub_categories');
			if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function updateFaq($ques,$ans,$id)
	{
		$this->db->set('ques',$ques);
		$this->db->set('answer',$ans);
		$this->db->where('id',$id);
		$this->db->update('tbl_faqs');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	}

	public function updateAboutus($id,$cont,$name)
	{
		$this->db->set('name',$name);
		$this->db->set('content',$cont);
		$this->db->where('id',$id);
		$this->db->update('tbl_aboutus');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	
	}




	public function updatehomee($homeid,$newstatus)
	{
		$this->db->set('status',$newstatus);
		$this->db->where('id',$homeid);
		$this->db->update('tbl_home');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	}


	public function updateProd($id,$name,$main_cat,$sub_cat,$info,$desc,$price,$dprice,$image_path)
	{
		$this->db->set('p_name',$name);
		$this->db->set('p_info',$info);
		$this->db->set('p_desc',$desc);
		$this->db->set('p_cat',$main_cat);
		$this->db->set('p_sub_cat',$sub_cat);
		$this->db->set('p_price',$price);
		$this->db->set('p_discount_price',$dprice);
		$this->db->set('p_image',$image_path);

		$this->db->where('p_id',$id);

		$this->db->update('tbl_products');

		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;

	}
	public function update_Prod($id,$name,$main_cat,$sub_cat,$info,$desc,$price,$dprice)
	{
		$this->db->set('p_name',$name);
		$this->db->set('p_info',$info);
		$this->db->set('p_desc',$desc);
		$this->db->set('p_cat',$main_cat);
		$this->db->set('p_sub_cat',$sub_cat);
		$this->db->set('p_price',$price);
		$this->db->set('p_discount_price',$dprice);
		

		$this->db->where('p_id',$id);

		$this->db->update('tbl_products');

		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;

	}

	public function updateOrder($orderid,$status)
	{
		$this->db->set('status',$status);
		$this->db->where('order_id',$orderid);
		$this->db->update('tbl_orders');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	}





//////////////////////////////////////////// DELETE //////////////////////////////////////////////////////

	public function delCat($id) //delete main category
	{
		$this->db->where('cat_id',$id);
		$this->db->delete('tbl_categories');
			if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delSubCat($id) //delete sub category
	{
		$this->db->where('subcat_id',$id);
		$this->db->delete('tbl_sub_categories');
			if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function delQry($id) //delete query
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_contact');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	}

	
	public function delAbout($id) //delete about us
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_aboutus');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	}

	public function delFaqs($id)//delete faqs
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_faqs');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	public function delProd($id)
	{
		$this->db->where('p_id',$id);
		$this->db->delete('tbl_products');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
			return false;
	}

	


}

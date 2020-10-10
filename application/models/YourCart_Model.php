<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class YourCart_Model extends CI_Model {

	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->library('cart');
		
	}
	public function fetchData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->where('p_id', $id);
		$query = $this->db->get();
		if($query){
			$result=$query->row_array();
			return $result;

		}else{
			return false;
		}
		
	}
	public function place_order($email,$first_name,$last_name,$mobile_num,$home_num,$city,$country,$s_ad_1,$s_ad_2,$s_city,$s_country,$data,$uniqids,$total)
	{

			$myarray=array(
				'order_id' => $uniqids,
				'email'=> $email,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'contact_num' => $mobile_num,
				'home_num' => $home_num,
				'city' => $city,
				'country' => $country,
				's_ad_1'	 => $s_ad_1,
				's_ad_2' => $s_ad_2,
				's_city' => $s_city,
				's_country' => $s_country,
				'status' => "0"

			);
			$try=$this->db->insert('tbl_orders',$myarray);
		if($try==true)
		{

			foreach($data['cart_Items'] as $citems)
				{
					$myarray2=array(
						'order_id' => $uniqids,
						'prod_name' => $citems['name'],
						'prod_qty' =>$citems['qty'],
						'prod_price' => $citems['price'],
						'prod_subtotal' => $citems['subtotal'],
						'net_total' => $total

					);
					$try=$this->db->insert('tbl_orders_prods',$myarray2);
					

				}
		}
		else
		{

		}

		

		
	}	
	

}

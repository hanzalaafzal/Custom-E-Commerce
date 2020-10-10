<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class YourCart extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->model('YourCart_Model');
		$this->load->library('cart');
		$this->load->library('form_validation');
		$this->load->helper('form');
		
	}
	

	public function index()
	{	


		$data['title']="E Commerce ALI BABA";
		$data['cart_Items']=$this->cart->contents();


		$this->load->view('home/header',$data);
		$this->load->view('Cart/cart_index',$data);
		$this->load->view('home/footer');		
	
	}
	public function add()
	{
		$id=$this->uri->segment(3);
		$products = $this->YourCart_Model->fetchData($id);

		$data=array(
			'id'=> $products['p_id'],
			'qty' => 1,
			'price' => $products['p_discount_price'],
			'name' => $products['p_name'],
			'info' => $products['p_info'],
			'image' => $products['p_image']

			
		);
					$this->cart->insert($data);
					redirect($_SERVER['HTTP_REFERER']);

	}
	public function updateCartInc()
	{
		$update=0;
		
		$rowid=$this->input->post('rowid');
		$qty=$this->input->post('qty');
		$qty++;

		$data=array(
			'rowid' => $rowid,
			'qty' => $qty

		);
		$update=$this->cart->update($data);
		//redirect($_SERVER['HTTP_REFERER']);
		echo $update?'ok':'error';
	}
	public function updateCartDec()
	{
		
		
		$rowid=$this->input->post('rowid');
		$qty=$this->input->post('qty');
		$qty--;

		$data=array(
			'rowid' => $rowid,
			'qty' => $qty

		);
		$update=$this->cart->update($data);
	//	redirect($_SERVER['HTTP_REFERER']);
		echo $update?'ok':'error';

	}
	public function removeItem()
	{
		$rowid=$this->input->get('rowid');
		$remove=$this->cart->remove($rowid);
		echo $remove?'ok':'error';

	}
	public function checkOut()
	{

		if($this->cart->total_items()>0)
		{
			$data['title']="E Commerce Ali BABA";
			$data['cart_Items']=$this->cart->contents();
		$this->load->view('home/header',$data);
		$this->load->view('Cart/checkout');
		$this->load->view('home/footer');
	
		}
		else
		{
			redirect(base_url());
		}
	}
	public function placeOrder()
	{
		$submit=$this->input->post('OrderPlace');
		if(isset($submit))
		{
			$this->form_validation->set_rules('fname','First Name','required');
			$this->form_validation->set_rules('lname','Last Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('mob_number','Mobile Number','required');
			$this->form_validation->set_rules('city_1','City','required');
			$this->form_validation->set_rules('country_1','Country','required');
			$this->form_validation->set_rules('add1','Address','required');
			$this->form_validation->set_rules('city_2','Shipping City','required');
			$this->form_validation->set_rules('country_2','Shipping Country','required');
			$this->form_validation->set_rules('add1','Address','required');

	

			if($this->form_validation->run() ==TRUE)
			{
				if(isset($_POST['OrderPlace']))
				{
					$email=$this->input->post('email');
					$first_name=$this->input->post('fname');
					$last_name=$this->input->post('lname');
					$mobile_num=$this->input->post('mob_number');
					$home_num=$this->input->post('home_number');
					$city=$this->input->post('city_1');
					$country=$this->input->post('country_1');
					$s_ad_1=$this->input->post('add1');
					$s_ad_2=$this->input->post('add2');
					$s_city=$this->input->post('city_2');
					$s_country=$this->input->post('country_2');


					$data['cart_Items']=$this->cart->contents();
					$uniq_id=uniqid();
					$test=$this->YourCart_Model->place_order($email,$first_name,$last_name,$mobile_num,$home_num,$city,$country,$s_ad_1,$s_ad_2,$s_city,$s_country,$data,$uniq_id,$this->cart->total()+23);

					$this->session->set_userdata('order_id',$uniq_id);
				

					redirect('pages/ThankYou');

				}
			}
			else
			{
				
				redirect('YourCart/checkout');
			}
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data['title']="E Commerce";
		$this->load->model('Products_Model');
		$this->load->library('cart');

	}

	
	public function index()
	{

		
		$data['title']="E Commerce Ali Baba";
		$data['product']=$this->Products_Model->getAllProducts();
		
		$data['cart_Items']=$this->cart->contents();
		$this->load->view('home/header',$data);
		
		$this->load->view('products/products',$data);

		$this->load->view('home/footer');

		
	}

	public function ItemsByCategories()
	{
		$data['cart_Items']=$this->cart->contents();
		$data['title']="E Commerce Ali Baba";

		$id=$this->uri->segment(3);
		if($id)
		{
			$data['product']=$this->Products_Model->getProducts($id);
			$this->load->view('home/header',$data);
			$this->load->view('products/products',$data);
			$this->load->view('home/footer');

		}
	}

	public function ShowDetails()
	{

		$data['cart_Items']=$this->cart->contents();
		$data['title']="E Commerce Ali Baba";
		
		$id=$this->uri->segment(3);

	
			$data['product']=$this->Products_Model->getDetails($id);
			if($data['product'])
			{

			$this->load->view('home/header',$data);
			$this->load->view('products/show_details',$data);
			$this->load->view('home/footer');
		
			}
			else
			{
				redirect(base_url());
			}

	}
	
	


	
}

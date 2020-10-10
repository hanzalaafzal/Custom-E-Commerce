<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_Model');

		$this->load->library('cart');
	}

	public function index()
	{

		$data['cats']=$this->Main_Model->getCategories();
		$data['cart_Items']=$this->cart->contents();
		$data['regions']=$this->Main_Model->getRegions();
		
		$data['title']="E Commerce Ali Baba";
		$this->load->view('home/header',$data);
		$this->load->view('home/slider_content',$data);

		

		

		$data['home_elements']=$this->Main_Model->getHomesContent();

		foreach($data['home_elements']->result() as $testt)
		{
			if($testt->status == 1 )
			{
				$data['cat_name']=$this->Main_Model->getCatName($testt->cat_id);
				$data['subcats']=$this->Main_Model->getSubCats($testt->cat_id);
				$this->load->view('home/cat_content',$data);
			}

		}

				$this->load->view('home/suppliers',$data);
		$this->load->view('home/footer.php');
		


		
		
	//	$this->load->view('home/gadgets_content',$data);
//		$this->load->view('home/foodbev_content',$data);


		
	}
	
	
	
	
}

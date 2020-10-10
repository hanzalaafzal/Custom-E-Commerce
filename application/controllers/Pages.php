<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pages_Model');
		$this->load->library('cart');


	}
	public function index()
	{
		redirect(base_url());
	}

	public function AboutUs()
	{

		$data['cart_Items']=$this->cart->contents();
		
		$data['title']="E Commerce";
		$data['about']=$this->Pages_Model->showAboutUs();
		$this->load->view('home/header',$data);
		$this->load->view('pages/aboutus',$data);
		$this->load->view('home/footer.php');

		
	}
	public function ContactUs()
	{
		$data['title']="E Commerce";
		$data['cart_Items']=$this->cart->contents();
		$this->load->view('home/header',$data);
		$this->load->view('pages/contactus');
		if(isset($_POST['submit']))
		{
			$name=$this->input->post('nameField');
			$email=$this->input->post('emailField');
			$contact=$this->input->post('contactField');
			$subject=$this->input->post('subjectField');
			$msg=$this->security->xss_clean($this->input->post('msgField'));

			$te=$this->Pages_Model->submitContact($name,$email,$contact,$subject,$msg);

			if($te==true)
			{
				echo "<div class='alert alert-success' role='alert'>
 					 We recieved your query
						</div>";
			}

		}
		$this->load->view('home/footer.php');

		

	}
	public function Faqs()
	{
		
		$data['cart_Items']=$this->cart->contents();
		$data['title']="E Commerce";
		$data['faqs']=$this->Pages_Model->showFaqs();
		$this->load->view('home/header',$data);
		$this->load->view('pages/faqs',$data);
		$this->load->view('home/footer.php');


	}
	public function ThankYou()
	{
		$data['cart_Items']=$this->cart->contents();
		$data['title']="E Commerce Ali Baba";
		
		if($this->session->userdata('order_id'))
		{

		$this->load->view('home/header',$data);
		$this->load->view('pages/thankyou',$data);
		$this->load->view('home/footer.php');
	
		}
		else
		{
			redirect(base_url());
		}
	}

	
	
	
}

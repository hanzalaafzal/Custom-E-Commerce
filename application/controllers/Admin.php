<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation','database');
		$this->load->model('Admin_Model');
		$this->load->library('session');

	}


	/////////////////////////////////////////INDEX ~ DASHBOARD ~ AUTH///////////////////////////////////




	public function index()//for showing login page
	{

		if($this->session->userdata('username'))
		{
			redirect('Admin/dashboard');		
			
		}
		else
		{
			
			$this->load->view('AdminPanel/loginpage');
			
		}
	}

	public function auth()//Authentication check controller
	{
		if(isset($_POST['loginSubmit']))
		{
			$username=$this->security->xss_clean($this->input->post('usernameField'));
			$pass=$this->security->xss_clean($this->input->post('passField'));
			

			$chk=$this->Admin_Model->authCheck($username,$pass);

			if($chk)
			{
				$this->session->set_userdata('username',$username);
				redirect('Admin/dashboard');
			}
			else
			{
				redirect('Admin/index/1');
			}

		}
		
	}
	
	public function dashboard()//display dashboard
	{
		if($this->session->userdata('username'))
		{
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));

			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/content');
			$this->load->view('AdminPanel/footer');

		}
		else
		{
			redirect('Admin');
		}
	}

	public function logout()//logout
	{
		if($this->session->userdata('username'))
		{
			$this->session->unset_userdata('username');
			redirect('Admin/index/2');
		}
		else
		{
			redirect('Admin');
		}
	}

	/////////////////////////////////////////Display Pages///////////////////////////////////////////


	public function Home_content()
	{
		if($this->session->userdata('username'))
		{
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$data['homes']=$this->Admin_Model->getHomes();


			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/home_content',$data);
			$this->load->view('AdminPanel/footer');

		}
	}

	public function AboutUs()//Display Aboutus page form/content 
	{
		if($this->session->userdata('username'))
		{
			
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$data['abouts']=$this->Admin_Model->getAbouts();
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/about_us',$data);
			$this->load->view('AdminPanel/footer');

		}

	}

	public function addAdmin()//Display Add Admin Form
	{
		if($this->session->userdata('username'))
		{
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/add_admin');
			$this->load->view('AdminPanel/footer');
		}

	}

	public function Queries()//display queries to admin
	{
		if($this->session->userdata('username'))
		{
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$data['queries']=$this->Admin_Model->getQueries();
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');

			$this->load->view('AdminPanel/queries',$data);
			$this->load->view('AdminPanel/modal');
			$this->load->view('AdminPanel/footer');

		}
		else
		{
			redirect('Admin');
		}
		
	}

	public function showCategories()//display Main Categories
	{
		if($this->session->userdata('username'))
		{
			$admin_data['cats']=$this->Admin_Model->getCats();
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/categories',$admin_data);
			$this->load->view('AdminPanel/footer');
		}
	}

	public function Profile()//Show Admins profile
	{
		if($this->session->userdata('username'))
		{
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));

			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/profile',$data);
			$this->load->view('AdminPanel/footer');

		}
		else
		{
			redirect('Admin');
		}
	}

	public function showFaqs()//display faqs
	{

		if($this->session->userdata('username'))
		{
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$data['faqs']=$this->Admin_Model->getFaqs();
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/faqs',$data);
			$this->load->view('AdminPanel/footer');
			
		}

	}

	public function showSubCategories() //display sub categories
	{
		if($this->session->userdata('username'))
		{
			$admin_data['subcats']=$this->Admin_Model->getSubCats();
			$admin_data['cats']=$this->Admin_Model->getCats();
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/sub_categories',$admin_data);
			$this->load->view('AdminPanel/footer');
		}
	}

	public function showProducts()
	{
		if($this->session->userdata('username'))
		{

			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$data['subcats']=$this->Admin_Model->getSubCats();
			$data['cats']=$this->Admin_Model->getCats();

		
			$data['products']=$this->Admin_Model->getProducts();

				$this->load->view('AdminPanel/header',$data);

			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/products',$data);
			$this->load->view('AdminPanel/footer');

		}
		else
		{
			redirect('Admin');
		}
	}
	

	public function showOrders()
	{
		if($this->session->userdata('username'))
		{
				$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$data['orders']=$this->Admin_Model->getOrders();
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');

			$this->load->view('AdminPanel/orders',$data);
			$this->load->view('AdminPanel/modal');
			$this->load->view('AdminPanel/footer');
		}
		else
		{
			redirect('Admin');
		}

	}

	public function viewOrder()
	{
		$id=$this->uri->segment(3);
		$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
		$data['order']=$this->Admin_Model->getOrder($id);

		$data['oid']=$id;
		$this->load->view('AdminPanel/header',$data);
		$this->load->view('AdminPanel/sidebar');
		$this->load->view('AdminPanel/viewOrder',$data);
		$this->load->view('AdminPanel/footer');
	}




	

    ////////////////////////////////////////// DISPLAY EDIT PAGES////////////////////////////////////


	public function editCategory()//show update main category form
	{
			
			if($this->session->userdata('username'))
			{

			
			$catid=$this->input->post('cat_id');
			$data['cate']=$this->Admin_Model->getCat($catid);

			if($data['cate']->cat_id>0)
				{
					$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
				$this->load->view('AdminPanel/header',$data);
				$this->load->view('AdminPanel/sidebar');
				$this->load->view('AdminPanel/editCat',$data);
				$this->load->view('AdminPanel/footer');

				}
				else
				{
					redirect('Admin/showCategories');
				}

			}
			else
			{
				redirect('Admin');
			}
	}



	public function editSubCategory() //display update sub category form
	{

	
			if($this->session->userdata('username'))
			{

			
			$catid=$this->input->post('subcat_id');

			$data['cats']=$this->Admin_Model->getCats();
			$data['cate']=$this->Admin_Model->getSubCat($catid);

			if($data['cate']->cat_id>0)
				{
					$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
					
				$this->load->view('AdminPanel/header',$data);
				$this->load->view('AdminPanel/sidebar');
				$this->load->view('AdminPanel/editSubCat',$data);
				$this->load->view('AdminPanel/footer');

				}
				else
				{
					redirect('Admin/showSubCategories');
				}

			}
			else
			{
				redirect('Admin');
			}
	}

	public function editFaq()//display edit faq form
	{
		if($this->session->userdata('username'))
			{

			
			$faqid=$this->input->post('faqid_Field');
			$data['faq']=$this->Admin_Model->getFaq($faqid);

			if($data['faq']->id>0)
				{
					$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));

				$this->load->view('AdminPanel/header',$data);
				$this->load->view('AdminPanel/sidebar');
				$this->load->view('AdminPanel/editFaq',$data);
				$this->load->view('AdminPanel/footer');

				}
				else
				{
					redirect('Admin/showFaqs');
				}

			}
			else
			{
				redirect('Admin');
			}
	}

	public function editProduct()
	{
		if($this->session->userdata('username'))
		{
			$id=$this->input->post('prod_id');
			$data['product_details']=$this->Admin_Model->getProduct($id);
			$data['cats']=$this->Admin_Model->getCats();
			$data['cate']=$this->Admin_Model->getSubCat($data['product_details']->p_sub_cat);

			if($data['product_details']->p_id>0)
			{
				$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
				$this->load->view('AdminPanel/header',$data);
				$this->load->view('AdminPanel/sidebar',$data);
				$this->load->view('AdminPanel/editProduct',$data);
				$this->load->view('AdminPanel/footer');

			}
			else
			{
				redirect('Admin/showProducts');
			}
		}
		else
		{
			redirect('Admin');
		}
	}

	public function editAboutus()
	{
		if($this->session->userdata('username'))
		{
			$id=$this->input->post('aboutid_Field');
			$data['about']=$this->Admin_Model->getAbout($id);
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));
			$this->load->view('AdminPanel/header',$data);
			$this->load->view('AdminPanel/sidebar');
			$this->load->view('AdminPanel/editAbout',$data);
			$this->load->view('AdminPanel/footer');

		}
	}


	///////////////////////////////////////// CRUD OPERATION CONTROLLERS//////////////////////////////////


	public function fetch_subcat()
	{
		if($this->input->post('cat_id'))
		{
			echo $this->Admin_Model->fetchSubCat($this->input->post('cat_id'));
		}
	}


	public function updateAboutUs()//Add/Del Aboutus
	{
		if($this->session->userdata('username'))
		{
			if(isset($_POST['btn_addAbout']))
			{

				$name=$this->input->post('question_field');
				$content=$this->input->post('answer_field');

				$add=$this->Admin_Model->addAbout($name,$content);
				if($add==True)
					{

						redirect('Admin/AboutUs?add=1');
					}
				else
					{
						redirect('Admin/AboutUs?add=2');
					}

			}

			if(isset($_POST['btn_delabout']))
			{
				$id=$this->input->post('aboutid_Field');
				$checker=$this->Admin_Model->delAbout($id);
				if($checker==True)
				{
					redirect('Admin/AboutUs?del=1');
				}
				else
				{
					redirect('Admin/AboutUs?del=2');
				}
			}
			if(isset($_POST['btn_updateAbout']))
			{
				$id=$this->input->post('about_id');
				$name=$this->input->post('name_Field');
				$cont=$this->input->post('cont_Field');
				$try=$this->Admin_Model->updateAboutus($id,$cont,$name);
				if($try==true)
				{
					redirect('Admin/AboutUs?ed=1');
				}
				else
					redirect('Admin/AboutUs?ed=2');

			}

		}
	}

	
	
	
	public function updateAdmin()//Update admin info/password/and 
	{
		if($this->session->userdata('username'))
		{
			if(isset($_POST['btn_update_admin']))//update admin info
			{
				$username=$this->security->xss_clean($this->input->post('uname_field'));
				$fname=$this->input->post('fname_field');
				$lname=$this->input->post('lname_field');
				$email=$this->security->xss_clean($this->input->post('email_field'));

				$try=$this->Admin_Model->updateAdminDetails($fname,$lname,$username,$email,$this->session->userdata('username'));
				if($try==True)
				{
					$this->session->set_userdata('username',$username);
					redirect("Admin/profile?upd=1");
				}
				else
				{
					redirect("Admin/profile?upd=2");
				}
			}
			if(isset($_POST['btn_add_admin']))//add new admin
			{
				$username=$this->security->xss_clean($this->input->post('add_uname_field'));
				$fname=$this->input->post('add_fname_field');
				$lname=$this->input->post('add_lname_field');
				$email=$this->security->xss_clean($this->input->post('add_email_field'));
				$pass=$this->security->xss_clean($this->input->post('add_pass_field'));
				$try=$this->Admin_Model->addAdmin($username,$fname,$lname,$email,$pass);
				if($try==true)
				{
					redirect('Admin/addAdmin?a_upd=1');
				}
				else
				{
					redirect('Admin/addAdmin?a_upd=2');
				}
			}
			if(isset($_POST['btnn_update_pass_admin']))//update password of current admin
			{
				$old=$this->input->post('old_pass_field');
				$new=$this->input->post('newadd_pass_field');
				$chk=$this->Admin_Model->updatePassAdmin($old,$new,$this->session->userdata('username'));
				if($chk==true)
				{
					redirect('Admin/profile?pp_upd=1');

				}
				else
				{
					redirect('Admin/profile?pp_upd=2');
				}
			}


		}
		else
		{
			redirect('Admin');
		}
	}



	public function updateCategory()// update/add/del main cateogry 
	{
		if($this->session->userdata('username'))
		{

			if(isset($_POST['btn_updateCat']))
				{
					$name=$this->input->post('catname');
					$id=$this->input->post('catid');
					

					$update=$this->Admin_Model->updateCat($id,$name);
					if($update==TRUE)
					{
						redirect('Admin/showCategories');

					}
					else
					{
						redirect('Admin/showCategories');
					}
				}
			elseif(isset($_POST['btn_delcat']))
				{

					$id=$this->input->post('cat_id');

					$del=$this->Admin_Model->delCat($id);
					if($del==True)
					{
						redirect('Admin/showCategories');

					}
					else
					{
						redirect('Admin/showCategories');
					}


				}
			elseif(isset($_POST['btn_addCat']))
				{

					
					$name=$this->input->post('catname');
					$add=$this->Admin_Model->addCat($name);

					$get_last=$this->Admin_Model->fetch_last_cate();
					foreach($get_last->result() as $testt)
					{
						$catid=$testt->cat_id;
					}
					
				

					$this->Admin_Model->addHome(0,$catid);


					if($add==True)
					{
						redirect('Admin/showCategories');

					}
					else
					{
						redirect('Admin/showCategories');
					}


				}
			else
				{
					redirect('Admin/showCategories');
				}
			
		}
		else
		{
			redirect('Admin');
		}

	}	


	public function updateSubCategory() // update/delete sub category
	{

			if($this->session->userdata('username'))
				{
					if(isset($_POST['btn_addSubCat']))
					{
						$config=[
							'upload_path' => 'uploads/images/subcategories',
							'allowed_types' => 'gif|jpg|png',
						];
						$this->load->library('upload',$config);

						if($this->upload->do_upload('userFile'))
						{
							$subname=$this->input->post('subcatname');
							$catid=$this->input->post('catid');

							$post=$this->input->post();
							$data=$this->upload->data();
							$image_path=$data['raw_name'].$data['file_ext'];
							$insert=$this->Admin_Model->addSubCat($subname,$catid,$image_path);
							if($insert==TRUE)
							{
								redirect('Admin/showSubCategories?err=3');
								
							}
							else
							{
								redirect('Admin/showSubCategories?err=1');
							}
						}
						else
						{
							redirect('Admin/showSubCategories?err=2');
						}	

							

					}

					if(isset($_POST['btn_delsubcat']))
						{
								$id=$this->input->post('subcat_id');
								$del=$this->Admin_Model->delSubCat($id);
						if($del==True)
						{
								redirect('Admin/showSubCategories?del=1');

						}
						else
						{
								redirect('Admin/showSubCategories?del=0');
						}

					}
					if(isset($_POST['btn_updateSubCat']))
						{
							
						$config=[
							'upload_path' => 'uploads/images/subcategories',
							'allowed_types' => 'gif|jpg|png|jpeg',
						];
						$this->load->library('upload',$config);
						if($this->upload->do_upload('userFile'))
						{
							$subcat_id=$this->input->post('subcatid');
							$subcatname=$this->input->post('subcatname');
							$selected_id=$this->input->post('subcat_selected_id');
							$post=$this->input->post();
							$data=$this->upload->data();
							$image_path=$data['raw_name'].$data['file_ext'];
							$insert=$this->Admin_Model->updateSubCat($subcatname,$selected_id,$image_path,$subcat_id);
							if($insert==TRUE)
							{
								redirect('Admin/showSubCategories?upd=3');
								
							}
							else
							{
								redirect('Admin/showSubCategories?upd=1');
							}
						}
						else
						{
							redirect('Admin/showSubCategories?upd=2');
						}	

					}

			}

	}


	public function delQuery()//del query 
	{
		$id=$this->input->post('qid');
		$try=$this->Admin_Model->delQry($id);
		if($try==True)
		{
			redirect('Admin/Queries?did=1');
		}
		else
			redirect('Admin/Queries?did=2');
	}

	
	public function updateFaqs()//update/add/delete faqs
	{

		if($this->session->userdata('username'))
		{ 
			$data['admin_']=$this->Admin_Model->getAdmin($this->session->userdata('username'));

			if(isset($_POST['btn_delFaq']))
			{
				$id=$this->input->post('faqid_Field');
				$try=$this->Admin_Model->delFaqs($id);	
					if($try==True)
						{
							redirect('Admin/showFaqs?del=1');
						}
					else
						{
							redirect('Admin/showFaqs?del=2');
						}

			}
			if(isset($_POST['btn_addFaq']))

			{
				$ques=$this->input->post('question_field');
				$ans=$this->input->post('answer_field');

				$add=$this->Admin_Model->addFaqs($ques,$ans);
				if($add==true)
				{
					redirect('Admin/showFaqs?add=1');

				}
				else
				{
					redirect('Admin/showFaqs?add=2');
				}

			}	

			if(isset($_POST['btn_updateFaq']))
			{
				$ques=$this->input->post('ques_Field');
				$ans=$this->input->post('ans_Field');
				$id=$this->input->post('faq_id');

				$chk=$this->Admin_Model->updateFaq($ques,$ans,$id);
				if($chk==True)
				{
					redirect('Admin/showFaqs?eid=1');
				}
				else
				{
					redirect('Admin/showFaqs?eid=2');
				}
			}		
			


		}

	}

	public function updateHome()
	{
		if($this->session->userdata('username'))
		{
			$home_id=$this->input->post('status_id');
			if(isset($_POST['btn_deactivate']))
			{

				$try=$this->Admin_Model->updatehomee($home_id,0);
				if($try==true)
				{
					redirect('Admin/Home_content?acv=2');
				}
				else
				{
					redirect('Admin/Home_content?acv=3');
				}

			}
			elseif(isset($_POST['btn_activate']))
			{

				$try=$this->Admin_Model->updatehomee($home_id,1);
				if($try==true)
				{
					redirect('Admin/Home_content?acv=1');
				}
				else
				{
					redirect('Admin/Home_content?acv=3');
				}
			}

		}
		else
		{
			redirect("Admin");
		}
	}

	public function updateProduct()
	{
		if($this->session->userdata('username'))
		{


			$id=$this->input->post('pid');
			$name=$this->input->post('prod_name');
			$main_cat=$this->input->post('catid_Fieldd');
			$sub_cat=$this->input->post('subcatid_Fieldd');
			$info=$this->input->post('productinfo');
			$desc=$this->input->post('productdesc');
			$price=$this->input->post('productPrice');
			$dprice=$this->input->post('productDPrice');


			if(isset($_POST['btn_addProduct']))

			{

				$config=[
							'upload_path' => 'uploads/images/products',
							'allowed_types' => 'gif|jpg|png|jpeg',
						];
						$this->load->library('upload',$config);

						if($this->upload->do_upload('userFile'))
						{
								

									$post=$this->input->post();
							$data=$this->upload->data();
							$image_path=$data['raw_name'].$data['file_ext'];

							$run=$this->Admin_Model->addProd($name,$info,$desc,$image_path,$price,$dprice,$cat,$subcat);
							if($run==true)
							{
								redirect('Admin/showProducts?add=1');
							}
							else
								{
									redirect('Admin/showProducts?add=2');

								}


						}
						else
						{
							echo "not uploadded";
					}	
			}


			if(isset($_POST['btn_updateProd']))
			{

				$config=[
							'upload_path' => 'uploads/images/products',
							'allowed_types' => 'gif|jpg|png',
						];
						$this->load->library('upload',$config);

						if($this->upload->do_upload('userFile'))
						{


							
							$post=$this->input->post();

							$data=$this->upload->data();
							$image_path=$data['raw_name'].$data['file_ext'];
							$run=$this->Admin_Model->updateProd($id,$name,$main_cat,$sub_cat,$info,$desc,$price,$dprice,$image_path);
							if($run==true)

							{
								redirect('Admin/showProducts?ed=1');

							}
							else
							{
								redirect('Admin/showProducts?ed=2');
							}

						}
						else if(!$this->upload->do_upload('userFile'))
							{
								$id=$this->input->post('pid');
								$name=$this->input->post('prod_name');
								$main_cat=$this->input->post('catid_Fieldd');
								$sub_cat=$this->input->post('subcatid_Fieldd');
								$info=$this->input->post('productinfo');
								$desc=$this->input->post('productdesc');
								$price=$this->input->post('productPrice');
								$dprice=$this->input->post('productDPrice');
								
								$run=$this->Admin_Model->update_Prod($id,$name,$main_cat,$sub_cat,$info,$desc,$price,$dprice);
								if($run==true)
								{
									redirect('Admin/showProducts?ed=1');
								}
								else
									redirect('Admin/showProducts?ed=3');

							}
			}

			if(isset($_POST['btn_delProd']))
			{
				$id=$this->input->post('prod_id');
				$run=$this->Admin_Model->delProd($id);
				if($run==true)
				{
					redirect('Admin/showProducts?d=1');
				}
				else
					redirect('Admin/showProducts?d=2');

			}

			
		}
		else
		{
			redirect('Admin');
		}

	}

	public function updateOrder()
	{
		$id=$this->input->post('order_id');
		$status=$this->input->post('changeStatus');
		$run=$this->Admin_Model->updateOrder($id,$status);

		if($run==true)
		{
			redirect('Admin/showOrders?ed=1');

		}
		else
			redirect('Admin/showOrders?ed=2');
	}

	
}




	


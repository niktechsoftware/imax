<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('welcome_message');
	}
	public function registration()
	{
		$this->load->library("form_validation");
		$this->load->view('registration');
		
	}
	public function insertdata(){
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('parent_id','parent_id','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('fname','fname','required');
		$this->form_validation->set_rules('mobile','mobile','required | numeric |exact_length[10]');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('city','city','required');
		$this->form_validation->set_rules('state','state','required');
		$this->form_validation->set_rules('area','area','required');
		$this->form_validation->set_rules('pincode','pincode','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('pannumber','pannumber','required');
		$this->form_validation->set_rules('adharnum','adharnum','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('cpassword','cpassword','required');
		$this->form_validation->set_rules('gridcheck','gridcheck','required');
		if($this->form_validation->run()){
		
		$parent_id=$this->input->post("parent_id");
		$name=$this->input->post("name");
		$fname=$this->input->post("fname");
		
		$address=$this->input->post("address");
		$city=$this->input->post("city");
		$state=$this->input->post("state");
		$area=$this->input->post("area");
		$pincode=$this->input->post("pincode");
		$mobile=$this->input->post("mobile");
		$gender=$this->input->post("gender");
		$pannumber=$this->input->post("pannumber");
		$adharnum=$this->input->post("adharnum");
		$password=$this->input->post("password");
		$cpassword=$this->input->post("cpassword");
		$gridcheck=$this->input->post("gridcheck");
		$data=array(
				"parent_id" =>$parent_id,
				"name" =>$name,
				"fname" =>$name,
				"address" =>$address,
			"city" =>$city,
			"state" =>$state,
				"area" =>$area,
			"pincode" =>$pincode,
			"gender"=>$gender,
			"pannumber" =>$pannumber,
			"adharnum" =>$adharnum,
			"password" =>$password,
			"cpassword" =>$cpassword,
			"gridcheck" =>$gridcheck
			);
		$this->load->model('cmodel');
		$this->cmodel->insertdata($data);
	}
	
	else{
		$this->registration();
	}
	}
	
	public function about(){
		$this->load->view('about');
		
	}
	public function contact()
	{
		
	$this->load->view('contact');
	}
	public function savedata(){
	$name=$this->input->post("name");
	$email=$this->input->post("email");
	$phone=$this->input->post("phone");
	$message=$this->input->post("message");
	$data=array(
			"name" => $name,
			"email" =>$email,
			"phone" =>$phone,
			"message" =>$message
	);
	$this->load->model('cmodel');
	$this->cmodel->savedata($data);
	redirect(base_url()."index.php/welcome/contact");
		}
	
	
	public function land()
	{
		$this->load->view('land');
	}
	
		public function home()
	{
		$this->load->view('home');
	}
	public function document()
	{
	   	$this->load->view('document'); 
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php
class pageControllers extends CI_Controller{
	  function subReg(){
	  $data['pageTitle']='Customer Registration';
	  $data['title']="Umravati Marketing Pvt.Ltd.";
	  $data['body']="subreg";
	  $this->load->view('include/passtemp',$data);
		}	
		 function reward(){
	  $data['pageTitle']='Customer Registration';
	  $data['title']="Umrawati Marketing ";
	  $data['body']="rewards";
	  $this->load->view('include/passtemp',$data);
		}



		function aboutUs(){
			$data['pageTitle']='Subscriber Registration';
			$data['title']="Umrawati Marketing ";
			$data['body']="aboutus";
			$this->load->view('include/passtemp',$data);
			  }

			  function legal(){
				$data['pageTitle']='Subscriber Registration';
				$data['title']="Umrawati Marketing ";
				$data['body']="legal";
				$this->load->view('include/passtemp',$data);
				  }

				  function bankDetail(){
					$data['pageTitle']='Subscriber Registration';
					$data['title']="Umrawati Marketing ";
					$data['body']="bankDetail";
					$this->load->view('include/passtemp',$data);
					  }
		




		function checkjoinerid(){ 
			$tid = $this->input->post("cat");
			 $pass = $this->input->post("pass");
			$this->load->model("viewmodel");
			$var['view'] = $this->viewmodel->checkjoinerid($tid,$pass);
			$this->load->view('subscriberSingUp',$var);
	}
	function checkID(){
	    $this->load->model("viewmodel");
		$parentID= $this->input->post('parent_id');
		//print_r($parentID);

		$getvalue = $this->viewmodel->checkStatus("customer_info",$parentID);
		echo (json_encode($getvalue));
	}
	function customer_registration(){
		$this->load->library("form_validation");
		$data['pageTitle']='Customer Complain Registration';
		$data['title']="Umravati Marketing Pvt.Ltd.";
		$data['body']="cus_registration";
		$this->load->view('include/passtemp',$data);
	  }
	  function insertCustmer(){
		$this->load->library("form_validation");
		$this->load->model("cmodel");
	
		$this->load->helpers("sms_helper");
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		//$this->form_validation->set_rules('parent_id','Sponsor ID','required|is_unique[customer_info.username]');
		$this->form_validation->set_rules('name','Customer Name','required');
		//$this->form_validation->set_rules('selectTree','Please Select Position','required');
		$this->form_validation->set_rules('fname','Father Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('state','State','required');
		$this->form_validation->set_rules('pinno','PIN No.','required |exact_length[6]');
		$this->form_validation->set_rules('mobile','Mobile Number','required | numeric |exact_length[10]');
		$this->form_validation->set_rules('aadhar','Aadhaar Number','required | is_unique[customer_info.adhaarnumber]');
		$this->form_validation->set_rules('password','Password','matches[confirm_pwd]');
		$this->form_validation->set_rules('confirm_pwd','Password','matches[password]');
		$this->form_validation->set_rules('panno','Pan Number','');
		$this->form_validation->set_rules('dob','Date Of Birth','required');
		$this->form_validation->set_rules('customRadioInline1','Gender','required');
		if($this->form_validation->run()){
			$tblnm ="customer_info";
			$maxid	=	$this->cmodel->cust_max($tblnm);
			
			$maxid	=	$maxid+1;
			
			$username="UMP".$maxid;
			$rn=rand(9999,99999);
			$usern1=$maxid+$rn;
			$username1="UMP".$usern1;
			$rjoinerID= $this->input->post('parent_id');
			$cid  = $this->cmodel->getrowid($rjoinerID);
			if($cid){
			//$ljoinerID= $this->input->post('lJoinerID');
			$name= $this->input->post('name');
			$fname= $this->input->post('fname');
			$address= $this->input->post('address');
			$pinno= $this->input->post('pinno');
			$mobile= $this->input->post('mobile');
			$gender= $this->input->post('customRadioInline1');
			$dob= $this->input->post('dob');
			$password= $this->input->post('password');
			$parent_id= $this->input->post('parent_id');
			$city= $this->input->post('city');
			$state= $this->input->post('state');
			$data= array(
					'parent_id'=>$rjoinerID,
					'fname'=>$fname,
					'joiner_id'=>$cid,
					'customer_name'=>$name,
					'username'=>$username1,
					'password'=>$password,
					'mobilenumber'=>$mobile,
					'current_address'=>$address,
					'city'=>$city,
					'pannumber'=>$this->input->post('panno'),
					'adhaarnumber'=>$this->input->post('aadhar'),
					'state'=>$state,
					'gender'=>$gender,
					'pin'=>$pinno,
					
					
					'status'=>0,
					'joining_date'=>date('Y-m-d'),
					'dob'=>$dob
			);
			if($this->cmodel->insertCustomer($data)){
				
					 $msg = "Dear " . $name . " Your Registration is successfully Done,Your Username is ".$username1." and password is ".$password.
							"Please Login to update http://www.umpl.in.net your details And Contact to Admin for Activate your account.";
                 	sms($mobile, $msg);
					redirect('pageControllers/sub_invoice/'.$username1);
				
			}else{
				echo "error";
			}
			
			
			}	else{
		    echo "Invalid sponsor Name";
		}
			
		} 
			else{
				
				$this->customer_registration();
			}	
		}

function sub_invoice(){
    	$data['pageTitle']='Customer Complain Registration';
	  	$data['title']="Umravati Marketing Pvt.Ltd.";
	  	$data['body']="sub_invoice";
	  	$this->load->view('include/passtemp',$data);
}

	  function comReg(){
	  	$data['pageTitle']='Customer Complain Registration';
	  	$data['title']="Umravati Marketing Pvt.Ltd.";
	  	$data['body']="comReg";
	  	$this->load->view('include/passtemp',$data);
		}
		function complainSave()
		{
				$this->db->where('username',$this->input->post('userid'));
				$this->db->where('password',$this->input->post('pass'));
				$cust_d = $this->db->get('customers');
				if($cust_d->num_rows()>0)
				{
						$userid= $this->input->post('userid');
							$pass= $this->input->post('pass');
							$complain_msg= $this->input->post('complain_msg');
							$photo_name1 = time().trim($_FILES['image']['name']);
							$this->db->select_max('id');
					$this->db->from('complain');
					$maxid=$this->db->get()->row()->id;
							$maxid1=$maxid+1;
							$username = $maxid1;
							//$complin_id = "PASCOM"+$username;
							//print_r("PASCOM"+$maxid);exit();
							$data = array(
						 'sub_ID'=>$userid,
						 'complain_id'=> "PASCOM".$username,
						 'message'=>$complain_msg,
						 'upload'=>$photo_name1,
						 'status'=>0,
						 'created_date'=>date('Y-m-d')
							 );
							$query=$this->db->insert('complain',$data);
	
							if($query)
							{
									 ////sms code start
									$sender = $this->db->get("sms_setting")->row();
									$sende_Detail =$sender;
									$msg = "Dear ".$cust_d->row()->name." Your Complain has been proceed in passystem.in .Please keep patience ,for a admin response ";
									// $mobile =  $this->input->post('contactno');
									$mobile = $cust_d->row()->mobile;
									$getsms= $this->db->get("sms")->row();
									//   if(($getsms->s_reg)==1){
									sms($mobile,$msg,$sende_Detail->uname,$sende_Detail->password,$sende_Detail->sender_id);
									 //  }
								 ////sms code end
								 $this->load->library('upload');
								 $image_path = realpath(APPPATH . '../assets/images/complain');
										 //$asset_name = $this->db->get('upload_asset')->row()->asset_name;
									 // $image_path = $asset_name.'/images/complain/';
								 $config['upload_path'] = $image_path;
								 $config['allowed_types'] = 'gif|jpg|jpeg|png|';
								 $config['max_size'] = '50';
								 $config['file_name'] = $photo_name1;
								 if (!empty($_FILES['image']['name']))
								 {
										 $this->upload->initialize($config);
										 $this->upload->do_upload('image');
								 }
									redirect("pageControllers/comReg/1");
						}
				}
				else
				{
						$this->db->where('username',$this->input->post('userid'));
						$this->db->where('password',$this->input->post('pass'));
						$cust_d = $this->db->get('employee');
						if($cust_d->num_rows()>0)
						{
								$userid= $this->input->post('userid');
									$pass= $this->input->post('pass');
									$complain_msg= $this->input->post('complain_msg');
									$photo_name1 = time().trim($_FILES['image']['name']);
									$this->db->select_max('id');
							$this->db->from('complain');
							$maxid=$this->db->get()->row()->id;
									$maxid1=$maxid+1;
									$username = $maxid1;
									//$complin_id = "PASCOM"+$username;
									//print_r("PASCOM"+$maxid);exit();
									$data = array(
								 'sub_ID'=>$userid,
								 'complain_id'=> "PASCOM".$username,
								 'message'=>$complain_msg,
								 'upload'=>$photo_name1,
								 'status'=>0,
								 'created_date'=>date('Y-m-d')
									 );
									$query=$this->db->insert('complain',$data);
						
									if($query)
									{
											 ////sms code start
											$sender = $this->db->get("sms_setting")->row();
											$sende_Detail =$sender;
											$msg = "Dear ".$cust_d->row()->name." Your Complain has been proceed in passystem.in .Please keep patience ,for a admin response ";
											// $mobile =  $this->input->post('contactno');
												$mobile = $cust_d->row()->mobile;
											$getsms= $this->db->get("sms")->row();
											//   if(($getsms->s_reg)==1){
											sms($mobile,$msg,$sende_Detail->uname,$sende_Detail->password,$sende_Detail->sender_id);
											 //  }
										 ////sms code end
										 $this->load->library('upload');
										 $image_path = realpath(APPPATH . '../assets/images/complain');
												 //$asset_name = $this->db->get('upload_asset')->row()->asset_name;
											 // $image_path = $asset_name.'/images/complain/';
										 $config['upload_path'] = $image_path;
										 $config['allowed_types'] = 'gif|jpg|jpeg|png|';
										 $config['max_size'] = '50';
										 $config['file_name'] = $photo_name1;
										 if (!empty($_FILES['image']['name']))
										 {
												 $this->upload->initialize($config);
												 $this->upload->do_upload('image');
										 }
											redirect("pageControllers/comReg/1");
								}
						}
						else
						{
								 redirect("pageControllers/comReg/2");
						}
				}
	
			}
	  function vieReg(){
	  	$data['pageTitle']='Customer Registration';
	  	$data['title']="Umravati Marketing Pvt.Ltd.";
	  	$data['body']="vieReg";
	  	$this->load->view('include/passtemp',$data);
}	 
function viewComplainDetail(){
	$pId= $this->input->post('pid');
 // print_r($pId);exit();
 $this->db->where('complain_id',$pId);
$data['view']= $this->db->get('complain');
// print_r($data->row());exit();
 $this->load->view('viewComplainDetail',$data);
}
	function product(){
		$data['pageTitle']='Our Product';
		$data['title']="Umravati Marketing Pvt.Ltd.";
		$data['body']="product";
		$this->load->view('include/passtemp',$data);
	}
	
	function product_details(){
		$this->db->where("id",$this->uri->segment("3"));
		$data['sp']=$this->db->get("stock_products")->row();
		$data['pageTitle']='Our Product';
		$data['title']="Umravati Marketing Pvt.Ltd.";
		$data['body']="product_details";
		$this->load->view('include/passtemp',$data);
	}
	
	function contact(){
		$data['pageTitle']='Contact Us';
		$data['title']="Umravati Marketing Pvt.Ltd.";
		$data['body']="contact";
		$this->load->view('include/passtemp',$data);
	}
function bplan(){
	$data['pageTitle']='Business Plan';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="bplan";
	$this->load->view('include/passtemp',$data);
}
function applan(){
	$data['pageTitle']='Business Plan';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="applan";
	$this->load->view('include/passtemp',$data);
}
function cback(){
	$data['pageTitle']='Business Plan';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="cback";
	$this->load->view('include/passtemp',$data);
}
function bsauth(){
	$data['pageTitle']='Authors View';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="bsauth";
	$this->load->view('include/passtemp',$data);
}
function ttachi(){
	$data['pageTitle']='Authors View';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="ttachi";
	$this->load->view('include/passtemp',$data);
}
function flist(){
	$data['uri']=$this->uri->segment(3);
	$data['pageTitle']='Help & Tutorial';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="help";
	$this->load->view('include/passtemp',$data);
}
function plist(){
	$data['uri']=$this->uri->segment(3);
	$data['pageTitle']='Help & Tutorial';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="help";
	$this->load->view('include/passtemp',$data);
}
function payment(){
	$data['uri']=$this->uri->segment(3);
	$data['pageTitle']='Help & Tutorial';
	$data['title']="Umravati Marketing Pvt.Ltd.";
	$data['body']="help";
	$this->load->view('include/passtemp',$data);
}

}
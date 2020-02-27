<?php class common extends CI_Controller{
	function getCity(){
		$state = $this->input->post("state");
		$this->load->model("cmodel");
		$result = $this->cmodel->getCity($state);
	
		echo '<option value="">-City-</option>';
		foreach ($result->result() as $row):
		echo '<option value="'.$row->city.'">'.$row->city.'</option>';
		endforeach;
	}
	
	function getArea(){
		$state = $this->input->post("state");
		$city = $this->input->post("city");
		$this->load->model("cmodel");
		$result = $this->cmodel->getArea($state,$city);
	
		echo '<option value="">-Area-</option>';
		foreach ($result->result() as $row):
		echo '<option value="'.$row->area.'">'.$row->area.'</option>';
		endforeach;
	}
	
	function getPin(){
		$state = $this->input->post("state");
		$city = $this->input->post("city");
		$area = $this->input->post("area");
		$this->load->model("cmodel");
		$result = $this->cmodel->getPin($state,$city,$area);
	
		foreach ($result->result() as $row):
		echo $row->pin;
		endforeach;
	}
	public function sendotp(){
		$mobile=$this->input->post("mob");
		 
		$otp = rand(1000,99999);
		$msg="Your Enquiry OTP is ".$otp.". Please do not share with anyone.";
		$dataarr=array(
				"mobile"=>$mobile,
				"otp"=>$otp
		);
		$this->db->where('mobile',$mobile);
		$chk_m = $this->db->get('otp_master');
		if($chk_m->num_rows()>0)
		{
			$dataarr1=array("otp"=>$otp);
			$this->db->where('mobile',$mobile);
			$insert=$this->db->update("otp_master",$dataarr1);
		}
		else
		{
			$insert=$this->db->insert("otp_master",$dataarr);
		}
		if($insert){
	
			$this->load->helper('sms_helper');
			$dt=	sms($mobile,$msg);
			// print_r($dt);
			if($dt){
				echo "Please Enter Your OTP";
			}else{
				echo "Wrong Number";
			}
		}
	}
	
	public function matchotp(){
		$mobile= $this->input->post("mob");
		$otp= $this->input->post("otp");
	
		$this->db->order_by("mobile","desc");
		$this->db->where("mobile",$mobile);
		$this->db->where("otp",$otp);
		$dt= $this->db->get("otp_master");
		if($dt->num_rows()>0){
			echo "true";
		}
		else{
			echo "false";
		}
	}
	
}


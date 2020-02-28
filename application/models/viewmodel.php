<?php
class Viewmodel extends CI_Model{

  function views($auther_id,$match_id,$tblname){
    $this->db->where($match_id,$auther_id);
    $data=$this->db->get($tblname);
    return $data;


  }
 function insertCustomer($data){
            $query =$this->db->insert('customer_info',$data);
            return $query; 
        }
        
        public function position($data, $id ,$po)
    	{
    			$this->db->where("c_id", $id);
    			$fty =$this->db->get("silver_tree")->row();
    			
    			if(!$fty->$po){
    				$this->db->where("c_id", $id);
    				$this->db->update("silver_tree", $data);
    			$datainsert = array(
    					"c_id"=>$data[$po]
    			);
    			$this->db->insert("silver_tree",$datainsert);
    			$this->db->insert("silver_mbalance",$datainsert);
    			}
    			return true;
    	}
  
  function checkStatus($table,$user){
        	$this->db->where('username',$user);
        	$c_ID=$this->db->get($table);
        	if($c_ID->num_rows()>0){
        		$data = array(
        		'msg' =>  '<div class ="alert alert-success">'.$c_ID->row()->customer_name.'</div>',
        		'checkv'=>true		
        	);
        	}else{
        		$data=array(
        		'msg'=> '<div class ="alert alert-danger">Wrong sponsor UserID. </div>',
        		"checkv"=>false		
        		);
        			}
        			return $data;	
        }
  	
  public function checkjoinerid($tid,$pass){
			    
    $this->db->where("username",$tid);
      $this->db->where("password",$pass);
    $this->db->where("status",1);
    $rw= $this->db->get("customers");
    return $rw;

}

function getrowid($username){
 // $this->db->where("username",$username);
  $getrow = $this->db->get("customer_info")->row()->id;
  return $getrow;
}


function cust_max($tblnm){
  $this->db->select_max('id');
  $this->db->from($tblnm);
  $maxid=$this->db->get();
  if($maxid->num_rows()>0){
    return $maxid->row()->id;
  }else{
    return 1; 
  }
}
public function selectlegleft($data1){
  //  $returndata = array();

  $this->db->where("c_id", $data1);
  $rowdata = $this->db->get("silver_tree")->row();
  if ($rowdata) {

    if ($rowdata->left) {
      $returndata= $this->selectlegleft($rowdata->left);
    } else {
      $returndata= $rowdata->c_id;

    }
    return $returndata;

  }

}

public function selectlegright($data1){
  // $returndata = array();

  $this->db->where("c_id", $data1);
  $rowdata = $this->db->get("silver_tree")->row();
  if ($rowdata) {
    if ($rowdata->right) {
      $returndata= $this->selectlegright($rowdata->right);
    } else {
      $returndata = $rowdata->c_id;
    }
    return $returndata;
  }
}

}
?>
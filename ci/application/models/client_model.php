<?php

class client_model extends CI_Model{
	public function __construct()
  	{
    $this->load->database();
 	}
	function addclient(){
		$first_name=$_POST['fn'];
		$last_name=$_POST['ln'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$query = $this->db->query("INSERT into users (Email,Password,Role_ID) VALUES('$email',1234567,2)");
		if($query){
		$query = $this->db->query("Select User_ID from users where Email='$email'");
		$row = $query->row_array();
		$uid = $row['User_ID'];
		$data = array('First_Name'=>$first_name,
		'Last_Name'=>$last_name,
		'Email'=>$email,
		'Phone'=>$phone,
		'User_ID'=>$uid);
		$this->db->insert("client",$data);
		echo "<script>alert('Sucessfully Registered.');</script>";
		return true;
		}
		else{
		echo "<script>alert('Registration Failed.');
              window.location = 'client';</script>";
			}
		}
	}
?>

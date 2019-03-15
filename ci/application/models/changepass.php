<?php

class changepass extends CI_Model{
	public function __construct()
  	{
    $this->load->database();
 	 }

	function login(){
		$email = $_POST['email'];
		$password = $_POST['newpass'];
		$this->db->where('email', email);
		$query=$this->db->update('users',array('password'=>$password));
		if($query){
		echo"<script>alert('Updated Password successfully');</script>";
		return true;
		}
		else{
		echo"<script>alert('Error');</script>";
		}
		}
}

?>

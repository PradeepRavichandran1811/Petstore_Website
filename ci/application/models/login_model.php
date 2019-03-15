<?php

class login_model extends CI_Model{
	public function __construct()
  	{
    $this->load->database();
 	 }

	function login(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query=$this->db->get_where('users',array('email'=> $email, 'password'=>$password));
		$count = $query->num_rows();
		if($count==1){
		$this->db->select('Role_ID');
		$query1=$this->db->get_where('users',array('email'=>'email'));
		$row = $query->row_array();
		return $row['Role_ID'];
		}
		}
	function insert($data){

	}
}

?>

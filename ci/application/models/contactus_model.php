<?php
class contactus_model extends CI_Model{
	public function __construct()
  {
    $this->load->database();
  }
function insert($data){

	$this->db->insert("contactus",$data);
}
}
?>

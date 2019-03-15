<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petstore_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->library('form_validation');
	}
	public function contactus()
	{
		$this->load->view('petstore');
	}

	public function newcontact()
      {

        $this->load->library('form_validation');

        $this->form_validation->set_rules("fn","First Name",'required|alpha');
        $this->form_validation->set_rules("ln","Last Name",'required|alpha');
        $this->form_validation->set_rules("email","E-mail",'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules("comments","Comments",'required');

        if ($this->form_validation->run())
          {
            $this->load->model("contactus_model");
            $data=array(
              "First_Name" =>$this->input->post("fn"),
              "Last_Name" =>$this->input->post("ln"),
              "Email" =>$this->input->post("email"),
              "Phone" =>$this->input->post("phone"),
              "Comments" =>$this->input->post("comments")
             );
            $this->contactus_model->insert($data);
            echo"<script>alert('Contact Form Submitted !');window.location='contactus';</script>";
          }
          else{
            $this->load->helper(array('url','form'));
            $this->load->view('contactus');
             }

      }

	public function aboutus()
	{
		$this->load->view('aboutus');
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","Email",'required|valid_email');
		$this->form_validation->set_rules("password","Password",'required');
		if($this->form_validation->run()==False){

		}
		else{
		}
		$this->load->view('login');
	}

	public function loginvalidation()
	{
		$this->load->helper('form');
		$this->load->model('login_model');
		$data = array('email'=>$this->input->post('email'),
		'password'=>$this->input->post('password')
		);
		$res = $this->login_model->login($data);
		if($res==1){
		$this->load->view('business');
		$data = array('email'=>$this->input->post('email'));
		$this->session->set_userdata($data);
		}
		else{
		$this->load->view('clienthome');
		$this->session->set_userdata($data);

		}
	}

		public function clientvalidation()
	{
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->library('form_validation');
        $this->form_validation->set_rules("fn","First Name",'required|alpha');
        $this->form_validation->set_rules("ln","Last Name",'required|alpha');
        $this->form_validation->set_rules("email","E-mail",'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'regex_match[/^[0-9]{10}$/]');
        if ($this->form_validation->run())
          {
		$this->load->model('client_model');
		$data = array('Email'=>$this->input->post('email'),
		'Password'=>1234567,
		'Role_ID'=>2 );
		$this->client_model->addclient($data);

		$this->load->library('email');

	 	$this->email->from('prpradeepnadal8@gmail.com', 'Pradeep');
		$this->email->to($this->input->post('email'));
		$this->email->subject('Password for Petstore Account');
		$this->email->message('Hello, your password is 1234567');
		if($this->email->send()){
		echo"<script>alert('Mail Sent');
		window.location='client';</script>";
		}else{
		echo"<script>alert('Mail Sending Failed');
		window.location='client';</script>";
		echo $this->email->print_debugger();
		}
		}
		else{
            $this->load->helper(array('url','form'));
            $this->load->view('client');
             }

	}
	public function client()
	{
		$this->load->view('client');
	}

	public function service()
	{
		$this->load->view('service');
	}

	public function servicevalidation()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->form_validation->set_rules("fn","First Name",'required|alpha');
        $this->form_validation->set_rules("ln","Last Name",'required|alpha');
        $this->form_validation->set_rules("email","E-mail",'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules("businessname","Business Name",'alpha');

        if ($this->form_validation->run())
          {
		$this->load->model('service_model');
		$data = array('Email'=>$this->input->post('email'),
		'Password'=>1234567,
		'Role_ID'=>2 );
		$this->service_model->addservice($data);

		$this->load->library('email');

	 	$this->email->from('prpradeepnadal8@gmail.com', 'Pradeep');
		$this->email->to($this->input->post('email'));
		$this->email->subject('Password for Petstore Account');
		$this->email->message('Hello, your password is 1234567');
		if($this->email->send()){
		echo"<script>alert('Mail Sent');
		window.location='service';</script>";
		}else{
		echo"<script>alert('Mail Sending Failed');
		window.location='service';</script>";
		echo $this->email->print_debugger();
		}
		}
		else{
            $this->load->helper(array('url','form'));
            $this->load->view('service');
             }
	}

	public function changepassword(){
		$this->load->view('changepassword');
		}
	public function changepasswordvalidation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","Email",'required|valid_email');
		$this->form_validation->set_rules("newpass","Password",'required');
		$this->form_validation->set_rules("confirmpass","Password",'required');
		if($this->form_validation->run()){
		$this->load->model('changepass');
		}
		else{
		$this->load->view('changepassword');
		}
		}

	public function logout(){
		$this->session->unset_userdata('email');
		redirect('Petstore_Controller/login');
		}
	}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		//begin session
		$vuser = $this->session->userdata('username');
		if( !($vuser!="") ) {
			redirect(base_url() . "user/login");
		}
		//end session
	}

	public function index(){

		$fullname = 'Amanda Testname';
		$data = array('title' => 'AdminChurc | Login',
			'message' => 'Hola',
			'info' => 'nothing',
			'username' => $fullname
			);
		//$this->load->view("login/login", $data);
		$this->load->view("user/login", $data);
		//$this->load->view("sections/footer");
	}

	public function dologin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array('email'=>$email,
			'id' => 30,
			'login' => false
		);
		$this->session->set_userdata($data);
		echo $this->session->userdata('id');
		if ($email=='rsantiestevan.work@gmail.com'){
			echo $email.' '.'OK';
		}else{
			echo $email.' '.'NO';
		}
	}

}

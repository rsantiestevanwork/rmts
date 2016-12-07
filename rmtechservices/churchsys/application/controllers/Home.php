<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();

	}

	public function index($info ='') {
		$data = array('title' => 'Home',
		'message' => 'Hola mundo test 1234',
		'info' => $info);
		//$this->load->view("test", $data);
		$this->load->view("sections/head",$data);
		$data = array('username' => 'Amanda Testname');
		$this->load->view("sections/header",$data);
		$this->load->view("sections/nav",$data);

		//$result = $this->db->get("tbl_test");
		$this->load->model('status_model');
		$result = $this->status_model->getStatus();
		$data = array('consulta' => $result );
		$this->load->view("sections/content", $data);
		$this->load->view("sections/footer");

	}

}
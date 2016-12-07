<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Link extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//begin session
		$vuser = $this->session->userdata('username');
		if( !($vuser!="") ) {
			redirect(base_url() . "user/login");
		}
		//end session
	}

	public function index($info=''){

		echo "este es un mensaje desde el controlador link";
	}


}
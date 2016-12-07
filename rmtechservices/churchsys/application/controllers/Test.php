<?php

/**
* 
*/
class Test extends CI_Controller
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

	public function index()
	{
		//I'm just using rand() function for data example
        $code = rand(10000, 99999);
        $val = $this->set_barcode($code);
        echo ("<img scr='".$val."' />");
	}

	private function set_barcode($code=0)
    {
        //load library
        $this->load->library('Zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');
        //generate barcode
            //$file = Zend_Barcode::render('code39', 'image', array('text'=>$code), array());
        $file = Zend_Barcode::draw('code128', 'image', array('text'=>$code), array());
        $codef = $code.'-'.time();
        $codef = "barcode/{$codef}.png";
        $store_image = imagepng($file,$codef);
        return base_url().$codef;
        //imagejpeg($file,'barcode.jpg',100);
    }
}

?>
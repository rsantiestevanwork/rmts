<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class DataCard extends CI_Controller
{
    public function __construct()
    {
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
        $data = array(
            'title' => 'AdminChurc',
            'message' => 'Hola',
            'info' => 'nothing',
            'username' => $fullname
        );

        $this->load->view("sections/head", $data);
        $this->load->view("sections/header", $data);
        $this->load->view("sections/nav", $data);

        $this->load->model('datacard_model');

        $result = $this->datacard_model->getDatacardStatus();

        $this->load->library('statuslib'); 
        $mycolor = $this->statuslib->getColors();

        $data = array(
            'consulta'	=> $result,
            'mcolor'	=> $mycolor
            );

        $this->load->view("datacard", $data);
        $this->load->view("sections/footer");

    }

    public function edit($code=0){
        $data = array('title' => 'Edit',
        'message' => 'Hola mundo test 1234',
        'info' => 'nothing');
        $this->load->view("sections/head",$data);
        $data = array('username' => 'Amanda Testname');
        $this->load->view("sections/header",$data);
        $this->load->view("sections/nav",$data);
        //put data of mdatacard
        $this->load->model('datacard_model');
        $mydatacard = $this->datacard_model->getDatacardById($code);

        $this->load->model('status_model');
        $mystatus = $this->status_model->getStatusByDatacard($code);
        $this->load->model('imagencard_model');
        $myimages = $this->imagencard_model->getImageByDatacard($code);

        $this->load->library('statuslib');
        $mycolor = $this->statuslib->getColors();
        $myoptions = $this->statuslib->getOptionsSelect();

        $data = array(
            'mydatacard'	=> $mydatacard,
            'mystatus'		=> $mystatus,
            'myimages'		=> $myimages,
            'mcolor' 		=> $mycolor,
            'moptions' 		=> $myoptions
            );
        $this->load->helper('form');//loading form helper
        $this->load->view("datacardedit", $data);
        $this->load->view("sections/footer");
    }

    public function modify()
    {
        //get postdata
        $post = $this->input->post();
        $idnumber = $this->input->post('txtcode');
        $this->load->model('status_model');
        $bool = $this->status_model->insertPost($post);
        //echo $bool;
        if($bool){
                //header("Location: ". base_url()."datacard/edit/".$temp);
            echo $idnumber;
        }else{
                //header("Location: ". base_url()."datacard/index/");
            echo $bool;
        }
    }

    public function doData(){
        $this->gesRequestExt();
    }
	
    public function gesRequestExt(){
        $post = $this->input->post();
        //result 
        $result = array('status'=>'nothing');
        //print json_encode($result);
        $this->load->model('datacard_model');
        
        //$result['mensaje']=$this->mdatacard->manageDataCardExt($post);
        $result = $this->datacard_model->manageDataCardExt($post);
        
        print_r(json_encode($result));
    }

	public function doMyData(){
		print "Do My Data..!";
	}

	public function showCard($code=0){
		$vbarcode = $this->generateBarcode($code);
		$this->load->model('datacard_model');
		$vuserdata = $this->datacard_model->getDatacardById($code);
		//now send the images
		$this->load->model('imagencard_model');
		$vimages = $this->imagencard_model->getImageByDatacard($code);

		$data = array(
			'barcode'	=> $vbarcode,
			'userdata'	=> $vuserdata,
			'images'	=> $vimages
			);
		$this->load->view("Card",$data);	
	}

    public function printCard($code=0){
        if($code!=0){
            $vbarcode = $this->generateBarcode($code);
            $this->load->model('datacard_model');
            $vuserdata = $this->datacard_model->getDatacardById($code);
            //now send the images
            $this->load->model('imagencard_model');
            $vimages = $this->imagencard_model->getImageByDatacard($code);

            $data = array(
                'barcode'	=> $vbarcode,
                'userdata'	=> $vuserdata,
                'images'	=> $vimages
                );
            $html = $this->load->view("Card", $data, true);
            //now create pdf
            $dir = base_url().'barcode/';
            $filename = $dir.'file00'.$code.'00.pdf';
            $filetemp = substr(md5(mt_rand()),0,20).'.html';
            if( file_put_contents($filetemp, $html) ) {
                $execresult = shell_exec(
		"/home/diplomat213/theidc-pdfconverter/wkhtmltopdf -T 0 -L 0 -R 0 -B 0  --dpi 300 --page-height 54mm --page-width 85.6mm $filetemp $filename");
            }
            echo "<a href='".$filename."'>Download Document</a>";
            //
        }
    }

	private function generateBarcode($code)
    {
        //load library
        $this->load->library('Zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');
        //generate barcode
        $file = Zend_Barcode::draw('code128', 'image', array('text'=>$code), array());
        //$codef = $code.'-'.time();
        $codef = $code;
        $codef = "barcode/{$codef}.png";
        $store_image = imagepng($file,$codef);
        return base_url().$codef;
    }
    
}
//end the class
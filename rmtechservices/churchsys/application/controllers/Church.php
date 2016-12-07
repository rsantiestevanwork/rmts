<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 08:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Church extends CI_Controller
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
        $data = array('title' => 'Index',
            'message' => 'Hola',
            'info' => 'nothing');

        $this->load->view("sections/head",$data);
        $fullname = 'Amanda Testname';
        $data = array('username' => $fullname);
        $this->load->view("sections/header",$data);
        $this->load->view("sections/nav",$data);

        $this->load->model('church_model');
        //$result = $this->mdatacard->getDatacard();
        $result = $this->church_model->getList();

        $data = array(
            'consulta'	=> $result
        );
        $this->load->view("church/list", $data);
        $this->load->view("sections/footer");

    }

    public function newchurch(){
        $this->edit(0);
    }
    public function edit($code=0){

        $data = array('title' => 'Index',
            'message' => 'Hola',
            'info' => 'nothing');

        $this->load->view("sections/head",$data);
        $fullname = 'Amanda Testname';
        $data = array('username' => $fullname);
        $this->load->view("sections/header",$data);
        $this->load->view("sections/nav",$data);

        $this->load->model('church_model');

        $result = $this->church_model->getById($code);

        $data = array(
            'consulta'	=> $result
        );

        //$this->load->helper('form');//loading form helper
        $this->load->helper('form');//loading form helper
        $this->load->view("church/form", $data);

        $this->load->view("sections/footer");
    }

    public function modify()
    {
        //get postdata
        $post = $this->input->post();
        $idnumber = $this->input->post('txtcode');
        $this->load->model('church_model');
        $bool = FALSE;
        if($idnumber===""){
            $bool = $this->church_model->insert_church($post);
        }else{
            $bool = $this->church_model->modify_church($post);
        }

        //echo $bool;
        if($bool){
            //header("Location: ". base_url()."datacard/edit/".$temp);
            echo $idnumber;
        }else{
            //header("Location: ". base_url()."datacard/index/");
            echo 'new';
        }
    }


}
//end of file
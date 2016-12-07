<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 14:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Program extends CI_Controller
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

        $this->load->view("sections/head",$data);
        $this->load->view("sections/header",$data);
        $this->load->view("sections/nav",$data);

        $this->load->model('program_model');
        $result = $this->program_model->getList();
        $data = array(
            'consulta'	=> $result
        );
        $this->load->view("program/list", $data);

        $this->load->view("sections/footer");

    }

    public function newprogram(){
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

        $this->load->model('program_model');

        $result = $this->program_model->getById($code);

        $data = array(
            'consulta'	=> $result
        );

        //$this->load->helper('form');//loading form helper
        $this->load->helper('form');//loading form helper
        $this->load->view("program/form", $data);

        $this->load->view("sections/footer");
    }

    //method to modify and insert the form
    public function modify()
    {
        //get postdata
        $post = $this->input->post();
        $idnumber = $this->input->post('txtcode');
        $this->load->model('program_model');
        $bool = FALSE;
        if($idnumber===""){
            $bool = $this->program_model->insert_program($post);
        }else{
            $bool = $this->program_model->modify_program($post);
        }

        //echo $bool;
        if($bool){
            //header("Location: ". base_url()."datacard/edit/".$temp);
            echo $idnumber;
        }else{
            //header("Location: ". base_url()."datacard/index/");
            echo $bool;
        }
    }

    public function report_by_date(){
        //*** Get Church of User
        $this->load->model('user_model');
        $data = array('login'=>$this->session->userdata('username'));
        $ruser = $this->user_model->getByLogin($data);


        //*** po ***
        $this->load->model('program_model');
        //$result = $this->program_model->getList();
        $result = $this->program_model->get_list_by_church($ruser->idchurch);

        $fullname = 'Amanda Testname';
        $data = array('title' => 'AdminChurc | Login',
            'message' => 'Hola',
            'info' => 'nothing',
            'username' => $fullname,
            'consulta' => $result
        );

        $this->load->view("sections/head",$data);
        $this->load->view("sections/header",$data);
        $this->load->view("sections/nav",$data);
        $this->load->view("program/report_by_date", $data);
    }

}
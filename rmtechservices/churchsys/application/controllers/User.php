<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 22/09/2016
 * Time: 16:02
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();

    }

    public function index()
    {
        //begin session
        $vuser = $this->session->userdata('username');
        if( !($vuser!="") ) {
            redirect(base_url() . "user/login");
        }
        //end session

        $fullname = 'Amanda Testname';
        $data = array('title' => 'AdminChurc  Login',
            'message' => 'Hola',
            'info' => 'nothing',
            'username' => $fullname
        );

        $this->load->view("sections/head",$data);
        $this->load->view("sections/header",$data);
        $this->load->view("sections/nav",$data);

        $this->load->model('user_model');

        $result = $this->user_model->getList();

        $data = array(
            'consulta'	=> $result
        );
        $this->load->view("user/user", $data);
        $this->load->view("sections/footer");

    }

    public function login(){
        if($this->session->userdata('username')){
            redirect('home');
        }

        $fullname = 'Amanda Testname';
        $data = array('title' => 'AdminChurc | Login',
            'message' => 'Hola',
            'info' => 'nothing',
            'username' => $fullname
        );
        //$this->load->view("sections/head",$data);
        //$this->load->view("sections/header",$data);
        //$this->load->view("sections/nav",$data);
        //$this->load->view("login/login", $data);
        $this->load->view("user/login", $data);
        //$this->load->view("sections/footer");
    }
    //register
    public function register(){
        echo ("method register");
    }
    //get password
    public function forgot_password(){
        echo ("method forgot passsword");
    }
    //method to do login
    public function doLogin(){
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        $this->load->model('user_model');
        $data=$this->user_model->getData();
        $data['login'] = $login;
        $data['password'] = $password;
        if($this->user_model->login($data)){
            $result = $this->user_model->getByLogin($data);
            //echo($result->login.''.$result->name);
            //create sessions
            $this->session->set_userdata('username', $result->login);
            //redirect to welcome
            redirect(base_url());
        }else{
            echo('not found');
        }
        /*
        $data = array('login'=>$login,
            'id' => 30,
            'login' => false
        );
        $this->session->set_userdata($data);
        echo $this->session->userdata('id');
        if ($login=='rsantiestevan.work@gmail.com'){
            echo $login.' '.'OK';
        }else{
            echo $login.' '.'NO';
        }
        */
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

// end of User Control

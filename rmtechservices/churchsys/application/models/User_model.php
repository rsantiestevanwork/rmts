<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class User_model extends CI_Model
{
    private $table = 'tbl_user';

    //Get the data empty for use in the rest of class
    public function getData(){
        $data = array(
            'iduser' => '',
            'login' => '',
            'password' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'url' => '',
            'registered' => '',
            'useractivation' => '',
            'userstatus' => '',
            'idchurch' => '',
            'idrole' => ''
        );
        return $data;
    }

    //Function Insert
    //$data: argument whit the data
    public function insert($data=null){
        $result = false;
        if($data != null){
            $result = $this->db->insert($this->table, $data);
        }
        return $result;
    }

    // Read data using username and password
    public function login($data){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('login', $data['login']);
        $this->db->where('password', md5($data['password']));
        //$this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() === 1) {
            return true;
        } else {
            return false;
        }
    }

    //Register user in the database
    public function register($data){
        // Query to check whether username already exist or not
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('login', $data['login']);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() === 0) {
            // Query to insert data in database
            $this->db->insert($this->table, $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    // Read data from database to show data in admin page
    public function getByLogin($data) {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('login', $data['login']);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return null;
        }
    }

    //get list
    public function getList(){
        return $this->db->get($this->table)->result();
    }
    //get by Id
    public function getById($id=0){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('iduser', $id);
        $query = $this->db->get();

        $row = $query->row();
        $data = $this->getData();
        if (isset($row))
        {
            $data['iduser'] = $row->id;
            $data['login'] = $row->login;
            $data['password'] = $row->password;
            $data['firstname'] = $row->firstname;
            $data['lastname'] = $row->lastname;
            $data['email'] = $row->email;
            $data['url'] = $row->url;
            $data['registered'] = $row->registered;
            $data['useractivation'] = $row->useractivation;
            $data['userstatus'] = $row->userstatus;
            $data['idchurch'] = $row->idchurch;
            $data['idrole'] = $row->idrole;
        }
        return $data;
    }


}
//End of Class
<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 09:20
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Church_model extends CI_Model
{
    private $table = 'tbl_church';

    //Get the data empty for use in the rest of class
    public function getData(){
        $data = array(
            'idchurch' => '',
            'name' => '',
            'description' => '',
            'url' => '',
            'email' => '',
            'address' => ''
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

    public function getList(){
        return $this->db->get($this->table)->result();
    }
    public function getById($id=0){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('idchurch', $id);

        $query = $this->db->get();

        $row = $query->row();
        $data = $this->getData();
        if (isset($row))
        {
            $data['idchurch'] = $row->idchurch;
            $data['name'] = $row->name;
            $data['description'] = $row->description;
            $data['url'] = $row->url;
            $data['email'] = $row->email;
            $data['address'] = $row->address;
            $data['registerdate'] = $row->registerdate;
        }
        return $data;
    }

    public function insert_church($post=null)
    {
        $result=false;
        $data = $this->getData();
        if($post != null)
        {
            $data['idchurch'] = $post['txtcode'];
            $data['name'] = $post['txtname'];
            $data['description'] = $post['txtdescription'];
            $data['url'] = $post['txturl'];
            $data['email'] = $post['txtemail'];
            $data['address'] = $post['txtaddress'];
            $data['registerdate'] = date('Y-m-d H:i:s');
            $result = $this->db->insert($this->table, $data);

        }
        return $result;
    }
    public function modify_church($post=null){
        $result=false;
        $data = $this->getData();
        if($post != null)
        {
            $data['idchurch'] = $post['txtcode'];
            $data['name'] = $post['txtname'];
            $data['description'] = $post['txtdescription'];
            $data['url'] = $post['txturl'];
            $data['email'] = $post['txtemail'];
            $data['address'] = $post['txtaddress'];

            //$data['descriptino'] = date('Y-m-d H:i:s');
            $this->db->where('idchurch', $post['txtcode']);
            $result = $this->db->update($this->table, $data);

        }
        return $result;
    }


}
//End of Class
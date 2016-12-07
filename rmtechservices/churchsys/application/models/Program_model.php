<?php
/**
 * Created by PhpStorm.
 * User: rsantiestevan
 * Date: 28/09/2016
 * Time: 15:32
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Program_model extends CI_Model
{
    private $table = 'tbl_program';

    //Get the data empty for use in the rest of class
    public function getData(){
        $data = array(
            'idprogram' => '',
            'name' => '',
            'totalna' => '',
            'menna' => '',
            'womenna' => '',
            'childna' => '',
            'typeservice' => '',
            'dateservice' => '',
            'timeservice' => '',
            'idchurch' => ''
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

    //idprogram, name, totalna, menna, womenna, childna, typeservice, dateservice, timeservice, idchurch
    public function getList(){
        return $this->db->get($this->table)->result();
    }

    // this method get the list only by church
    public function get_list_by_church($idchurch=0){

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('idchurch', $idchurch);
        $query = $this->db->get();
        return $query->result();

    }

    public function getById($id=0){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('idprogram', $id);
        $query = $this->db->get();
        $row = $query->row();
        $data = $this->getData();
        if (isset($row))
        {
            $data['idprogram'] = $row->idprogram;
            $data['name'] = $row->name;
            $data['totalna'] = $row->totalna;
            $data['menna'] = $row->menna;
            $data['womenna'] = $row->womenna;
            $data['childna'] = $row->childna;
            $data['typeservice'] = $row->typeservice;
            $data['dateservice'] = $row->dateservice;
            $data['timeservice'] = $row->timeservice;
            $data['idchurch'] = $row->idchurch;
        }
        return $data;
    }

    public function insert_program($post=null)
    {
        $result=false;
        $data = $this->getData();
        if($post != null)
        {
            $data['idprogram'] = $post['txtcode'];
            $data['name'] = $post['txtname'];
            $data['totalna'] = $post['txttotalna'];
            $data['menna'] = $post['txtmenna'];
            $data['womenna'] = $post['txtwomenna'];
            $data['childna'] = $post['txtchildna'];
            $data['typeservice'] = $post['txttypeservice'];
            $data['dateservice'] = date('Y-m-d H:i:s',  strtotime(str_replace('-', '/', $_POST['txtdateservice'])));
            $data['timeservice'] = $post['txttimeservice'];
            $data['idchurch'] = $post['txtidchurch'];
            //$data['descriptino'] = date('Y-m-d H:i:s');
            $result = $this->db->insert($this->table, $data);
        }
        return $result;
    }
    public function modify_program($post=null){
        $result=false;
        $data = $this->getData();
        if($post != null)
        {
            $data['idprogram'] = $post['txtcode'];
            $data['name'] = $post['txtname'];
            $data['totalna'] = $post['txttotalna'];
            $data['menna'] = $post['txtmenna'];
            $data['womenna'] = $post['txtwomenna'];
            $data['childna'] = $post['txtchildna'];
            $data['typeservice'] = $post['txttypeservice'];
            $data['dateservice'] = date('Y-m-d H:i:s',  strtotime(str_replace('-', '/', $_POST['txtdateservice'])));
            $data['timeservice'] = $post['txttimeservice'];
            $data['idchurch'] = $post['txtidchurch'];

            //$data['descriptino'] =
            $this->db->where('idprogram', $post['txtcode']);
            $result = $this->db->update($this->table, $data);

        }
        return $result;
    }

}
//End of Class
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Imagencard_model extends CI_Model
{
	private $table = "bcnc_imagecard";
        
	public function getImagecard(){
		# code...
	}

	public function getImageByDatacard($data=null){
            $sql='';
            $query='';
            $result=false;
            if($data!=null){
                //$sql = "SELECT * FROM ".$this->table." WHERE id=$codeData ORDER BY type";
                $sql = "SELECT * FROM ".$this->table." WHERE id=".$data." ORDER BY type;";
                $query = $this->db->query($sql);
                $result = $query->result();
            }
            return $result;
	}
        
	public function getImageByIdType($data){
            $res = null;
            $sql = "SELECT * FROM ".$this->table." WHERE id=".$data['id']." AND type=".$data['type'].";";
            $query = $this->db->query($sql);
            $row = $query->row();
            if (isset($row)){
                $res = $row;
            }
            return $res;
	}
	//Insert image
	public function insert($data=null){
            $result = false;
            if($data!=null){
                $sql ="INSERT INTO ".$this->table." (id, type, length, url) VALUES (".$data['id'].", ".$data['type'].", ".$data['length'].", '".$data['url']."');";
                $result = false;
                if($this->db->query($sql))
                {
                    $result = true;
                }
            }
            return $result;
	}
	//modify image
	public function modify($data=null){
            $result = false;
            $res = null;
            if($data!=null){

                //$where = "id = ".$data['id']." AND type = ".$data['type'];
                $where = array('id' => intval($data['id']) , 'type' => intval($data['type']));
                $sql = $this->db->update_string($this->table, $data, $where).";";
                //$res = $this->db->update($this->table, $data, $where);
                if(!$this->db->simple_query($sql)){
                    $error = $this->db->error(); // Has keys 'code' and 'message'
                    print_r($error);
                }else{
                    $result = true;
                }
            }
            return $result;
	}

	//Get the data empty for use in the rest of class
	public function getData(){
            $data = array(
                'id' => '',
                'type' => '',
                'length' => '',
                'picture' => '',
                'url' => ''
            );
            return $data;
	}
	
}
?>
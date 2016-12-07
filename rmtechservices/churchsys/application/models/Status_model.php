<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Status_model extends CI_Model
{
    private $table = 'bcnc_status';

    public function getStatus(){
        //return $this->db->get("bcnc_status");
        return $this->db->get($this->table);
    }

    public function getStatusByDatacard($codeData=0){
            //return $this->db->get("bcnc_status");
        $sql ="SELECT * FROM ".$this->table." WHERE idnumber=".$codeData." ORDER BY idstatus desc;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getStatusByData($codeData=0){
        $sql ="SELECT * FROM ".$this->table." WHERE idnumber=".$codeData.";";
        $query = $this->db->query($sql);
        $row = $query->row();
        $data = $this->getData();
        if (isset($row))
        {
            $data['idstatus'] = $row->idstatus;
            $data['idnumber'] = $row->idnumber;
            $data['userid'] = $row->userid;
            $data['statusdate'] = $row->statusdate;
            $data['status'] = $row->status;
            $data['reason'] = $row->reason;
        }
        return $data;
    }

    //Function use in DatacardEdit 
    public function insertPost($post=null)
    {
            $result=false;
            $data = $this->getData();
            if($post != null)
            {
                    $data['idnumber'] = $post['txtcode'];
                    $data['userid'] = $post['userid'];
                    $data['statusdate'] = date('Y-m-d H:i:s');
                    $data['status'] = $post['txtstatus'];
                    $data['reason'] = $post['txtreason'];
                    if($this->isDatacardStatus($data)){
                            $sql ="INSERT INTO ".$this->table." (idnumber, userid, statusdate, status, reason) VALUES(".$data['idnumber'].", ".$data['userid'].", now(), '".$data['status']."', '".$data['reason']."');";
                            $result=false;
                            if($this->db->query($sql))
                            {
                                    $result=true;
                            }
                    }
            }
            return $result;
    }

	private function isDatacardStatus($data=null){
            $result = false;
            if($data != null){
                    $sql = "SELECT status FROM ".$this->table." WHERE (idnumber=".$data['idnumber'].") ORDER BY idstatus desc limit 1;";
                    $vstatus = $this->db->query($sql)->row();
                    if (isset($vstatus)){
                            if($vstatus->status!=$data['status']){
                                    $result = true;
                            }
                    }else{
                            $result =true;
                    }
            }
            return $result;
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
	//Get the data empty for use in the rest of class
	private function getData(){
            $data = array(
                    'idstatus' => '',
                    'idnumber' => '',
                    'userid' => '',
                    'statusdate' => '',
                    'status' => '',
                    'reason' => ''
                    );
            return $data;
	}
}

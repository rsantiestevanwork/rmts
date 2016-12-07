<?php

/**
* 
*/
class Datacard_model extends CI_Model
{
    private $table = 'bcnc_datacard';

    public function getDatacard(){
        //return $this->db->get("bcnc_datacard");
    	return $this->db->get($this->table);
    }
    public function getDatacardStatus(){
        //return $this->db->get("bcnc_datacard");
        $query = $this->db->query("select idnumber, title, firstname, surname, nationality, gender, dateofbirth, expirydate, (select bcnc_status.status from bcnc_status where bcnc_status.idnumber=$this->table.idnumber order by bcnc_status.idstatus desc limit 1) as status from $this->table; ");
        $rows = $query->result();
        return $rows;
    }
	
    public function getDatacardById($id){
        $query = $this->db->query("SELECT * FROM $this->table WHERE idnumber=$id");

        $row = $query->row();
        $data = $this->getData();
        if (isset($row))
        {
            $data['idnumber'] = $row->idnumber;
            $data['firstname'] = $row->firstname;
            $data['surname'] = $row->surname;
            $data['address1'] = $row->address1;
            $data['address2'] = $row->address2;
            $data['residence'] = $row->residence;
            $data['nationality'] = $row->nationality;
            $data['gender'] = $row->gender;
            $data['height'] = $row->height;
            $data['expirydate'] = $row->expirydate;
            $data['dateofbirth'] = $row->dateofbirth;
            $data['title'] = $row->title;
        }
        return $data;
    }
	
    public function manageDataCardExt($post=null){
        $data = $this->getData();
        $result = array('status'=>'nothing');
        if($post != null){
            $data['firstname'] = $post['bcn_card_first_name'];
            $data['surname'] = $post['bcn_card_last_name'];
            $data['address1'] = $post['txtArea_bcn_card_address'];
            $data['address2'] = $post['bcn_card_postcode'];
            $data['residence'] = $post['bcn_card_residence'];
            $data['nationality'] = $post['nationality'];
            $data['gender'] = $post['gender'];
            $data['height'] = $post['height'];
            $data['dateofbirth'] = date("Y-m-d", strtotime($post['bcn_card_dob']));
            $data['title'] = $post['bcn_card_title'];
            $data['userid'] = $post['user_id'];

            $res = $this->registerDatacard($data);
            if(isset($res)){
                $idata = array(
                        'id' => intval($res->idnumber),
                        'type'  => '1',
                        'length' => 1,
                        'picture' => null,
                        'url'   => $post['picture']
                    );
                $resi = $this->insertImage($idata);
                $idata['type'] = 2;
                $idata['picture'] = null;
                $idata['url'] = $post['sign'];
                $resi = $this->insertImage($idata);
            //get result finally
            /*
                //now we need to insert the images into database.
                //insert picture
                $idata = array(
                        'id' => $result->idnumber,
                        'type'  => '1',
                        'length' => 1,
                        'content' => '',
                        'url'   => $post['picture']
                    );
                $res = $this->insertImage($idata);
                //insert sign
                //$content = file_get_contents($post('sign'));
                $idata['type'] = 2;
                $idata['content'] = '';
                $idata['url'] = $post['sign'];
                $res = $this->insertImage($idata);
                
                $result =$res;
            }
            */
                $result = $res;
            }
        }
        return $result;
    }
    
    public function registerDatacard($data=null){
        $result = false;
        if($data!=null){
            $res = $this->getDatacardByUserId($data);
            if(isset($res)){
                $data['idnumber'] = $res->idnumber;
                $res = $this->modify($data);
            }else{
                $res = $this->insert($data);
                $res = $this->getDatacardByUserId($data);
                if(isset($res)){
                    $data['idnumber'] = $res->idnumber;
                    $res = $this->insertFormRequest($data);
                }
            }
            $result = $this->getDatacardByUserId($data);
        }
        return $result;
    }
    
    public function insertImage($data=null){
        $res = false;
        //load the images model
        $this->load->model('mimagecard');
        if($data!=null){
            $result = $this->mimagecard->getImageByIdType($data);
            if (isset($result)){
                $result = $this->mimagecard->modify($data);
            }else{
                $result = $this->mimagecard->insert($data);
            }
            $res = $this->mimagecard->getImageByIdType($data);
        }       
        return $res;
    }

    public function getDatacardByUserId($data){
        
        $sql = "SELECT idnumber, title, firstname, surname, nationality, gender, dateofbirth, expirydate, userid";
        $sql .= ", (select bcnc_status.status from bcnc_status where bcnc_status.idnumber=".$this->table.".idnumber order by bcnc_status.idstatus desc limit 1) as status ";
        $sql .= ", (select bcnc_status.reason from bcnc_status where bcnc_status.idnumber=".$this->table.".idnumber order by bcnc_status.idstatus desc limit 1) as reason ";
        $sql .= "from ".$this->table. " where (".$this->table.".userid=".$data['userid'].");";
        
        $res = $this->db->query($sql);
        $result = $res->row();
        return $result;
    }

    public function insert($data){
        $result = $this->db->insert($this->table, $data);
        //insert status
        return $result;
    }
    private function insertFormRequest($data){
        $sdata = array(
            'idstatus' =>'',
            'idnumber' => $data['idnumber'],
            'userid' => $data['userid'],
            'statusdate' => date("Y-m-d H:i:s"),
            'status' => 'Applied',
            'reason' => 'Form Request',
            );
        $this->load->model('mstatus');
        $result = $this->mstatus->insert($sdata);
        return $result;
    }
    public function modify($data){
        $this->db->where('idnumber',$data['idnumber']);
        $result = $this->db->update("$this->table", $data);
        return $result;
    }

    function getData(){
        $data = array(
            'idnumber' => '',
            'firstname' => '',
            'surname' => '',
            'address1' => '',
            'address2' => '',
            'residence' => '',
            'nationality' => '',
            'gender' => '',
            'height' => '',
            'expirydate' => '',
            'dateofbirth' => '',
            'title' => '',
            'userid' => ''
            );
        return $data;
    }
}
?>
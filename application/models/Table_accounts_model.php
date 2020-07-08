<?php

class Table_accounts_model extends CI_Model{

    public function fetch_data(){

        $query = $this->db->get("table_accounts");
		return $query;
	}

	public function getSingledata($id)
	{
		$query = $this->db->get_where('table_accounts', array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function search($id)
	{
		$query = $this->db->get_where('table_accounts',array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function update($postData,$id) {
		
		$query = $this->db->update('table_accounts', $postData, array('id' => $id));
		
		return $query;
	}
	// public function move($postData,$id) {
		
	// 	$query = $this->db->insert('prospects', $postData, array('id' => $id));
		
	// 	return $query;
	// }
	public function delete($id){
        $delete = $this->db->delete('table_accounts',array('id'=>$id));
        return $delete?true:false;
    }
	public function create_user($account_no, $f_n, $l_n,$city) {
		
		$data = array(
			'accountno'   => $account_no,
			'firstname'      => $f_n,
			'lastname'   => $l_n,
			'city'   => $city,
			'date_registered' => date('Y-m-j H:i:s')
		);
		$query = $this->db->insert('table_accounts', $data);
		return $query;
		
	}
	public function move($account_no, $f_n, $l_n,$city) {
		
		$data = array(
			'accountno'   => $account_no,
			'firstname'      => $f_n,
			'lastname'   => $l_n,
			'city'   => $city
		);
		$query = $this->db->insert('prospects', $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	//	return $query;
		
	}

	public function email_logs($senderfrom,$email,$subject,$message){
        return $this->db->insert('email_sent_log',['senderfrom'=>$senderfrom,'email'=>$email, 'subject'=>$subject, 'message'=>$message]);

	}
	public function invoice_logs($accountname,$address,$email,$attended,$charges,$description){
        return $this->db->insert('invoice_log',['accountname'=>$accountname,'address'=>$address, 'email'=>$email, 'attended'=>$attended,'charges'=>$charges,'description'=>$description, ]);

    }
}

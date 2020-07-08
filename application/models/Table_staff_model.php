<?php

class Table_staff_model extends CI_Model{

    public function fetch_data(){

        $query = $this->db->get("table_staff");
		return $query;
	}
	public function getSingledata($id)
	{
		$query = $this->db->get_where('table_staff', array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function update($postData,$id) {
		
		$query = $this->db->update('table_staff', $postData, array('id' => $id));
		
		return $query;
	}
	public function delete($id){
        $delete = $this->db->delete('table_staff',array('id'=>$id));
        return $delete?true:false;
    }
	public function create_user($account_no, $f_n, $l_n,$city) {
		
		$data = array(
			'accountno'   => $account_no,
			'firstname'      => $f_n,
			'lastname'   => $l_n,
			'city'   => $city,
			'dateregistered' => date('Y-m-j H:i:s')
		);
		$query = $this->db->insert('table_staff', $data);
		return $query;
		
	}
}

<?php

class Table_users_model extends CI_Model{

    public function fetch_data(){

        $query = $this->db->get("dm_login");
		return $query;
	}

	public function getSingledata($id)
	{
		$query = $this->db->get_where('dm_login', array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function search($id)
	{
		$query = $this->db->get_where('dm_login',array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function update($postData,$id) {
		
		$query = $this->db->update('dm_login', $postData, array('id' => $id));
		
		return $query;
	}
	public function delete($id){
        $delete = $this->db->delete('dm_login',array('id'=>$id));
        return $delete?true:false;
    }
	
}

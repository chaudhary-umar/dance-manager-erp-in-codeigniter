<?php

class Prospects_model extends CI_Model{

    public function fetch_data(){

        $query = $this->db->get("prospects");
		return $query;
	}

	public function getSingledata($id)
	{
		$query = $this->db->get_where('prospects', array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function search($id)
	{
		$query = $this->db->get_where('prospects',array('id' => $id));
		if ($query->num_rows() >0) {
			return $query->row();
		}
	}
	public function update($postData,$id) {
		
		$query = $this->db->update('prospects', $postData, array('id' => $id));
		
		return $query;
	}
	public function delete($id){
        $delete = $this->db->delete('prospects',array('id'=>$id));
        return $delete?true:false;
    }
}

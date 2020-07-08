<?php

class Payments_model extends CI_Model{

    public function fetch_data(){

        $query = $this->db->get("payments");
		return $query;
	}

	public function getSingledata($id)
	{
		$query = $this->db->get_where('accounts_charges', array('id' => $id));
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
		
		$query = $this->db->update('accounts_charges', $postData, array('id' => $id));
		
		return $query;
	}
	public function delete($id){
        $delete = $this->db->delete('accounts_charges',array('id'=>$id));
        return $delete?true:false;
    }
	public function create_user($account_no,$reg_fee,$rectical_fee,$dance_shoes,$tuitions,$costume) {
		
		$data = array(
            'accountno'   => $account_no,
			'registration_fee'   => $reg_fee,
            'recital_fee'      => $rectical_fee,
            'dance_shoes'      => $dance_shoes,
			'monthly_tuitions'   => $tuitions,
			'costume'   => $costume,
			'payment_date' => date('Y-m-j H:i:s')
		);
		$query = $this->db->insert('accounts_charges', $data);
		return $query;
		
	}
}

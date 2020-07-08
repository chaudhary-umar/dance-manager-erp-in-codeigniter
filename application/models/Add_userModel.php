<?php

class Add_userModel extends CI_Model{

    public function add_user_new($email,$password){
        return $this->db->insert('dm_login',['email'=>$email,'password'=>$password]);

	}
	// public function check_username_exsist($username)
	// {
	// 	$this->db->where('username', $username);
	// 	$this->db->from('bas_adduser');
	// 	$query = $this->db->get();
	// 	if($query->num_rows() >0)
	// 	{
	// 		return $query->result();
	// 	}
	// 	else{
	// 		return $query->result();
	// 		// return false;
	// 	}
	// }
	
}

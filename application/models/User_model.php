<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function check_email($email){
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
public function reset_password($email,$pass){
  $this->db->set('password', $pass); //value that used to update column  
  $this->db->where('email', $email); //which row want to upgrade  
  $this->db->update('dm_login');
}


}


?>

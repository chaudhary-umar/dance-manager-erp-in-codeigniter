<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

    function getUserDetails(){
        
        $this->db->order_by("id", "ASC");
		$query = $this->db->get("table_accounts");
		return $query->result();
	
    }

    function getStudentsDetails(){           
        // Select record
        $this->db->order_by("id", "ASC");
        $query = $this->db->get("table_students");
		return $query->result();
	
    }
}
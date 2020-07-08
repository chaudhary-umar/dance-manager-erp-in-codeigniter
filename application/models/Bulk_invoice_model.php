<?php

class Bulk_invoice_model extends CI_Model{

	public function invoice_logs($accountname,$address,$email,$attended,$charges,$description){
        return $this->db->insert('invoice_log',['accountname'=>$accountname,'address'=>$address, 'email'=>$email, 'attended'=>$attended,'charges'=>$charges,'description'=>$description, ]);

    }
}

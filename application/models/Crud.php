<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Crud extends CI_Model

{

    public function __construct()

    {

        $this->load->database();

        $this->load->library('table');

        $this->load->library('session');

    }

    public function getdata($id)
    {
        $query = $this->db->get_where('table_accounts', array('id' => , $id));
            return $query->row_array();
        
    }
}


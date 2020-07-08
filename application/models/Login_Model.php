<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->library('table');
        $this->load->library('session');
    }

    function admin_login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('dm_login');

        if ($query->num_rows() >0)
        {
            return true;
        }
        else
        {
            return false;

        }
    }

}

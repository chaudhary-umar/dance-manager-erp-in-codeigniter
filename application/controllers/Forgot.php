<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Forgot extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('user_model');
    $this->load->library('session');
  }
	public function index()
	{
		$this->load->view('set_password');
    }

  public function reset_password()
  {
  	$this->load->model('user_model');
    $user=array(
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
        );
        
   $data=$this->user_model->reset_password($user['user_email'],$user['user_password']);

    if($data)
    {
       echo 'Error';
    }
    else
    { 
        redirect('confirm');
    }

  }

}




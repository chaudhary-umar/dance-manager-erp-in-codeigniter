<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Email_Grid extends CI_Controller {

	public function index()

	{
		$this->load->view('email_grid');

	}
	public function email_view($id){
		$this->load->model('Table_accounts_model');
		$postData = $this->Table_accounts_model->getSingledata($id);
		$this->load->view('accounts_email_send', ['data' => $postData]);
	}
	}

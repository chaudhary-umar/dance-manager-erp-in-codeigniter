<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $this->load->view('dashboard');
		// $this->load->model('Dashboard_model');
		// $data['resume_30data'] =$this->Dashboard_model->resume_in_30days1();
        // $data['resume_30data1'] =$this->Dashboard_model->resume_in_30days2();
        // $data['tot_res_30_days']=count($data['resume_30data']);
        // $data['tot_res_30_days1']=count($data['resume_30data1']);
        // $this->load->view('dashboard', $data);
		
	}
}

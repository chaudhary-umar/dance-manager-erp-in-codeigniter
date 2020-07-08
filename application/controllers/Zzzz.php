<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Main_model');
	}
	
	// public function index(){

	// 	// get data
	// 	$data = array();
	// 	$data['usersData'] = $this->Main_model->getUserDetails();

	// 	// load view
	// 	$this->load->view('users_view',$data);
	// }

	// Export data in CSV format
	public function exportCSV(){
		
		// file name
		$filename = 'employe data.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
        $this->load->helper('url');
		$this->load->model('Main_model');
		// get data
		$ = $this->Main_model->getUserDetails();
		$file = fopen('php://output', 'w');
		$header = array("UserId","Account No","First Name","Last Name","City","Date Registered");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line)
		{
		     fputcsv($file,$line);
		}
		
		fclose($file);
		exit;usersData
	}
	public function students_CSV(){
		
		// file name
		$filename = 'Students data.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
        $this->load->helper('url');
		$this->load->model('Main_model');
		// get data
		$usersData = $this->Main_model->getStudentsDetails();
		$file = fopen('php://output', 'w');
		$header = array("UserId","Account No","First Name","Last Name","City","Date Registered");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line)
		{
		     fputcsv($file,$line);
		}
		
		fclose($file);
		exit;
	}
}

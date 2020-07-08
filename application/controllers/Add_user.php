<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Add_user extends CI_Controller {
	public function index()
	{
        $this->load->view('add_user');
	}

	public function registar_user(){
		
		$this->load->library('form_validation');
        $this->load->helper('url');
		$this->load->library('email');
		
		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		if($this->form_validation->run()){
			$data['exsist'] = '';
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('Add_userModel');
			// if($this->Add_userModel->check_username_exsist($username)){
			// 	$data['exsist'] = 'This username already exist, Kindly use other name';
			// 	$this->session->set_flashdata('response','This username already exist');
   //              redirect('add_user', $data, 'refresh');
			// }
            if($this->Add_userModel->add_user_new($email,$password)){
				
				$this->session->set_flashdata('response','New User Added Successfully!');
				redirect('add_user', 'refresh');
				
            }
            else{
                $this->session->set_flashdata('response','Add New User Failed! Please Try Again');
                redirect('add_user', 'refresh');
            }
            
		}
		else{
			$this->session->set_flashdata('response','User Registar Failed! Please Try Again');
			redirect('add_user', 'refresh');
		}
	}

}


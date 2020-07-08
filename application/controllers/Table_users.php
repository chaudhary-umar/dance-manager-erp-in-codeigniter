<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Table_users extends CI_Controller {

	public function index()

	{
		$this->load->model('Table_users_model');
        $data["fetch_data"] = $this->Table_users_model->fetch_data();
		$this->load->view('table_users', $data);

	}
	public function view($id)
	{
		$this->load->model('Table_users_model');
		$postData = $this->Table_users_model->getSingledata($id);
		$this->load->view('users_view', ['data' => $postData]);
	}
	public function search_view(){
        $this->load->view('search_view');
	}
	public function search(){
        $data = array();
		$this->load->model('Table_accounts_model');
		$id = $this->input->post('id');
		$postData =$this->Table_accounts_model->search($id);
		if($postData){
			$this->load->view('search_result', ['data' => $postData]);
        }else{
            echo "Error";
        }
	}
	public function update($id){
		$this->load->model('Table_users_model');
		$postData = $this->Table_users_model->getSingledata($id);
		$this->load->view('users_update', ['data' => $postData]);
	}

	public function edit(){
        $data = array();
        $this->load->model('Table_users_model');
        //get post data
        //if update request is submitted
        if($this->input->post('postSubmit')){
            $id = $this->input->post('id');
            $postData = array(
				
                'email' => $this->input->post('email-oo'),
				'password' => $this->input->post('password--oo'),
            );
            $update = $this->Table_users_model->update($postData,$id);
            //validate submitted form data
            
                if($update){
                    redirect('/table_users');
                }else{
                    echo "Error";
                }
            }
        }
        //load the edit page view
		
	
	public function delete($id){
		$this->load->model('Table_users_model');
		if($id){
            //delete post
            $delete = $this->Table_users_model->delete($id);
		if($delete){
	        redirect('/table_users');
		}else{
			echo 'error_msg', 'Some problems occurred, please try again.';
		}
	}

} 

     public function add(){
        $this->load->view('add');
	}
	public function register() {
		
		// set variables from the form
			$account_no = $this->input->post('account_no');
			$f_n    = $this->input->post('first_name');
			$l_n = $this->input->post('last_name');
			$city = $this->input->post('city');
            $this->load->model('Table_accounts_model');
			$data =$this->Table_accounts_model->create_user($account_no, $f_n, $l_n,$city);
			if ($data) {
				// user creation ok
				redirect('/table_accounts');	
			} else {
				
				// user creation failed, this should never happen
				echo 'There was a problem creating your new account. Please try again.';

				
			}
			
		}
		public function logout(){
			redirect('/login');
		}
		
	}




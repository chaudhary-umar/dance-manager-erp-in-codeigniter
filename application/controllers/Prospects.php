<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Prospects extends CI_Controller {

	public function index()

	{
		$this->load->model('Prospects_model');
        $data["fetch_data"] = $this->Prospects_model->fetch_data();
		$this->load->view('prospects', $data);

	}
	public function view($id)
	{
		$this->load->model('Prospects_model');
		$postData = $this->Prospects_model->getSingledata($id);
		$this->load->view('view_prospects', ['data' => $postData]);
	}
	public function search_view(){
        $this->load->view('search_view');
	}
	public function search(){
        $data = array();
		$this->load->model('Prospects_model');
		$id = $this->input->post('id');
		$postData =$this->Prospects_model->search($id);
		if($postData){
			$this->load->view('search_result', ['data' => $postData]);
        }else{
            echo "Error";
        }
	}
	public function update($id){
		$this->load->model('Prospects_model');
		$postData = $this->Prospects_model->getSingledata($id);
		$this->load->view('update_prospects', ['data' => $postData]);
	}

	public function edit(){
        $data = array();
        $this->load->model('Prospects_model');
        //get post data
        //if update request is submitted
        if($this->input->post('postSubmit')){
            $id = $this->input->post('id');
            $postData = array(
				
                'accountno' => $this->input->post('account_no'),
				'firstname' => $this->input->post('first_name'),
				'lastname' => $this->input->post('last_name'),
				'city' => $this->input->post('city')
            );
            $update = $this->Prospects_model->update($postData,$id);
            //validate submitted form data
            
                if($update){
                    redirect('/prospects');
                }else{
                    echo "Error";
                }
            }
        }
        //load the edit page view
		
	
	public function delete($id){
		$this->load->model('Table_accounts_model');
		if($id){
            //delete post
            $delete = $this->Prospects_model->delete($id);
		if($delete){
	        redirect('/table_accounts');
		}else{
			echo 'error_msg', 'Some problems occurred, please try again.';
		}
	}

} 
	
	// public function update1(){
	// 	$postData = array(
	// 		'account_no' = $this->input->post('account_no'),
    //  		'first_name'    = $this->input->post('first_name'),
	//     	'last_name' = $this->input->post('last_name'),
	// 	    'city' = $this->input->post('city')
	// 	);
	// 			$this->load->model('Table_accounts_model');
	// 	$data =$this->Table_accounts_model->update($postData);
	// 	if ($data) {
	// 		// user creation ok
	// 		$this->load->view('table_accounts');		
	// 	} else {
			
	// 		// user creation failed, this should never happen
	// 		echo 'There was a problem creating your new account. Please try again.';

			
	// 	}
		
	// }
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




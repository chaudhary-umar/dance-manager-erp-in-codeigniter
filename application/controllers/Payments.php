<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Payments extends CI_Controller {

	public function index()
	{
		$this->load->model('Payments_model');
        $data["fetch_data"] = $this->Payments_model->fetch_data();
		$this->load->view('payments', $data);

	}
	public function view($id)
	{
		$this->load->model('Accounts_charges_model');
		$postData = $this->Accounts_charges_model->getSingledata($id);
		$this->load->view('accounts_view', ['data' => $postData]);
	}
	public function search_view(){
        $this->load->view('search_view');
	}
	public function search(){
        $data = array();
		$this->load->model('Accounts_charges_model');
		$id = $this->input->post('id');
		$postData =$this->Accounts_charges_model->search($id);
		if($postData){
			$this->load->view('search_result', ['data' => $postData]);
        }else{
            echo "Error";
        }
	}
	public function update($id){
		$this->load->model('Accounts_charges_model');
		$postData = $this->Accounts_charges_model->getSingledata($id);
		$this->load->view('accounts_charges_update', ['data' => $postData]);
	}

	public function edit(){
        $data = array();
        $this->load->model('Accounts_charges_model');
        //get post data
        //if update request is submitted
        if($this->input->post('postSubmit')){
            
            $id = $this->input->post('id');
            $postData = array(
				
                'accountno' => $this->input->post('account_no'),
				'registration_fee' => $this->input->post('reg_fee'),
				'recital_fee' => $this->input->post('recital_fee'),
				'dance_shoes' => $this->input->post('dance_shoes'),
				'monthly_tuitions' => $this->input->post('tuitions'),
				'costume' => $this->input->post('costume'),
				'payment_date' => $this->input->post('date')
            );
            $update = $this->Accounts_charges_model->update($postData,$id);
            //validate submitted form data
            
                if($update){
                    redirect('/accounts_charges');
                }else{
                    echo "Error";
                }
            }
        }
        //load the edit page view
		
	
	public function delete($id){
		$this->load->model('Accounts_charges_model');
		if($id){
            //delete post
            $delete = $this->Accounts_charges_model->delete($id);
		if($delete){
	        redirect('/accounts_charges');
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
        $this->load->view('add_charges');
	}
	public function register() {
		
		// set variables from the form
			$account_no = $this->input->post('account_no');
			$reg_fee    = $this->input->post('reg_fee');
			$rectical_fee = $this->input->post('rectical_fee');
			$dance_shoes = $this->input->post('dance_shoes');
			$tuitions = $this->input->post('tuitions');
			$costume = $this->input->post('costume');
			$date = $this->input->post('date');
            $this->load->model('Accounts_charges_model');
			$data =$this->Accounts_charges_model->create_user($account_no,$reg_fee,$rectical_fee,$dance_shoes,$tuitions,$costume);
			if ($data) {
				// user creation ok
				redirect('/accounts_charges');	
			} else {
				
				// user creation failed, this should never happen
				echo 'There was a problem creating your new account. Please try again.';

				
			}
			
		}
		public function logout(){
			redirect('/login');
		}
		
	}




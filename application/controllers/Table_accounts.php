<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Table_accounts extends CI_Controller {

	public function index()

	{
		$this->load->model('Table_accounts_model');
        $data["fetch_data"] = $this->Table_accounts_model->fetch_data();
		$this->load->view('table_accounts', $data);

	}
	public function view($id)
	{
		$this->load->model('Table_accounts_model');
		$postData = $this->Table_accounts_model->getSingledata($id);
		$this->load->view('view', ['data' => $postData]);
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
		$this->load->model('Table_accounts_model');
		$postData = $this->Table_accounts_model->getSingledata($id);
		$this->load->view('update', ['data' => $postData]);
	}
	public function move($id){
		$this->load->model('Table_accounts_model');
		$postData = $this->Table_accounts_model->getSingledata($id);
		$this->load->view('move', ['data' => $postData]);
	}

	public function edit(){
        $data = array();
        $this->load->model('Table_accounts_model');
        //get post data
        //if update request is submitted
        if($this->input->post('postSubmit')){
            
            // $this->form_validation->set_rules('account_no', 'Account No', 'required');
			// $this->form_validation->set_rules('first_name', 'First Name', 'required');
			// $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            // $this->form_validation->set_rules('city', 'City', 'required');
            $id = $this->input->post('id');
            $postData = array(
				
                'accountno' => $this->input->post('account_no'),
				'firstname' => $this->input->post('first_name'),
				'lastname' => $this->input->post('last_name'),
				'city' => $this->input->post('city')
            );
            $update = $this->Table_accounts_model->update($postData,$id);
            //validate submitted form data
            
                if($update){
                    redirect('/table_accounts');
                }else{
                    echo "Error";
                }
            }
        }
		//load the edit page view
		
		public function edit_data(){
			$data = array();
			$this->load->model('Table_accounts_model');
			//get post data
			//if update request is submitted
			if($this->input->post('postSubmit')){
		
				// set variables from the form
					$account_no = $this->input->post('account_no');
					$f_n    = $this->input->post('first_name');
					$l_n = $this->input->post('lastname');
					$city = $this->input->post('city');
					$this->load->model('Table_accounts_model');
					$data =$this->Table_accounts_model->move($account_no, $f_n, $l_n,$city);
					if ($data) {
						$this->session->set_flashdata('response','Data is moved successfully to Prospects now you can delete');
						// user creation ok
						redirect('/table_accounts');	
					} else {
						
						// user creation failed, this should never happen
						echo 'There was a problem creating your new account. Please try again.';
		
						
					}
					
				}
			}
		
	
	public function delete($id){
		$this->load->model('Table_accounts_model');
		if($id){
            //delete post
            $delete = $this->Table_accounts_model->delete($id);
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
		public function bulk_invoice(){
			// $this->load->model('Table_accounts_model');
			// $postData = $this->Table_accounts_model->getSingledata($id);
			$this->load->view('bulk_invoice_accounts');
		}
		
		
		public function send_sms(){
			// $this->load->model('Table_accounts_model');
			// $postData = $this->Table_accounts_model->getSingledata($id);
			$this->load->view('account_sms_view');
		}

		public function email_view(){
			// $this->load->model('Table_accounts_model');
			// $postData = $this->Table_accounts_model->getSingledata($id);
			$this->load->view('accounts_email_send');
		}

		 public function send_mail()
		{
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->library('email');
	
			$this->form_validation->set_rules('senderfrom', 'Sender', 'required');
			$this->form_validation->set_rules('email', 'Subject', 'required');
			$this->form_validation->set_rules('subject', 'Subject', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	
			if ($this->form_validation->run())
			{
				$senderfrom = $this->input->post('senderfrom');
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');
				$this->load->model('Table_accounts_model');
				if($this->Table_accounts_model->email_logs($senderfrom,$email,$subject,$message)){
      
					$this->email->from('umarjamil@dancemanageronline.com', 'Dance Manager');
					$this->email->to($email);
					// $this->email->subject('Accounts Data');
					$this->email->subject($this->input->post('subject'));
					
					$this->email->message($this->input->post('message').',
					');
					$this->email->send();
					$this->session->set_flashdata('response','Email Sent Successfully');
					redirect('/table_accounts');
   
			   }
			   else{
			   
				   $this->session->set_flashdata('response','Email Sending Failed! Please Try Again');
				   redirect('/table_accounts', 'refresh');
			   }
	
		}	
	}

	// public function send_invoice()
	// 	{
	// 		$this->load->library('form_validation');
	// 		$this->load->helper('url');
	// 		$this->load->library('email');
	
	// 		$this->form_validation->set_rules('accountname', 'Account Name', 'required');
	// 		$this->form_validation->set_rules('address', 'Address', 'required');
	// 		$this->form_validation->set_rules('email', 'Email', 'required');
	// 		$this->form_validation->set_rules('attended', 'Attended', 'required');
	// 		$this->form_validation->set_rules('charges', 'charges', 'required');
	// 		$this->form_validation->set_rules('attended', 'Attended', 'required');
	// 		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	
	// 		if ($this->form_validation->run())
	// 		{
	// 			$accountname = $this->input->post('accountname');
	// 			$address = $this->input->post('address');
	// 			$email = $this->input->post('email');
	// 			$attended = $this->input->post('attended');
	// 			$charges = $this->input->post('charges');
	// 			$description = $this->input->post('description');
	// 			$this->load->model('Table_accounts_model');
	// 			if($this->Table_accounts_model->invoice_logs($accountname,$address,$email,$attended,$charges,$description)){
      
	// 				$this->email->from('umarjamil@dancemanageronline.com', 'Dance Manager');
	// 				$this->email->to($email);
	// 				$this->email->accountname($this->input->post('accountname'));
	// 				$this->email->address($this->input->post('address'));
	// 				$this->email->attended($this->input->post('attended'));
	// 				$this->email->charges($this->input->post('charges'));
	// 				$this->email->description($this->input->post('description').',
	// 				');
	// 				$this->email->send();
	// 				$this->session->set_flashdata('response','Email Sent Successfully');
	// 				redirect('/table_accounts');
   
	// 		   }
	// 		   else{
			   
	// 			   $this->session->set_flashdata('response','Email Sending Failed! Please Try Again');
	// 			   redirect('/table_accounts', 'refresh');
	// 		   }
	
	// 	}
    // }

	}

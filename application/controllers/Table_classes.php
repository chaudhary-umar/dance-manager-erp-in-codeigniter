<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Table_classes extends CI_Controller {
	public function index()

	{
        $this->load->model('Table_classes_model');
        $data["fetch_data"] = $this->Table_classes_model->fetch_data();
        $this->load->view('table_classes', $data);

	}
	public function view($id)
	{
		$this->load->model('Table_classes_model');
		$data = $this->Table_classes_model->getSingledata($id);
	 	$this->load->view('view_classes', ['data' => $data]);
	}
	public function update($id){
		$this->load->model('Table_classes_model');
		$postData = $this->Table_classes_model->getSingledata($id);
		$this->load->view('update_classes', ['data' => $postData]);
	}

	public function edit(){
        $data = array();
        $this->load->model('Table_classes_model');
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
            $update = $this->Table_classes_model->update($postData,$id);
            //validate submitted form data
            
                if($update){
                    redirect('/table_classes');
                }else{
                    echo "Error";
                }
            }
        }
        //load the edit page view
		
	
	public function delete($id){
		$this->load->model('Table_classes_model');
		if($id){
            //delete post
            $delete = $this->Table_classes_model->delete($id);
		if($delete){
	        redirect('/table_students');
		}else{
			echo 'error_msg', 'Some problems occurred, please try again.';
		}
	}

} 
	public function add(){
        $this->load->view('add_classes');
	}
    public function register() {
		$this->load->model('Table_classes_model');
		// set variables from the form
			$account_no = $this->input->post('account_no');
			$f_n    = $this->input->post('first_name');
			$l_n = $this->input->post('last_name');
			$city = $this->input->post('city');
            $this->load->model('Table_accounts_model');
			$data =$this->Table_classes_model->create_user($account_no, $f_n, $l_n,$city);
			if ($data) {
				// user creation ok
				redirect('/table_classes');	
			} else {
				
				// user creation failed, this should never happen
				echo 'There was a problem creating your new account. Please try again.';

				
			}
			
		}

		public function email_view(){
			$this->load->view('class_email_send');
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
				$this->load->model('Table_classes_model');
				if($this->Table_classes_model->email_logs($senderfrom,$email,$subject,$message)){
      
					$this->email->from('umarjamil@dancemanageronline.com', 'Dance Manager');
					$this->email->to($email);
					// $this->email->subject('Accounts Data');
					$this->email->subject($this->input->post('subject'));
					
					$this->email->message($this->input->post('message').',
					');
					$this->email->send();
					$this->session->set_flashdata('response','Email Sent Successfully');
					redirect('/table_classes');
   
			   }
			   else{
			   
				   $this->session->set_flashdata('response','Email Sending Failed! Please Try Again');
				   redirect('/table_classes', 'refresh');
			   }
	
		}
	}

}


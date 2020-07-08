<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Report_students extends CI_Controller {
	public function index()
	{
		$this->load->model('Table_students_model');
        $data["fetch_data"] = $this->Table_students_model->fetch_data();
        $this->load->view('report_students', $data);
	}
	public function view($id)
	{
		$this->load->model('Table_students_model');
		$data = $this->Table_students_model->getSingledata($id);
	 	$this->load->view('view_reports_students', ['data' => $data]);
	}
	public function update($id){
		$this->load->model('Table_students_model');
		$postData = $this->Table_students_model->getSingledata($id);
		$this->load->view('update_reports_students', ['data' => $postData]);
	}

	public function edit(){
        $data = array();
        $this->load->model('Table_students_model');
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
            $update = $this->Table_students_model->update($postData,$id);
            //validate submitted form data
            
                if($update){
                    redirect('/report_students');
                }else{
                    echo "Error";
                }
            }
        }
        //load the edit page view
		
	
	public function delete($id){
		$this->load->model('Table_students_model');
		if($id){
            //delete post
            $delete = $this->Table_students_model->delete($id);
		if($delete){
	        redirect('/report_students');
		}else{
			echo 'error_msg', 'Some problems occurred, please try again.';
		}
	}

} 
	public function add(){
        $this->load->view('add_reports_students');
	}
    public function register() {
		$this->load->model('Table_students_model');
		// set variables from the form
			$account_no = $this->input->post('account_no');
			$f_n    = $this->input->post('first_name');
			$l_n = $this->input->post('last_name');
			$city = $this->input->post('city');
            $data =$this->Table_students_model->create_user($account_no, $f_n, $l_n,$city);
			if ($data) {
				// user creation ok
				redirect('/report_students');	
			} else {
				
				// user creation failed, this should never happen
				echo 'There was a problem creating your new account. Please try again.';

				
			}
			
		}

}


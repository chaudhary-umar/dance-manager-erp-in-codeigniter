<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Invoice extends CI_Controller {


	public function send_invoice()
		{
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->library('email');
	
			$this->form_validation->set_rules('accountname', 'Account Name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('attended', 'Attended', 'required');
			$this->form_validation->set_rules('charges', 'charges', 'required');
			$this->form_validation->set_rules('attended', 'Attended', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	
			if ($this->form_validation->run())
			{
				$accountname = $this->input->post('accountname');
				$address = $this->input->post('address');
				$email = $this->input->post('email');
				$attended = $this->input->post('attended');
				$charges = $this->input->post('charges');
				$description = $this->input->post('description');
				$this->load->model('Table_accounts_model');
				if($this->Table_accounts_model->invoice_logs($accountname,$address,$email,$attended,$charges,$description)){
      
					$this->email->from('umarjamil@dancemanageronline.com', 'Dance Manager');
					$this->email->to($email);
					$this->email->accountname($this->input->post('accountname'));
					$this->email->address($this->input->post('address'));
					$this->email->attended($this->input->post('attended'));
					$this->email->charges($this->input->post('charges'));
					$this->email->description($this->input->post('description').',
					');
					$this->email->send();
					$this->session->set_flashdata('response','Email Sent Successfully');
					redirect('/table_accounts/bulk_invoice');
   
			   }
			   else{
			   
				   $this->session->set_flashdata('response','Email Sending Failed! Please Try Again');
				   redirect('/table_accounts/bulk_invoice', 'refresh');
			   }
	
		}
    }
}
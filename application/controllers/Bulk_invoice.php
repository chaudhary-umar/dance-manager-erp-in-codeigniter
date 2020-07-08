<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Bulk_invoice extends CI_Controller {

    public function index(){
        // $this->load->model('Table_accounts_model');
        // $postData = $this->Table_accounts_model->getSingledata($id);
        $this->load->view('bulk_invoice_accounts');
    }
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
                $subject = 'Invoice Details';
				$this->load->model('Bulk_invoice_model');
				if($this->Bulk_invoice_model->invoice_logs($accountname,$address,$email,$attended,$charges,$description)){
                    $this->email->set_mailtype("html"); 
					$this->email->from('umarjamil@dancemanageronline.com', 'Dance Manager');
                    $this->email->to($email);
                    $this->email->subject($subject);
                    $messagehired="<html><head></head><body>";
                    $messagehired.='<p>Dear ' .$accountname.',</p>';
                    $messagehired.="<p>Postal Address: ".$address."</p>";
                    $messagehired.='<br><strong>Your have attended:</strong><br>';
                    $messagehired.="<p><strong>Classes: </strong> ".$attended."</p>";
                    $messagehired.='<br><strong>Your Charges due is: </strong><br>';
                    $messagehired.="<p><strong>Charges: </strong> ".$charges."</p><br>";
                    $messagehired.="<p><strong>Note: </strong> ".$description."</p>";
                    $messagehired.="<br> Regards!";
                    $messagehired.="<p>Team Dance Manager</p>";
                    $messagehired.='</body></html>';
                    $this->email->message($messagehired);
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
}




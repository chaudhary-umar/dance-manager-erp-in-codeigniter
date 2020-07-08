<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {



	public function index()

	{

        $this->load->model('Login_Model');

		$this->load->view('login');

    }

    //Login function

    function login_validation(){

		$this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()){



            $email = $this->input->post('email');

            $password = $this->input->post('password');

            //Model function call here

            $this->load->model('Login_Model');

            if ($this->Login_Model->admin_login($email,$password))

            {

                $session_data = array(

                    'name' => $name

                  );

                  $this->session->set_userdata($session_data);

                  redirect('dashboard');

			}

            else

            {

                $this->session->set_flashdata('error', 'Invalid User Name and Password');

                redirect('login');

            }



        }

        else{

            $this->index();

        }

    }

}




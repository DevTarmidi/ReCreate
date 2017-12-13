<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		$this->load->model('m_user');
	}
	
	public function index()
	{
		$this->load->helper('security');
		$data['menu']=0;
		$this->load->view('header', $data);
		$this->load->view('footer');
		$this->register();
	}

	function register()
    {
        //set validation rules
		$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required|alpha_numeric_spaces|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|xss_clean|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('signup');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->m_user->insertUser($data))
            {
				$this->session->set_flashdata(
					'msg','<div class="alert alert-success text-center">Successfully Registered!</div>');
				redirect('signup');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong! Please try again later.</div>');
                redirect('signup');
            }
        }
    }
}

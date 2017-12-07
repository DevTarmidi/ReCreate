<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('recreate_m');
	}

	public function index()
	{
		$data['menu']=1;
		$this->load->view('header', $data);
		$this->load->view('footer');

		//get the posted values
		$username = $this->input->post("txt_username");
		$password = $this->input->post("txt_password");

		//set validations
		$this->form_validation->set_rules("txt_username", "Username", "trim|required");
		$this->form_validation->set_rules("txt_password", "Password", "trim|required");

		if ($this->form_validation->run() == FALSE)
		{
			//validation fails
			$this->load->view('home');
		}
		else
		{
			//validation succeeds
			if ($this->input->post('btn_login') == "Sign In")
			{
				//check if username and password is correct
				$usr_result = $this->recreate_m->getUser($username, $password);
				if ($usr_result > 0) //active user record is present
				{
					//set the session variables
					$sessiondata = array(
						'username' => $username,
						'loginuser' => TRUE
					);
					$this->session->set_userdata($sessiondata);
					redirect('dashboard');
				}
				else
				{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
					redirect('home');
				}
			}
			else
			{
				redirect('home');
			}
		}
	}
}

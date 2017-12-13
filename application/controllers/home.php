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
		$this->load->model('m_url');
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
			if ($this->input->post('btn_singkat') == "Singkat")
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

	public function singkat(){
		$this->form_validation->set_rules("txt_url", "URL", "trim|required");
		$original = $this->input->post("txt_url");
		$hash = md5($original);
		$shorten = substr($hash, 0, 6);
		
		// check ke db udah ada atau belum
		if (!$this->m_url->isExistOri($original)) {
			$this->m_url->insert($original, $shorten);
		}

		// kalo link short udah ada, hashing lagi
		while ($this->m_url->isExistShorten($shorten)) {
			$hash = md5($shorten);
			$shorten = substr($hash, 0, 6);
		}
		
		// pesan berhasil ngasih link short
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Your shorten url is <a href="'.base_url().$shorten.'">singkat.in/'.$shorten.'</div>');
		redirect('home');
	}

	public function redirect() {
		
	}
}

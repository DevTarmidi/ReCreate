<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {
	public function index()
	{
		$data['menu']=0;
		$this->load->view('header', $data);
		$this->load->view('signup');
		$this->load->view('footer');
	}
}

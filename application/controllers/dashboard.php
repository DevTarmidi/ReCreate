<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index()
	{
		$data['menu']=4;
		$this->load->view('header', $data);
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
}

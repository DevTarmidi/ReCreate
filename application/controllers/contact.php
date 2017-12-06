<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
	public function index()
	{
		$data['menu']=3;
		$this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
}

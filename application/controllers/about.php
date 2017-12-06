<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {
	public function index()
	{
		$data['menu']=2;
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
}

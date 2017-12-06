<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data['menu']=1;
		$this->load->view('header', $data);
		$this->load->view('body');
		$this->load->view('footer');
	}
}

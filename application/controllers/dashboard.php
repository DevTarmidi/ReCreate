<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index()
	{
		$data['menu']=4;
		$udate['status'] = false;
		$this->load->view('header', $data);
		$this->load->view('dashboard', $udate);
		$this->load->view('footer');
	}
	public function update()
	{
		$data['menu']=4;
		$udate['status'] = true;
		$this->load->view('header', $data);
		$this->load->view('dashboard', $udate);
		$this->load->view('footer');
	}
}

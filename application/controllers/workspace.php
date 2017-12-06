<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workspace extends CI_Controller {
	public function index()
	{
        $data['menu']=4;
		$this->load->view('header', $data);
		$this->load->view('workspace');
		$this->load->view('footer');
    }
}

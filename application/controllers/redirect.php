<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class redirect extends CI_Controller {

    public function tourl()
    {
        $this->load->model('m_url');//load the model which looks after the URLs
        $url = $this->uri->segment(1);//get the URL segment e.g. abc
        $result = $this->m_url->getUrl($url);
        if (!$result) {
            // halaman not found
            return;
        }

        redirect($result->original); //lookup the original URL and redirect
    }
}
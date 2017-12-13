<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_url extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function insert($original, $shorten)
  {
    return $this->db->insert('url', [
      'original' => $original,
      'shorten' => $shorten
    ]);
  }

  function isExistOri($original)
  {
    return $this->db->get_where('url', [
      'original' => $original
    ], 1)->num_rows() > 0;
  }

  function isExistShorten($shorten)
  {
    return $this->db->get_where('url', [
      'shorten' => $shorten
    ], 1)->num_rows() > 0;
  }

  function getUrl($shorten)
  {
    return $this->db->get_where('url', [
      'shorten' => $shorten
    ], 1)->row();
  }
}
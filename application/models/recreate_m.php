<?php defined('BASEPATH') OR exit('No direct script access allowed');

class recreate_m extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function insertUser($user)
  {
    return $this->db->insert('user', $user);
  }

  function getUser($email) {
    $user = $this->db->where('email', $email)->get('users')->row_array();
    if(count($user) > 0) return $user;
    return false;
  }


}
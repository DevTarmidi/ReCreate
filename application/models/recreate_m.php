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

  function getUser($user, $pass)
  {
       $sql = "select * from user where username = '" . $user . "' and password = '" . md5($pass) . "'";
       $query = $this->db->query($sql);
       return $query->num_rows();
  }
  
}
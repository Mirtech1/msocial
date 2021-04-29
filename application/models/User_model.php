<?php
class User_model extends CI_Model{
  function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

public function Verify($data){
    $condition = "email =" . "'" . $data['email'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    
    if ($query->num_rows() > 0) {
        return true;
        } else {
        return false;
        }

}
public function insert($data){
  $this->db->insert('users', $data);
}

public function ValidateEntry($data){
  $condition = "email =" . "'" . $data['email'] . "' AND " . "pass =" . "'" . $data['password'] . "'";
  $this->db->select('*');
  $this->db->from('users');
  $this->db->where($condition);
  $this->db->limit(1);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
  return true;
  } else {
  return false;
  }
}

public function fetchUserData($data){
  $condition = "email =" . "'" . $data['email'] . "' AND " . "pass =" . "'" . $data['password'] . "'";
  $this->db->select('*');
  $this->db->from('users');
  $this->db->where($condition);
  $this->db->limit(1);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
  return $query->result();
  } else {
  return false;
  }
}

public function sessReg($data){
  $condition = "email =" . "'" . $data['email'] . "' AND " . "pass =" . "'" . $data['pass'] . "'";
  $this->db->select('*');
  $this->db->from('users');
  $this->db->where($condition);
  $this->db->limit(1);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
  return $query->result();
  } else {
  return false;
  }
}










}
?>
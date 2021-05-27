<?php
class UserModel extends CI_Model
{
  private $user_table = 'users';

  function __construct()
  {
    parent::__construct();
  }

  function insert_user($array)
  {
    // $data = array(
    //   'name' => $name,
    //   'password' => md5($password),
    //   'email' => $email, 
    //   'phone' => $phone,
    //   'gender' => $gender, 
    //   'dob' => $dob,
    //   'address' => $address
    // );
    $result = $this->db->insert($this->user_table, $array);
    if ($result !== NULL) {
      return TRUE;
    }
    return FALSE;
  }
}

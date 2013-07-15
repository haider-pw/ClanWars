<?php
class MY_Model extends CI_Model{
    function __construct(){
        parent::__construct();
}
    function login($user)
    {
      $this->db->select();
      $this->db->from('cw_user');
      $this->db->where($user);
    }

}
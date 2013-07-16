<?php
class MY_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
}
    function login($user)
    {

      $this->db->select()->from('cw_user')->where($user);
      $data= $this->db->get();
        if($data->num_rows == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}
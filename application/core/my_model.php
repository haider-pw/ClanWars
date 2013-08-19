<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get($table,$where=array(),$single=FALSE) {
        $q = $this->db->get_where($table,$where);
        $result = $q->result_array();

        if($single && $result!=null) {
            return $result[0];
        }
        else{
            return $result;
        }
    }

    function get_by($columns, $table, $where=array(), $single=FALSE ){
        $this->db->select($columns);
        $this->db->from($table);
        $this->db->where($where);
        $q = $this->db->get();
        $result = $q->result();
        if($single) {
            return $result[0];
        }

        return $result;
    }


    function update($table,$where=array(),$data) {
        $this->db->update($table,$data,$where);
        return $this->db->affected_rows();
    }

    function delete($table,$where=array()) {
        $this->db->delete($table,$where);
        return $this->db->affected_rows();
    }

    function explicit($query) {
        $q = $this->db->query($query);
        if(is_object($q)) {
            return $q->result_array();
        } else {
            return $q;
        }
    }

    public function unique_name($name)
    {
        $UserTable = 'cw_user';
        $user = $this->get($UserTable,$name,TRUE);
        if(count($user)){

            return TRUE;
        }
    }
    public function unique_email($email)
    {
        $UserTable = 'cw_user';
        $user = $this->get($UserTable,$email,TRUE);
        if(count($user)){
            return TRUE;
        }
    }
    public function login($Where){
        $UserTable = 'cw_user';
        $user = $this->get($UserTable,$Where,TRUE);
        if(count($user)){
            //Log the User in if User Record is Returned
            $data=array(
                'UserName' => $user['UserName'],
                'Email' => $user['Email'],
                'UserID' => $user['UserID'],
                'LoggedIn' => TRUE
            );
            $this->session->set_userdata($data);
            return TRUE;
        }
    }
    public function logout(){
        $this->session->sess_destroy();
    }
    public function loggedin(){
        return (bool) $this->session->userdata('LoggedIn');
    }

//    public function userid(){
//        return $this->session->userdata('UserID');
//
//    }

    public function hash($string){
        return hash('sha512', $string.config_item('encryption_key'));
    }
    function edit ($id)
    {
        $this->db->select()->from('cw_user')->where('UserID',$id);
        $query=$this->db->get();
        return $query->result_array();
    }
}
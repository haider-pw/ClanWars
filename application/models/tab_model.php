<?php
/**
 * Created by JetBrains PhpStorm.
 * User: SBPS
 * Date: 8/19/13
 * Time: 3:41 PM
 * To change this template use File | Settings | File Templates.
 */
class Tab_Model extends MY_Model{


    function __construct(){
        parent::__construct();
    }

    public function check_allow($arr){
        $count=0;
        foreach($arr as $key=> $value){
            $actual_array[$count++] = $value->RoleID;
        }
        $this->db->select('*');
        $this->db->from('cw_menus_in_roles');
        $this->db->where_in('RoleID',$actual_array);
        $query=$this->db->get();
//        print_r($query->result());
//        exit;
        return $query->result();
    }// end of authenticate function
}
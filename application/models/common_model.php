<?php

class Common_Model extends MY_Model {
    public function __construct(){
        parent::__construct();
    }

    function joined_get_by($data, $PTable, $joins,$where='',$group_by='')
    {
        $this->db->select($data);

        $this->db->from($PTable);
        foreach ($joins as $k => $v){
            $this->db->join($v['table'], $v['condition'], $v['jointype']);
        }
        if($where!='')
        {
            $this->db->where($where);
        }
        if($group_by!=''){
            $this->db->group_by($group_by);
        }

        $query = $this->db->get();
        return $query->result();
    }
    public function check_allow($arr){
        $count=0;
        foreach($arr as $key=> $value){
            $actual_array[$count++] = $value->RoleID;
        }
        $this->db->select('*');
        $this->db->from('cw_menus-in-roles');
        $this->db->where_in('RoleID',$actual_array);
        $query=$this->db->get();
//        print_r($query->result());
//        exit;
        return $query->result();
    }// end of authenticate function

}
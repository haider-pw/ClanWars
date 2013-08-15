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

}
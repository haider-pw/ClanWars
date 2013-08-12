<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('checkIfLoggedIn'))
{
    function checkIfLoggedIn($session_loggedIn)
    {
        $loggedIn = $session_loggedIn;
        if(!$loggedIn
            || $loggedIn<=0){
            redirect('user_management/login_form');
        }
    }
}
function LoggedIn(){
    $ci =& get_instance();
    if($ci->session->userdata('LoggedIn')){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
if (!function_exists('checkuserrole'))
{
    function CheckUserRole($session_loggedIn)
    {
        $loggedIn = $session_loggedIn;
        if($loggedIn > 0)
        {
            $groupsids='';
            $arr = explode("-",$loggedIn);
            $id = $arr[1];
            $ci =& get_instance();
            $ci->load->model('common/common_model');
            $data = $ci->common_model->get_records('sys_user_groups_memberships','GroupID','UserID',$id);
            foreach($data->result() as $vari)
            {
                $groupsids[] = $vari->GroupID;
            }
            //var_dump($groupsids);
//            if($groupsids!=NULL){
//                echo "it is not NULL";
//            }
//            exit();
            $roles = $ci->common_model->get_where_in('sys_user_groups_roles','GroupID,RoleID',$groupsids,'GroupID');
            foreach($roles->result_array() as $varible)
            {

                $rolesids[] = $varible['GroupID'];
                $rolesids[] = $varible['RoleID'];
            }

            return $rolesids;

        }

    }
}
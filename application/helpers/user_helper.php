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


    function CheckUserRole($UserID)
    {
        if($UserID > 0)
        {
            $ci =& get_instance();
            $ci->load->model('Common_Model');
            $where=array(
                'UserID' => $UserID
            );
            $UserGroupID = $ci->Common_Model->get_by('GroupID','cw_user',$where,TRUE);
            $where=array(
                'GroupID' => $UserGroupID->GroupID
            );
            $userRoles = $ci->Common_Model->get_by('RoleID','cw_roles_in_group',$where,False);
            return $userRoles;
        }


}
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
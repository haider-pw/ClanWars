<?php
/**
 * Created by JetBrains PhpStorm.
 * User: SBPS
 * Date: 8/12/13
 * Time: 3:33 PM
 * To change this template use File | Settings | File Templates.
 */

class System_Configuration extends Backend_Controller{
    public function __construct(){
        parent:: __construct();
    }

 function get_user_tabs(){
     if(LoggedIn()){
         $userRoles = CheckUserRole($this->session->userdata('UserID'));
     }
     else{
         print_r('User is not logged in');
     }

 }
}
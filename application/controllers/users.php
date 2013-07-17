<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {
    public function __construct(){
        parent::__construct();
    }

    //Loads the Login Page View.
    function login()
    {
        $this->load->view('login_page');
    }

    function login_user()
    {
        $user = $_POST['UserName'];
        $password = $_POST['Password'];
        $user_data = array
        (
            'UserName' => $user,
            'Password' => $password
        );
        $result=$this->Common_Model->login($user_data);
        if($result==true)
        {
            $this->load->view('main');
        }
        else
        {
            echo "login fail";
        }

    }
    function logout(){
        $this->Common_Model->logout();
        $this->load->view('main');
    }
    function register_user(){

    }
}
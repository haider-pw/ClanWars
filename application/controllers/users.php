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
        $pass=$this->Common_Model->hash($password);
        $user_data = array
        (
            'UserName' => $user,
            'Password' => $pass
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
        $user=$this->input->post('UserName');
        $game_name=$this->input->post('game_name');
        $cnic=$this->input->post('cnic');
        $age=$this->input->post('age');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $gender=$this->input->post('gender');
        $pass=$this->Common_Model->hash($password);
        $table="cw_user";
        $user_data = array
        (
            'UserName' => $user,
            'InGameName' => $game_name,
            'Cnic' => $cnic,
            'age' => $age,
            'email' => $email,
            'gender' => $gender,
            'Password' => $pass
        );
        $this->Common_Model->insert($table,$user_data);


    }
}
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

public function  __construct() {

parent::__construct();

}

    function index()
    {
        $this->load->view('main');
    }

    function login()
    {
        $this->load->view('login_page');
    }

    function login_user()
    {
        $user=$_POST['UserName'];
        $password=$_POST['UserPass'];
        $user_data=array
        ("UserName" => $user,
        "Password"=> $password);
        $this->load->model('my_model');
        $result=$this->my_model->login($user_data);
        if($result==true)
        {
            echo "sucessful";
        }
        else
        {
            echo "fail";
        }

    }

}
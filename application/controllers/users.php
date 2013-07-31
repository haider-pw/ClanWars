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
            redirect('/');
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
    function user_profile_view(){
        $this->load->view('user_pages/profile');
    }
    function profile_edit_view(){
        $this->load->view('user_pages/profile_edit');
    }

    function profile_view(){
        $data['id']= $this->session->userdata('UserID');
        $this->load->view('user_pages/profile_view',$data);
    }

    function session_userid()
    {
     echo $this->Common_Model->userid();
    }

    public function profile_edit($id)
    {
        $sendid=$id;
        $data5=$this->Common_Model->edit($sendid);
        $json=json_encode($data5);
        print_r($json);
    }

    function update_profile()
    {
        $get=file_get_contents('php://input');
        $json_get=json_decode($get);
        var_dump($json_get);
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
        print_r($user_data);
        exit;
    }
}
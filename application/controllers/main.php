<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

public function  __construct() {

parent::__construct();

}

    function index()
    {
        $this->load->view('main');
    }



    function login_user()
    {
        $user=$_POST['UserName'];
        $password=$_POST['Password'];
        $user_data=array
        ('UserName'=>$user,
        'Password'=> $password);
        $result=$this->Common_Model->login($user_data);
        if($result==true)
        {
            $this->load->view('main');
        }
        else
        {
            echo 'login fail';
        }

    }

    function validation_form()
    {
        $this->load->view('registration');
    }

    function validation()
    {
        $errors = array();

        if(!$_POST['name'] || strlen($_POST['name'])<3 || strlen($_POST['name'])>25)
        {
            $errors['name']='Please fill in a valid name!<br />Must be between 3 and 25 characters.';
        }

        if(!$_POST['game_name'])
        {
            $errors['game_name']='Please fill in a valid game name!<br />';
        }

        if(!$_POST['age'] || $_POST['age'] > 120 || $_POST['age'] < 5)
        {
            $errors['age']='Please fill in a valid age!<br />Must be between 5 and 120.';
        }

        if(!$_POST['email'] || !preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $_POST['email']))
        {
            $errors['email']='Please fill in a valid email!';
        }
        if(!$_POST['re_email'] || $_POST['re_email'] != $_POST['email'])
        {
            $errors['re_email']='Your email does not match!<br />';
        }

        if(!$_POST['gender'])
        {
            $errors['gender']='Please select one!<br />';
        }

        if(!$_POST['pass'] || strlen($_POST['pass'])<5)
        {
            $errors['pass']='Please fill in a valid password!<br />Must be at least 5 characters long.';
        }
        if(!$_POST['re_pass'] || $_POST['re_pass']!= $_POST['pass'])
        {
            $errors['re_pass']='The Password doest not match!<br />';
        }
// Checking whether the request was sent via AJAX
// (we manually send the fromAjax var with the AJAX request):


        if($_POST['fromAjax'])
        {
            if(count($errors))
            {
                $errString = array();
                foreach($errors as $k=>$v)
                {
                    // The name of the field that caused the error, and the
                    // error text are grouped as key/value pair for the JSON response:
                    $errString[]='"'.$k.'":"'.$v.'"';
                }

                // JSON error response:
                die	('{"status":0,'.join(',',$errString).'}');
            }

            // JSON success response. Returns the redirect URL:
            $table='cw_user';
            $data = array(
                'UserName' => $_POST['name'],
                'InGameName' => $_POST['game_name'],
                'Age' => $_POST['age'],
                'Cnic' => $_POST['cnic'],
                'Email' => $_POST['email'],
                'Password' => $_POST['pass'],
                'Gender' => $_POST['gender']

            );
            $this->CommonModel->insert($table,$data);
        }

// If the request was not sent via AJAX (probably JavaScript
// has been disabled in the visitors' browser):

        if(count($errors))
        {
            echo '<h2>'.join('<br /><br />',$errors).'</h2>';
            exit;
        }
        else{
            $data = array(
                'username' => $_POST['name']
            );
            $this->load->view('');
        }
        var_dump(count($errors));

// Directly redirecting the visitor:




    }

}